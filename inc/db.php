<?php

$host = "localhost";
$use = "root";
$pass = ""; 
$db_name = "reserv";

$conn = mysqli_connect($host,$use,$pass,$db_name);

if ($conn){
    echo "connected";
}else{
    echo "Note Connected " . mysqli_connect_error($conn) ;
}