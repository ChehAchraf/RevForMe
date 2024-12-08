<?php 
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['destination']) && isset($_POST['prix']) && isset($_POST['date_debut']) && isset($_POST['date_fin']) && isset($_POST['places_disponible'])) {
        if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['destination']) && !empty($_POST['prix']) && !empty($_POST['date_debut']) && !empty($_POST['date_fin']) && !empty($_POST['places_disponible'])) {
            
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $destination = $_POST['destination'];
            $prix = $_POST['prix'];
            $date_debut = $_POST['adresse'];
            $date_fin = $_POST['date_fin'];
            $places_disponible = $_POST['places_disponible'];
            $sql = "INSERT INTO `activite`(`titre`,`description`,`destination`,`prix`,`date_debut`,`date_fin`,`places_disponible`) VALUES('$titre','$description','$destination','$prix','$date_debut','$date_fin','$places_disponible')";
            $result = $conn->query($sql);
            if($result == TRUE){
                echo "here";
                $_SESSION['added'] = '<div id="alertBox" class="w3-panel w3-green w3-round w3-padding-16 w3-large" style="position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;">
            <strong>Success!</strong>  Has been added!
    <span class="w3-closebtn " style="cursor:pointer" onclick="this.parentElement.style.display=\'none\'">&times;</span>
</div>';
                header('Location: ../dash/index.php ');
            }else{
                echo "error" . $conn->error;
            }
        } else {
            echo "Please fill in all fields.";
        }
    } else {
        echo "Some fields are missing!";
    }
}
?>
