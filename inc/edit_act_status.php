<?php 
    session_start();
    include('db.php');
    if(isset($_POST['status']) ){
        foreach($_POST['status'] as $key => $value){
            $sql = "UPDATE reservation set status = '$value' where id_reservation = '$key'";
            $result = $conn->query($sql);
            if($result){
                $_SESSION['changed'] = '<div id="alertBox" class="w3-panel w3-green w3-round w3-padding-16 w3-large" style="position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;">
            <strong>Success!</strong> The Status Has been Changed!
            <span class="w3-closebtn " style="cursor:pointer" onclick="this.parentElement.style.display=\'none\'">&times;</span>
            </div>';
            header("Location: ../dash/index.php");
            }else{
                echo "error : " . $conn->error;
            }
        }
    }
?>
