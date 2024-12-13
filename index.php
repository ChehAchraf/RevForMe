<?php 
    include('inc/db.php');
    $sql = "SELECT * FROM `cliente`";
    $result = $conn->query($sql);
    if(!$result){
        echo "There must be an error : " . $conn->error;
    }
    include('inc/header.php');
?>

    <section class="py-24 px-32">
    <p class="text-[50px] text-center text-black font-light animate__animated animate__slideInUp">Latest Activities</p>
    <div class="text-center my-4">
        <p class="w-[50%] mx-auto font-[20px] text-[#808080] leading-6">
            Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.
        </p>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-12">
        <?php 
            $sql ="SELECT * FROM `activite` ORDER BY `activite`.`id_activite` DESC";
            $result = $conn->query($sql);
        ?>
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer w-full">
            <div class="p-4">
                <!-- Activity Title -->
                <h3 class="font-semibold text-xl"><a href="inc/details.php?id=<?php echo $row['id_activite'] ?>"><?php echo $row['titre'] ?></a></h3>

                <!-- Activity Dates -->
                <p class="text-sm text-gray-600"><?php echo $row['date_debut'] ?> - <?php echo $row['date_fin'] ?></p>

                <!-- Number of clients reserved -->
                <p class="text-sm text-gray-600">price : <?php echo $row['prix'] ?> DH</p>
                <p class="text-sm text-gray-600">places : <?php echo $row['places_disponible'] ?> Place</p>

                <a href="inc/delete_activite.php?id=<?php echo $row['id_activite'] ?>" class="text-xs bg-red-600 text-white rounded-full px-4 py-2 mt-16 hover:bg-red-700 transition-colors">Delete</a>
            </div>
        </div>
        <?php endwhile ?>
 
    </div>
    <button class="mt-12 underline cursor-pointer hvr-wobble-top">All Reservations</button>
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
            <?php 
            $sql = "SELECT * FROM `reservation`  INNER JOIN cliente on reservation.id_client = cliente.id_client INNER JOIN activite on reservation.id_activite = activite.id_activite;";
            $result = $conn->query($sql);
            $calc = "SELECT COUNT(*) FROM reservation.id_client";
            $res = $conn->query($calc);
            ?>
            <?php while($row = $result->fetch_assoc()): ?>
            <div class="bg-[#8080801c] text-center rounded-sm hvr-grow cursor-pointer w-full">
                <div class="p-4">
                <!-- Title -->
                <h3 class="font-semibold text-xl"><?php echo $row['titre']; ?></h3>

                <!-- Date -->
                <p class="text-sm text-gray-600"><?php echo $row['date_debut']; ?> - <?php echo $row['date_fin']; ?></p>

                <!-- Number of clients reserved -->
                <p class="text-sm text-gray-600">Reserved: 4 clients</p>

                <!-- Delete Button -->
                <a href="inc/delete_res.php?id=<?php echo $row['id_reservation'] ?>"  class="text-xs bg-red-600 text-white rounded-full px-4 py-2 mt-8 hover:bg-red-700 transition-colors">Delete</a>
                </div>
            </div>  

            <?php endwhile ?>
        </div>
        <button class="mt-12 underline cursor-pointer hvr-wobble-top">All reservation</button>
    </section>

    <!-- Show data client -->
            <?php
                $sql = "SELECT * FROM `cliente`";
                $result = $conn->query($sql);
            ?>
<section class="h-[1000px] bg-[url('img/mountains.jpg')] bg-cover bg-center">
    <div class="py-16 px-8 bg-black bg-opacity-70 min-h-full">
        <p class="text-[50px] text-center text-white font-light animate__animated animate__slideInUp">Check Our Customers!</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12 px-32">
            <?php while($row = $result->fetch_assoc()): ?>
            <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Avatar" class="w-full h-40 object-cover rounded-t-xl">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800"><?php echo $row['nom'] ?></h2>
                    <p class="text-gray-600 mt-2">Email: <?php echo $row['email'] ?></p>
                    <p class="text-gray-600 mt-2">Phone: <?php echo $row['telephone'] ?></p>
                    <a class="underline text-red-400" href="inc/delete_users.php?id=<?php echo $row['id_client'] ?>">Delete</a>
                </div>
            </div>
            <?php endwhile ?>
            <!-- End of customer card loop -->
        </div>
    </div>
</section>


<?php include('inc/footer.php') ?>