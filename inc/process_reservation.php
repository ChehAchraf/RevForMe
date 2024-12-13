<?php 
session_start();
include ('db.php');


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['client_id']) && isset($_POST['activity_id']) ){
        if(!empty($_POST['client_id']) && !empty($_POST['activity_id']) ){
            $status = "En attente";
            $IdClient = $_POST['client_id'];
            $ActivityId = $_POST['activity_id'];
            $sql = "INSERT INTO `reservation`(`id_client`,`id_activite`,`date_reservation`,`status`) 
            VALUES('$IdClient','$ActivityId',NOW(),'$status')";
            echo"hello";
            $result = $conn->query($sql);
            if($result){
                $_SESSION['added'] = '<div id="alertBox" class="w3-panel w3-green w3-round w3-padding-16 w3-large" style="position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 999;">
                <strong>Success!</strong> The Reservation Has been added!
                <span class="w3-closebtn " style="cursor:pointer" onclick="this.parentElement.style.display=\'none\'">&times;</span>
                </div>';
                header('Location: ../dash/index.php ');
            }else{
                echo "error : " . $conn->error;
            }
        }else {
            header("Location: ../dash/index.php");
        }

}
}