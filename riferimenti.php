<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">

    <title>Riferimenti</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<link rel="icon" href="favicon.ico" />
	
	 <!-- CSS Modificato -->
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="50">

<style>
header{
width: 100%;
height: 100%;
background-size: cover;
background-image: url("img/cryptolocker.jpg");
  text-align:center;
  vertical-align: middle;
  display:table;
}

h1{
color:white;
text-shadow: 0 0 50px black;
font-size: 500%;}

p{
	 text-align: left;
}
</style>	

		<?php
		if(($_COOKIE["riferimenti"]) == "sophia"){
		echo "<style>";
		echo "header{";
		echo "background-image: url('img/cybersec.jpg')";
		echo "}";
		echo "</style>";
		}
		if(($_COOKIE["riferimenti"]) == "matteo"){
		echo "<style>";
		echo "header{";
		echo "background-image: url('img/cryptolocker.jpg')";
		echo "}";
		echo "</style>";
		}
		?>	

     <!-- Header -->
    <header class="header">
	
	   </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
        <h1>Riferimenti</h1>
      </div>
	  </div>
      <div class="overlay"></div>
    </header>

    <!-- Bianco-->
    <section class="content-section bg-light" id="ransomware">
      <div >
		<div class="content-section-heading">
			<h2 class="mb-5 text-center" style="color:#1d809f;">Cos'è un RANSOMWARE</h2>
		</div>
		<div class="row">
			<div class="testo mx-auto">
				<p class="lead mb-5" style="font-size:2vw; ">I ransomware tipicamente si diffondono come i trojan, penetrando nel sistema attraverso un file scaricato o una vulnerabilità nel servizio di rete. Il software eseguirà poi un payload, che ad esempio cripterà i file personali sull'hard disk; l'autore del malware è l'unico a conoscere la chiave di decriptazione privata. Alcuni ransomware eseguono un payload che agisce sul sistema operativo e rendendola inutilizzabile e controllata dal malware stesso. I payload dei ransomware fanno anche uso in modo di estorcere denaro all'utente del sistema, per ripristinarne i normali . Questi pagamenti di solito vengono effettuati tramite bonifico o con un pagamento online attraverso un servizi come  Paysafecard, o tramite Bitcoin (la valuta digitale).
			</div>
        </div>
      </div>
    </section>
	   
    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">Welcome to
          <em>your</em>
          next website!</h2>
        <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/template-overviews/stylish-portfolio/">Download Now!</a>
      </div>
    </section>


    <!-- Footer -->
     <footer class="footer text-center" id="contact">
      <div class="container">
        <ul class="list-inline mb-5 text-center">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" 
			href="https://www.facebook.com/itdivini/" target="_blank">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/itisdivini" target="_blank">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0 text-center">Copyright &copy; Your Website 2017</p>
		<p class="text-muted small mb-0 text-center">ITTS DIVINI -- INFORMATICA 5G</p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
