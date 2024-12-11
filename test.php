<?php 
setcookie("style" , "dark" , time() +60 * 60);
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";