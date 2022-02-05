<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in & Sign-up Page</title>
    <link rel="stylesheet" href="./style2.css">
</head>

<body>
    <h1><a href="index.php">Go Homme</a></h1>
    <div class="container" id="content01">
        <div class="img-slider">
            <h2>Welcome to Eventzshope</h2>
            <p>we are a community together helping thousands of people out there who are struggling </p>
            <img src="Img1-removebg-preview.png" alt="img">

        </div>
        <div class="content">
            <h2>Get Started</h2>
            <p>Already have account ? <a href="#" id="login">Sign In </a></p>

            <form action="bb.php" method="POST" id="form">
                <label for="name" id="nlabel">Name</label> <br>
                <input type="text" name="username" id="fname" placeholder="Name " autocomplete="off"> <br>
                <label for="email" id="elabel">Email</label> <br>
                <input type="email" name="mail" id="eemail" placeholder="Mail" autocomplete="off"> <br>
                <label for="password"  id="plabel">Password</label> <br>
                <input type="password" name="password" placeholder="password" id="lpassword"> <br>
                <button type="submit" name="submit"  id="btn">Sign Up </button>
            </form>
            <div class="other">
                <h3>Or Sign up with </h3>
                <div class="icons">
                    <img src="https://img.icons8.com/bubbles/50/000000/google-logo.png" />

                </div>
            </div>
        </div>
    </div>
    <div class="container display" id="content02">
        <div class="img-slider">
            <h2>Welcome to Flexicom</h2>
            <p>we are a community together helping thousands of people out there who are struggling </p>
            <img src="undraw_mobile_login_ikmv-removebg-preview.png" alt="img" class="sign-img">
        </div>
        <div class="content">
            <h2>Get Started</h2>
            <p>Don't have account ? <a href="#" id="sign-up">Sign up </a></p>
            <form action="" id="form">
                <label for="email" id="elabel">Email</label> <br>
                <input type="email" id="eemail" placeholder="mail" autocomplete="off"> <br>
                <label for="password" id="plabel">Password</label> <br>
                <input type="password" name="password" id="lpassword"> <br>
                <button type="submit" onclick="SignIn()" id="btn1">Log-In </button>
            </form>
            <div class="other">
                <h3>Or Sign up with </h3>
                <div class="icons">
                    <img src="https://img.icons8.com/bubbles/50/000000/google-logo.png" />
                </div>
            </div>
        </div>

    </div>
   
    <script src="server.js"></script>
</body>

<?php
$servername="localhost";
$passworde="";
$admin="root";
$bdd="user";

if (isset($_POST['submit'])) {
    # code...
    $username=htmlentities(trim($_POST['username']));
    $mail=htmlentities(trim($_POST['mail']));
    $password=htmlentities(trim($_POST['password']));
if ($username&&$mail&&$password) {
    # code...
    $con=mysqli_connect($servername,$admin,$passworde,$bdd);


if (!$con) {
    die("problem de conection".mysqli_connect_error());
}
$sql="INSERT INTO userlogin (username,mail,password) VALUES('$username','$mail',$password)";
if (mysqli_query($con, $sql)) {
  echo "login successful";
}else echo "problemes de connection";

}else{
    echo "saisir tous les champs";
}

}

?>



</html>