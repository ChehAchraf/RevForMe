<?php 
    include('inc/db.php');
    $sql = "SELECT * FROM `cliente`";
    $result = $conn->query($sql);
    if(!$result){
        echo "There must be an error : " . $conn->error;
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
  <script src="tailwind.config.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
</head>
<body class="font-primary">
    <section class="min-h-[100vh] bg-[url('img/background.jpg')] bg-cover flex flex-col">
        <header>
            <nav class="py-6 px-32 	flex justify-between text-white sticky ">
                <p>RevForMe</p>
                <div class="flex space-x-4">
                    <a href="#">Home</a>
                    <a href="#">Reservations</a>
                    <a href="#">manage</a>
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
    <!-- start the reservation sections -->
    <section class="py-24 px-32 ">
        <p class="text-[50px] text-center text-black font-light animate__animated animate__slideInUp">Latest Reservations</p>
        <div class="text-center my-4 ">
            <p class="w-[50%] mx-auto font-[20px] text-[#808080] leading-6">
                Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.
            </p>
        </div>
        <div class="grid grid-cols-4 gap-4  mt-12">
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] bg-black rounded-full hvr-buzz text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] hvr-buzz bg-black rounded-full text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] hvr-buzz bg-black rounded-full text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] hvr-buzz bg-black rounded-full text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] bg-black rounded-full hvr-buzz text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] hvr-buzz bg-black rounded-full text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] hvr-buzz bg-black rounded-full text-white px-4 py-2">read more!</button>
                </div>
            </div>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer">
                <img src="img/img_1.jpg" class="rounded-sm">
                <div class="p-2">
                    <p>Reservations Name</p>
                    <p class="text-justify mx-4 text-[10px] my-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci placeat quos vitae magnam reiciendis!</p>
                    <button class="text-[11px] hvr-buzz bg-black rounded-full text-white px-4 py-2">read more!</button>
                </div>
            </div>
        </div>
        <button class="mt-12 underline cursor-pointer hvr-wobble-top">All reservation</button>
    </section>

    <!-- Show data  -->

<section class="h-[700px] bg-[url('img/mountains.jpg')] bg-cover bg-center">
    <div class="py-16 px-8 bg-black bg-opacity-70 h-full">
        <p class="text-[50px] text-center text-white font-light animate__animated animate__slideInUp">Check Our Customers!</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12 px-32">
            <?php while($row = $result->fetch_assoc()): ?>
            <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Avatar" class="w-full h-40 object-cover rounded-t-xl">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800"><?php echo $row['nom'] ?></h2>
                    <p class="text-gray-600 mt-2">Email: <?php echo $row['email'] ?></p>
                    <p class="text-gray-600 mt-2">Phone: <?php echo $row['telephone'] ?></p>
                </div>
            </div>
            <?php endwhile ?>
            <!-- End of customer card loop -->
        </div>
    </div>
</section>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>