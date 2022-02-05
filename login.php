<?php
if(isset($_POST['submit'])){
	

	$nom=htmlentities(trim( $_POST['username']));
	$mail=htmlentities(trim($_POST['mail']));
	$password=htmlentities(trim( $_POST['password']));
	$password2=htmlentities(trim ($_POST['password2']));
 if ($nom&&$mail&&$password&&$password2) {
          # code...
        }  else{
          echo "veuller saisir tous les champs";
        }    
      }
?>


<form action="login.php" method="POST" >
	<p>nom</p>
	<input type="txt" name="username">
	<p>mail</p>
	<input type="email" name="mail">
	<p>password</p>
	<input type="password" name="password">

	<p>again</p>
	<input type="password" name="password2"><br><br>

	<input type="submit" value="enregistrer" name="submit">
</form>