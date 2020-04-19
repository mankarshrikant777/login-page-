<?php include('process.php')?>

<!DOCTYPE html>
<html lang='en'>

<html>
    <head>
    <meta charset="UTF-8">
        <title>Login page</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body background="images/dreams.jpg">
        
            <div class="container" >
             <form  action="index.php" method="POST">

                <div><h1 style="color: azure;font-weight: bold;text-transform: capitalize;text-align: center;">sign up</h1></div>
                    <hr>
                    
                  <div>  <marquee><h5 style="color: red;">*To register yourself kindly enter following details</h5></marquee></div>
                <br>
            
                <div><lable style="font-weight: bold; font-size: 20px;color: black;">Full Name :</lable>
                        <input type="text" placeholder="Enter your full name " name="uname" required></div>
                        <br>    <br>
                
                <lable style="font-weight: bold;margin-left: 25px; font-size: 20px;color: black;">Email :</lable>
                        <input type="email" placeholder="Enter your email " name="email" required>
                     <h4 style="color:red;">   <?php echo $msg; ?></h4>
                        
<lable style="font-weight: bold;font-size: 20px;color: black;">Password :</lable>
<input type="text" placeholder="Enter password" name="pwd" required >
<br><br><br>
<button style="background-color: blue;border-color: blue;">sign up</button>
<br>
<h2>Or</h2>
<h5>already have an account <a class="anchor" href=""> click here</a> </h5>

</form>
</div>
<h4 style="margin-left:90%;margin-top:10%;color: #f1f1f1;position: absolute;">creator @shrikant</h4>

</body>

</html>