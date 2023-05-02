<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = sha1($_POST['password']);
  $gender = $_POST['gender'];

  // Check if email already exists
  $sql = "SELECT COUNT(*) FROM users WHERE email = '$email'";
  $result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_array($result);
  $count = $row[0];

  if($count > 0) {
    // Email already exists, display error message
    echo "This email address is already registered. Please use a different email address.";
  } else {
    // Insert new user into database
    $sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = mysqli_query($connection, $sql);
    
    if($result){
       header('location:login.php');
    } else {
        die(mysqli_error($connection));
    };
  }
}
?>