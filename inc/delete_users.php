<?php 
    session_start();
    include ('db.php');
    if( isset($_GET['id']) ){
        $id= $_GET['id'];
        $sql = "DELETE FROM `cliente` WHERE `id_client` = '$id'";
        $result = $conn->query($sql);
        if($result){
            echo "Deleted";
            header("Location: ../dash/index.php");
        }
    }else {
        echo"notfound";
        $_SESSION['NotFound'] = "Sorry The Id was Not found";
        header('Location: ../index.php');
    }
