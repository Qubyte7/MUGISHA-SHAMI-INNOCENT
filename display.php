<?php
include 'connect.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <a href="pdf.php">GENERATE PDF</a>
    <a href="csv.php">GENERATE CSV</a>
<div class="container">
    <button class="btn"><a href="Sign_up.php"> add user</a></button>
    <table class="table" border='2px solid black'>
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = " select * from `users`";
  $result= mysqli_query($connection,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];// we are storing into variable $ id every data that could be in table in the column id and tha above codes have the same logic
        $firstname =$row['fname'];
        $lastname =$row['lname'];
        $email=$row['email'];
        $password=$row['password'];
        $gender = $row['gender'];

   
        echo '    <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$gender.'</td>
        <td>
        <button><a href="update.php?updateid='.$id.'">update</a></button>
        <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
      </td>
      </tr>';   
    }}
 ?>


  </tbody>
</table> 
</div> 
</body>
</html>













