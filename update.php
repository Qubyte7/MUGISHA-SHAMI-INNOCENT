 
<?php
include 'connect.php';


$id=$_GET['updateid'];
$sql = "select * from `users` where id=$id";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
$firstname = $row['fname'];
$lastname = $row['lname'];
$email = $row['email'];
$password=$row['password'];  
$gender = $row['gender'];


  
if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email=$_POST['email'];
    // $password=$_POST['password'];
    $gender = $_POST['gender'];
    $sql ="update `users` SET fname='$firstname',lname='$lastname',email='$email',gender='$gender' WHERE `id`='$id'";  //note that the name 'crud' we are using is the name of the tabe in uor database
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
        <form  method="POST">
         <fieldset>
            <legend>Personal Information:</legend> 
            <div class="form">
        First name :<br> <input type="text" name="firstname" value="<?php echo $firstname ?>"/>
        <br>
        Last name :<br> <input type="text" name="lastname" value="<?php echo $lastname ?>"/>
        <br> 
        Email:<br><input type="email" name="email" value="<?php echo $email ?>"/>
        <br>
        <!-- Password:<br><input type="password" name="password">
        <br> -->
        Gender:<br><input type="radio" name="gender" value="Male"  value="<?php if($gender == 'Male'){echo 'checked';} ?>">Male
        <input type="radio" name="gender" value="Female" value="<?php if($gender == 'Female'){echo 'checked';} ?>"> Female
        <br><br>
        <input type="submit" name="submit" value="Update">    
     </fieldset> 
</div>
    </form>
    </div>
 </body>
 </html>






