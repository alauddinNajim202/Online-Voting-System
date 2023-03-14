<?php

    $connect = mysqli_connect("localhost","root", "", "voting") or die("Connection Falied");

    if($connect){
        echo "Connected!";
    }else{
        echo "Not Connected!";
    }





?>