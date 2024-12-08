<?php

$host = "localhost";
$use = "root";
$pass = ""; 
$db_name = "revforme";

$conn = new  mysqli($host,$use,$pass,$db_name);

if (!$conn){
    echo "Note Connected " . mysqli_connect_error($conn) ;
}