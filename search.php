<?php 
    include('inc/header.php');
?>

    <div class="flex justify-center items-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl text-center font-semibold text-gray-800 mb-6">Search</h2>

    <form action="#" method="GET">
      <div class="flex items-center space-x-4 border border-gray-300 p-3 rounded-full">
        <input
          type="text"
          name="search"
          placeholder="Search..."
          class="flex-1 bg-transparent text-gray-800 placeholder-gray-500 outline-none"
        />
        <button type="submit" class="text-blue-500 hover:text-blue-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M13.185 12.185a7.5 7.5 0 1 0-1.4 1.4 5 5 0 1 1-1.4-1.4 5 5 0 0 1 1.4 1.4z" clip-rule="evenodd"/>
          </svg>
        </button>
      </div>
    </form>
  </div>
    </div>


<?php 
    include('inc/footer.php') 
?>