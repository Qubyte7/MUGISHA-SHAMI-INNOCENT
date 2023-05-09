<!DOCTYPE html>
<html>
    <head><title>Login Page</title></head>
    <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}
h2 {
  text-align: center;
  margin: 30px 0;
}
form {
  max-width: 600px;
  margin: 0 auto;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
label {
  display: block;
  font-size: 18px;
  margin-bottom: 10px;
}
input[type="text"],
input[type="email"],
input[type="password"] {
  display: block;
  width: 100%;
  border: none;
  background-color: #f5f5f5;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 20px;
}
input[type="radio"] {
  margin-right: 10px;
}
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 12px 24px;
  font-size: 16px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #3e8e41;
}
fieldset {
  border: none;
  margin-bottom: 20px;
}
legend {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}
    </style>
<body>
<form action="" method="POST">
<label for="email">Email</label>
<input type="email" name="email">
<br>
<label for="password">Password</label>
<input type="password" name="password">
<br>
<input type="submit" name="submit" value="Login">
<h2> create an account <a href="Sign_up.php">Sign_up</a></h2>   
</form> 
</body>
</html>

<?php 
include 'connect.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = sha1($_POST['password']);//you can also use sha1 but md5 is more higly secure
  
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result=$connection->query($sql);
  if($result->num_rows>0){
   $row=mysqli_fetch_assoc($result);
$storedPassword=$row['password'];
if($storedPassword==$password){
  session_start();
  $_SESSION["email"]= $email;
  header('location:display.php');
}
else{
    echo '<h3> Invalid email or password </h3>';
}
  }
  else{
    echo '<h3>Invalid email or password</h3>';
  }
}
?>
