<!DOCTYPE html>
<html>
<head>
   <title> Signup form</title>
<link rel="stylesheet" href="menu.css">
</head>
   <body>
     
    <h2>SIGN UP FORM </h2>
    <form action="create.php" method="POST">
         <fieldset>
            <legend>Personal Information:</legend> 
            <div class="form">
        First name :<br> <input type="text" name="firstname"/>
        <br>
        Last name :<br> <input type="text" name="lastname" />
        <br> 
        Email:<br><input type="email" name="email" />
        <br>
        Password:<br><input type="password" name="password">
        <br>
        Gender:<br><input type="radio" name="gender" value="Male" >Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>
        <input type="submit" name="submit" value="Submit">    
     </fieldset> 
</div>
    </form>

   </body>
</html>
