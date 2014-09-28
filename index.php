<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

Assuming User has the Generated Card value (possible values for demo : cardA, cardB, cardC, cardD) :<br/>

<input type="text" placeholder="Enter Travel Card Number" size="40"/>
<button>Search</button>

<ol></ol>

<script src = //cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js></script>
<script>
    $(function(){
        $('button').click(function(){
            $.post('get.php', {card:$('input').val()})
                .done(function (response) {
                    var res = JSON.parse(response);
//                    console.log(res);
                    if(res.code){
                        switch(res.code){
                            case '404':
                                alert("No Cards found");
                                break;
                        }
                    }
                    else{
                        console.log(res);
                        //BUS vars
                        var busName = (res.busroute.busName)? res.busroute.busName: "Not Known";
                        var busStatA = (res.busroute.busStatA)? res.busroute.busStatA: "Not Known";
                        var busStatB = (res.busroute.busStatB)? res.busroute.busStatA: "Not Known";
                        var busSeat = (res.busroute.busSeat)? res.busroute.busSeat: "Not Known";
                        //TRAIN vars
                        var trainName = (res.trainroute.trainName)? res.trainroute.trainName: "Not Known";
                        var trainStatA = (res.trainroute.trainStatA)? res.trainroute.trainStatA: "Not Known";
                        var trainStatB = (res.trainroute.trainStatB)? res.trainroute.trainStatB: "Not Known";
                        var trainSeat = (res.busroute.trainSeat)? res.busroute.trainSeat: "Not Known";
                        //Flight vars
                        var flightName = (res.flightroute.flightName)? res.flightroute.flightName: "Not Known";
                        var airportA = (res.flightroute.airportA)? res.flightroute.airportA: "Not Known";
                        var airportB = (res.flightroute.airportB)? res.flightroute.airportB: "Not Known";
                        var flightSeat = (res.busroute.trainSeat)? res.busroute.trainSeat: "Not Known";

                        $('body').find('ol').html("<li>Start Your Trip from " + res.start +"</li>"+
                        " <li>Take Bus " + busName + " from " + busStatA + " TO "+ busStatB+" Take a Seat in Seat No. "+ busSeat+"</li>"+
                        " <li>Take Train " + trainName + " from " + trainStatA + " TO "+trainStatB+" Take a Seat in Seat No. "+ trainSeat+"</li>"+
                        " <li>Take Flight " + flightName + " from " + airportA + " TO "+res.flightroute.airportB+" Take a Seat in Seat No. "+ flightSeat+"</li>"+
                        " <li>To reach your destination " + res.dest+"</li>"
                        );
                    }
                });
        });
    });
</script>
</body>
</html>