NOTE:THE PROJECT is Developed assuming, the minimal details from a Boarding Pass and all the details of the boarding Pass are readily available as an JSON file.

//////////////////////INSTRUCTION on USING THE CODE////////////////
1. COPY and PASTE the code in a local server, Enabled with Apache and PHP engine. likely to be WAMP, XAMPP
    Assuming we are using WAMP Server, Paste the Folder into the www directory, [path-> C:\wamp\www]
    Assuming we are using XAMPP Server, Paste the Folder into the htdocs directory, [path-> C:\xampp\htdocs]
2. Navigate to the folder.
 Assuming you have named the Project folder as TRIPSORT
 URL would be,
 for eg: http://localhost/TRIPSORT

# This example is reading data from JSON file, we are not using any Database as such for now.

# The Value returned will be in a JSON format, so that can be manipulated easily.

# Assuming User is on WEB APP, The API will return the values to user either by a Javascript call via AJAX or we can
Return data into any php variable in a php file by accessing the function and by specifying the Desired parameters

/////////////////////////SOLUTION TO COMPLEXITY//////////////////////////

# After visualising the Requirements, I have made a bit of twist to the Project, where in all the travel schedule will be
stored in a form of a Travel card, which will be a unique key to the Trip from Point A to Point B.

# Collect all the data of a trip from the User and add it as a value for Travel card, which contains all the Details from your Origin to Destination.
Generate a CardNo or a CardName may be, which is Unique. Hand it over to User.

# Get the input as that cardNo/ cardName from the User, and we can define the route for the traveller, with all the details possible.

# We can take a timestamp for each origin and destination as a input from the User
 and Based on the Time Log , we can keep a track where the User should be on this time, and where is he and what is the delta time he
has to arrive on next possible Station, and We can Generate an Alert for the User.


/////////////////////////FUTURE EXPANSION SCENARIO///////////////////////////////
# We can Input the data from user, via HTML interface.
# We can even take input of Time as well from the User, To make efficient travelling and calculating Delta time to reach next station.
# This can be used as an Travel App in mobiles, as we can consume the same API to populate the data for the user.
# Technology enhancement can be very much made, by using a FrameWork viz: CodeIgniter or Laravel for developing the APIs.



