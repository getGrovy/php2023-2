<?php
    include "../connect/connect.php";
    
    $result = $connect -> query($sql);
    if($result){
        echo "create tables Complete";
    } else {
        echo "create tables false";
    }
?>