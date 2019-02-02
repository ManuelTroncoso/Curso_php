<?php

function Connect($config = array()){
    $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
    mysqli_set_charset($con, $config['encoding']);
    return ($con);
}
function Execute($sql, $con){
    $return = mysqli_query($con, $sql);
    return ($return);
}
function ExecuteQuery($sql, $con){
    $result = mysqli_query($con, $sql);
    if($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        do{
            $data[] = $row;
        }while($row =  mysqli_fetch_array($result, MYSQLI_BOTH));
    }
    else{
        $data = null;
    }
    mysqli_free_result($result);
    return($data)
}

?>