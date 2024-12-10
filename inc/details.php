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

    <section class="px-32 py-24">
        <div class="flex justify-between">
            <div class="w-[60%] bg-gray-100 p-8 rounded-lg">
                <h1 class="text-[30px]">Event Title</h1>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-300">
                <article class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, ex error. Blanditiis nulla odio aperiam? Officiis dolorum provident consequatur tempora dignissimos harum esse eum quam laudantium. At sint adipisci in.
                </article>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-300">
            </div>
            <div class="w-[30%] bg-gray-100 p-8 rounded-lg">

            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>