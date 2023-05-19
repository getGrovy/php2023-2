<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    
    $type = $_POST['type'];
    $jsonResult = "bad";
    
    if( $type == "isPwChk"){
        $youPass = $_POST['youPass'];    
        $youEmail= $_POST['youEmail'];
        $sql = "SELECT youPass FROM members2 WHERE youPass = '{$youPass}' AND youEmail = '{$youEmail}'";
    }

    $result = $connect -> query($sql);
    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>