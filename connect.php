<?php
$server = 'localhost';
$dbname = 'student_db';
$username='root';
$password='';
$connection = new mysqli($server,$username,$password,$dbname);


if(!$connection){
    die(mysqli_error($connection));
}
?>

















































