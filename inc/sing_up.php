<?php 
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['date_naissance'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adresse']) && !empty($_POST['date_naissance'])) {
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];
            $ddn = $_POST['date_naissance'];
            $sql = "INSERT INTO `cliente`(`nom`,`prenom`,`email`,`telephone`,`adresse`,`date_naissance`) VALUES('$nom','$prenom','$email','$telephone','$adresse','$ddn')";
            $result = $conn->query($sql);
            if($result == TRUE){
                echo "here";
                $_SESSION['added'] = '<div id="alertBox" class="bg-green-500 p-16 text-white" style="position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;">
            <strong>Success!</strong> Your request has been send!
    <span class="w3-closebtn " style="cursor:pointer" onclick="this.parentElement.style.display=\'none\'">&times;</span>
</div>';
                header('Location: details.php ');
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
