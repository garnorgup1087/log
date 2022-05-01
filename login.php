<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Sorry! we failed to connect");
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $query    = "SELECT * FROM `login` WHERE Username='$Username'
                     AND Password='" . md5($Password) . "'";
    $result=mysqli_query($conn,$query);
    echo"Success!Login successfully.";
    header("Location: dashboard.php");
}
else {
      echo "<div class='form'>
            <h3>Incorrect Username/password.</h3><br/>
            <p class='link'>Click here to <a href='login2.php'>Login</a> again.</p>
            </div>";
     }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="login-page">
    <div class="form">
    <form  class="input-login" action="login.php" method="post">
         <input type="text"name="Username"class="input"placeholder="Enter Name"required>
         <input type="password"name="Password"class="input"placeholder="Enter Password"required>
         <button type="submit" class="submit-but">Login</button>
         <p class="message">Not registered? <a href="index.php">Login</a>
         </p>
    </form>
    </div>
    </div>
</body>
</html>