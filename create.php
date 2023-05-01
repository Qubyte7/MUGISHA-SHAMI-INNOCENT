<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = sha1($_POST['password']);//you can also use sha1 but md5 is more higly secure
  $gender = $_POST['gender'];

$sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";
 
$result=mysqli_query($connection,$sql);//thi query will help to run our above query of user storing pf the user
    
if($result){
   header('location:display.php');
}else{
    die(mysqli_error($connection));
};

}

?>