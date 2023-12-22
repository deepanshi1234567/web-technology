<?php
     ini_set("display_errors",1);
     session_start();

     $host='localhost';
     $username="root";
     $password="";
     $database="bms";


     new mysqli($host,$username,$password,$database);

         
     if($conn->connect_error){
        echo 'failed';

     }
     else{
        echo 'pass';
     }


?>