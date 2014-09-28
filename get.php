<?php

$stack = file_get_contents('cards.json');

//call to function / Returning Data
print_r(search($stack, $_POST['card']));

function search($arr, $card){
    $res = json_decode($arr, true);
    $flag = true;
    foreach($res as $key => $value){
        if($key == $card){
            return json_encode($value);
            exit;
        }
        else{
            $flag = false;
        }
    }

    if(!$flag){
        return json_encode(array("code"=>'404','message'=>'No Cards Found'));
    }

}