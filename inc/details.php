<?php
include('db.php');
session_start();
if(isset($_SESSION['added'])){
    echo $_SESSION['added'];
    unset($_SESSION['added']);
}
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="tailwind.config.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
</head>
<body class="font-primary">
    <section class="min-h-[100vh] bg-[url('../img/background.jpg')] bg-cover flex flex-col">
        <header>
            <nav class="py-6 px-32 	flex justify-between text-white sticky ">
                <p>RevForMe</p>
                <div class="flex space-x-4">
                    <a href="#">Home</a>
                    <a href="#">Reservations</a>
                    <a href="./dash/index.php">manage</a>
                </div>
            </nav>
        </header>
        <div class="px-32 h-[100vh] flex items-center justify-between">
            <h1 class="text-[50px] text-white animate__animated animate__fadeInLeft">Planning for you're <br> Next adventure ?</h1>
            <div class="bg-[#16595494] w-[40%] flex flex-col items-center py-12 rounded-lg text-white animate__animated animate__fadeInRight">
                <form action="#" class="flex flex-col items-center space-y-3">
                    <label> Search... </label>
                    <input type="text" name="search_name" id="search_name" class="p-2 rounded-full w-[100%]">
                </form>
            </div>
        </div>
    </section>
    <?php 
    if(isset($_GET['id']) && is_numeric($_GET['id']) ){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `activite` where `id_activite`= '$id'";
        $result = $conn->query($sql);
    }else{
        header("Location: ../index.php");
    }
        
    ?>
    <section class="px-32 py-24">
        <div class="flex justify-between">
            <div class="w-[65%] bg-gray-100 p-8 rounded-lg">
                <?php while($row = $result->fetch_assoc()): ?>
                <div>
                    <h1 class="text-[30px]"><?php echo $row['titre'] ?></h1>
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-300">
                    <article class="mt-4">
                        <?php echo $row['description'] ?>
                    </article>
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-300">
                    <div class="flex space-x-4 text-[12px] itesm-center justify-center">
                    <i class="fa-solid fa-map-pin"><span class="text-[12px]"> Destination : <?php echo $row['destination'] ?></span></i> 
                    <i class="fa-solid fa-money-bill"><span class="text-[12px]"> Money : <?php echo $row['prix'] ?> DH</span></i>
                    <i class="fa-solid fa-calendar"><span class="text-[12px]"> Start At : <?php echo $row['date_debut'] ?></span></i>
                    <i class="fa-solid fa-calendar"><span class="text-[12px]"> End At : <?php echo $row['date_fin'] ?></span></i>
                    <i class="fa-solid fa-check"><span class="text-[12px]"> Places: <?php echo $row['places_disponible'] ?></span></i>
                    </div>
                </div>
                <?php endwhile ?>
            </div>
            <div class="w-[30%] bg-gray-100 p-8 rounded-lg flex flex-col items-center justify-center space-y-4">
            <h1 class="text-[25px] text-center">Make a reservation</h1>
            <div id="form" action="" class="flex flex-col items-center space-y-4">
                <input id="name_for_resrev" type="text" name"name_for_resrev" class="p-2 rounded-lg" placeholder="Enter your First name">
                <button id="sub" class="bg-blue-500 w-[50%] p-2 text-white roundedt-sm hover:bg-blue-700">Submit</button>
        </div>
            </div>
        </div>
    </section>
    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-semibold mb-4">Add Client</h2>
        <form action="sing_up.php" method="POST">
            <div class="mb-4">
                <label  for="nom" class="block text-sm font-medium text-gray-700">First Name (Nom):</label>
                <input id="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-md" type="text" id="nom" name="nom" required>
            </div>

            <div class="mb-4">
                <label for="prenom" class="block text-sm font-medium text-gray-700">Last Name (Prenom):</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md" type="text" id="prenom" name="prenom" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md" type="email" id="email" name="email" required>
            </div>

            <div class="mb-4">
                <label for="telephone" class="block text-sm font-medium text-gray-700">Phone (Telephone):</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md" type="tel" id="telephone" name="telephone" required>
            </div>

            <div class="mb-4">
                <label for="adresse" class="block text-sm font-medium text-gray-700">Address (Adresse):</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-md" id="adresse" name="adresse" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="date_naissance" class="block text-sm font-medium text-gray-700">Date of Birth (Date de Naissance):</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-md" type="date" id="date_naissance" name="date_naissance" required>
            </div>

            <div class="flex justify-between items-center mt-4">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">Add Client</button>
                <button type="button" id="clsmodal" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">Cancel</button>
            </div>
        </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>
</html>