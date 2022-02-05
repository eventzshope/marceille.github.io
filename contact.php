<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MarceilleShopping</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<?php
if(isset($_POST['submit'])){
 

  $name=htmlentities(trim( $_POST['name']));
  $email=htmlentities(trim($_POST['email']));
  $phone=htmlentities(trim( $_POST['phone']));
  $message=htmlentities(trim ($_POST['message'])); 

  if ($name&&$email&&$phone&&$message) {
          # code...
        }  else{
          echo "veuller saisir tous les champs";
        }    
      }
?>
<body>
  <?php
      include("header.php");
      ?>



      <div class="container">
        <span class="big-circle"></span>
        <img src="images/imgstar/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              contacter nous pour plus d'infos
            </p>

            <div class="info">
              <div class="information">
                <img src="images/imgstar/location.png" class="icon" alt="" />
                <p>CAP - HAITIEN - HAITI</p>
              </div>

              <div class="information">
                <img src="images/imgstar/phone.png" class="icon" alt="" />
                <p>+509 4612-3390</p>
              </div>
            </div>

            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="https://formspree.io/f/xyyozjbw"  method="POST" id="my-form">
              <h3 class="title">Contact us</h3>
              <div class="input-container">
                <input placeholder="NOM" type="text" name="name" class="input" />

              </div>
              <div class="input-container">
                <input placeholder="mail" type="email" name="email" class="input" />

              </div>
              <div class="input-container">
                <input placeholder="Phone" type="tel" name="phone" class="input" />

              </div>
              <div class="input-container textarea">
                <textarea placeholder="Message" name="message" class="input"></textarea>

              </div>
              <input type="submit" value="Send" class="btn" />
            </form>
          </div>
          <div id="status"></div>
        </div>
      </div>
      <script src="index.js"></script>
</body>

</html>