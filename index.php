
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
    $dob=$_POST['dob'];
    $Password=$_POST['Password'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $sql="INSERT INTO`login` (`Username`, `Email`, `Phone`, `Password`, `dob`) VALUES ('$Username', '$Email', '$Phone', '$Password', '$dob')";
    $result=mysqli_query($conn,$sql);
    echo"Success!Registered successfully.";
  }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-page">
    <div class="form">
    <form  class="input-register" action="register.php" method="post">
         <input type="text"name="Username"class="input"placeholder="Enter Name"required>
         <input type="text"name="Email"class="input"placeholder="Enter Email"required>
         <input type="date"name="dob"class="input"placeholder="Enter date of birth"required>
         <input type="text"name="Phone" class="input"placeholder="Phone number"required>
         <input type="password"name="Password"class="input"placeholder="Enter Password"required>
         <input type="text"name="confirm" class="input"placeholder="Confirm Password"required>
         <button type="submit" class="submit-but">Register</button>
         <p class="message">Already registered? <a href="login.php">Login</a>
         </p>
    </form>
    </div>
    </div>
</body>
</html>