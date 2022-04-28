<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
  die("Blad: " . mysqli_connect_error());
}

require_once 'vendor/autoload.php';

$faker=Faker\Factory::create();

foreach(range(1,20) as $x) {
  $faker->name;
  $connection->query("INSERT INTO `images`(`name`, `picsum_id`, `imagefile`, `author`, `width`, `height`, `added_at`) VALUES ('$name','','','','','','')");
}

mysqli_close($connection);
?>