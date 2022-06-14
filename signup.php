<?php
$mysqli = new mysqli("localhost","root","","bmi");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// prepare and bind
$stmt = $mysqli -> prepare("INSERT INTO bmitables (username, password, name) VALUES (?, ?, ?)");
$stmt -> bind_param("sss", $username, $password, $name);

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty(trim($_POST["username"])) ||empty(trim($_POST["password"]))||empty(trim($_POST["name"]))){
        echo '<script>alert("Field should be field")</script>';
    }
    else
    {
        // set parameters and execute
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $name = trim($_POST['name']);
    $stmt -> execute();
    
    // $username = "Mary1";
    // $password = "Moe1";
    // $name = "mary1@example.com";
    // $stmt -> execute();
    
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("location: login.php");
    
    $stmt -> close();
    $mysqli -> close();
    
    }

}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form </title>
    <link rel="stylesheet" href="dietscreen2.css">
</head>



<body>
<section>
    <div class="imgbox">
        <img src="diet4.jpg" alt=""  />
       

    </div>
</section>
    
    
      <div class="login-box">
        <h1>Sign Up</h1>
        <form action="" method="post">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Your name" required>
             
            <p>User id</p>
            <input type="email" name="username" placeholder="Enter Your Userid" required>
            
            <p>Password</p>
            <input type="password" name="password" placehoslder="Enter password" required><br>

          
            <!-- <a href="popup.html"> -->
            <!-- <input type="button" name="" value="Sign Up"><br> -->
            <div style="text-align: center;" class="btn1">

                <button style="font-size: 16px; border-radius: 5px;border: 2px solid rgb(58, 167, 240);background-color:rgb(58, 167, 240) ;" name="button">Sign Up</button><br>
            </div>
        </a>
            
           
        </form>
        
    
</body>
</html>