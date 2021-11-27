<?php
    $connect = mysqli_connect('localhost','root','','btlcnp');
    if($connect){
        mysqli_query($connect,"SET NAME 'UTF8'");
       
    }else{
        echo"ket noi that bai";
    }
?>