
<?php
       if(isset($_POST['register'])){
          header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form"method="post" >

                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Address">
                <input type="email" placeholder="Email Address">
                <input type="email" placeholder="Confirm Email Address">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Confirm Password">  
                <input type="submit" value="SUBMIT" name="register">             
                <p class="message">Already Registered?  <a href="login.php">Log In</a></p>
                
            </form>
      </div>
</div>

</body>
</html>