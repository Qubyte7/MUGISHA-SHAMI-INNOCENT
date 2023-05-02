<!DOCTYPE html>
<html>
    <head><title>Login Page</title></head>
<body>
<form action="" method="POST">
<label for="email">Email</label>
<input type="email" name="email">
<br>
<label for="password">Password</label>
<input type="password" name="password">
<br>
<input type="submit" name="submit" value="Login">
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
    header('location:display.php');
}
else{
    echo "Invalid email or password";
}

  }
  else{
    echo "Invalid email or password";
  }

}
?>




















