<?php

function random_num($length){
    $text = 'LID';
    if($length < 5){
        $length = 3;
    }

    $len = rand(1 , $length);

    for($i=0 ; $i<$len ; $i++){
        $text .= rand(0,9);
    }
    return $text;
}

function random_num_event($length){
    $text = 'EID';
    if($length < 5){
        $length = 3;
    }

    $len = rand(1 , $length);

    for($i=0 ; $i<$len ; $i++){ 
        $text .= rand(0,9);
    }
    return $text;
}

function random_num_transaction($length){
    $text = 'TID';
    if($length < 5){
        $length = 5;
    }

    $len = rand(1 , $length);

    for($i=0 ; $i<$len ; $i++){
        $text .= rand(0,9);
    }
    return $text;
}
?>