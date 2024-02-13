<?
require "db.php";
$link = uniqid(md5(rand()), true);
$name = $_POST["name"];
$exercise = $_POST["exercise"];
$food = $_POST["food"];
$drinks = $_POST["drinks"];
$date = $_POST["date"];
$add = "INSERT INTO `finals`(`id`, `link`, `name`, `exercise`, `food`, `drinks`, `date` ) VALUES(NULL, '$link', '$name', '$exercise', '$food', '$drinks', '$date')";
$add1 = mysqli_query($db, $add);
header("Location:../final?link=$link");
