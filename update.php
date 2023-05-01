 
<?php
include 'connect.php';


$id=$_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$password=$row['password'];  
$gender = $row['gender'];


  
if(isset($_POST['submit'])){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender = $row['gender'];

    $sql ="update `crud` set id=$id,fname='$firstname',lname='$lastname,email='$email',password='$password',gender='$gender' where id=$id";  //note that the name 'crud' we are using is the name of the tabe in uor database
    $result=mysqli_query($connection,$sql);//thi query will help to run our above query of user storing pf the user
    
    if($result){
        // echo 'update successfully';
       header('location:display.php');
    }else{
        die(mysqli_error($connection));
    };

}

?>
 
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Crud of mine</title>
 </head>
 <body>
    <div class="container ">
        <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="name" placeholder="Enter your name" name="name" value="<?php echo $name ?>">
            </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="email" placeholder="Enter your email" name="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" class="mobile" placeholder="Enter your mobile numbr" name="mobile" value="<?php echo $mobile ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="password" placeholder="Enter your password" name="password" value="<?php echo $password ?>">
        </div>
        <input type="submit" name="submit" value="update" >
        </form>
    </div>
 </body>
 </html>






