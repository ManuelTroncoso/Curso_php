<?php

function debug($var){
    $debug = degug_backtrance();
    echo "<pre>";
    echo $debug[0]['file']." ".$debug[0][line]."<br><br>";
    print_r($var);
    echo "<pre>";
    echo "<br>";

} 

?>