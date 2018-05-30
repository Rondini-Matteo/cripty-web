<?php
session_start();
?>
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	
  </head>

 <body class="bg-primary text-center">
	<?php
	if(isset($_SESSION['email'])){
		header("Location: read.php");
	}
	?>
	<?php
		$errore= $_GET["errore"];
		if($errore==1){
			echo "<script>";
			echo 'window.alert("Email o la password sono errati")';
			echo "</script>";
		}
	?>
 
	<!-- Login -->
    <section class="content-section text-white">
      <div class="container">
        <div class="content-section-heading">
          <h2 class="mb-5" style="color:#ffd480;">Login</h2>
        </div>
		<form action="https://www.divini5g.com/cryptolocker/controllo.php" method="post">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Inserisci Email" required>
			</div>
			<div class="form-group">
				<label for="email">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Inserisci Password" required>
			</div>
			<br />
			<input type="submit" name="invio" value="Accedi" class="btn btn-success" role="button"/> 
			<input type="reset" name="cancella" value="Annulla"class="btn btn-info" role="button"/>
			<br />
			<br />
		</form>
		<a href="https://www.divini5g.com/cryptolocker/matteo.php" style="color:#FFFFFF;">Ritorna alla home</a>
      </div>
    </section>

</body>

</html>