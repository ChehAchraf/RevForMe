<?php 
include('db.php');
if(isset($_GET['id']) && is_numeric($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM `activite` WHERE `id_activite` = '$id'";
    $result = $conn->query($sql);
    if($result){
        echo"deleted";
        header('Location: ../index.php');
    }else{
        echo $conn->error;
    }
}