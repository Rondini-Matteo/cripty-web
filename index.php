<?php
		if(!isset($_COOKIE["httpscookie"])){
			setcookie("httpscookie", "1", time() + 10, "/");
			header("Location: https://www.divini5g.com/cryptolocker/");
	}
	?>
<!DOCTYPE html>
<html lang="en">

  <head>
  
    <meta charset="utf-8">
	
    <title>Tesina 2017/2018</title>

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

  </head>

  <body id="page-top">

<style>
header{
width: 100%;
height: 100%;
background-size: cover;
background-image: url("img/homepage1.jpg");
  text-align:center;
  vertical-align: middle;
  display:table;
}

h1{
color:white;
font-size: 500%;
text-shadow:  0 0 150px black;}

h3{
	color:white;
font-size: 200%;
text-shadow:  0 0 150px black;
}

img.scuola{

  display: block;

  margin:0 auto;

}
.about{
	width: 100%;
	height: 80%;}

.auto{
		width: auto;
		height: auto;
}


</style>	


	
    <!-- Header -->
    <header class="header">
	
	   </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> <!--Sono 17 br, how to allineare il testo: perito informatico edition -->
        <h1>CRIPTY e la Sicurezza Informatica</h1>
        <h3>
          <em>di Rondini Matteo e Trivellini Sophia</em>
        </h3>
      </div>
	  </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="about content-section bg-light text-center " id="about">
      <div >
        <div class="row">
          <div class="col-lg-10 mx-auto ">
            <h2>Chi siamo?</h2>
            <p class="lead mb-5" style="font-size:2vw; ">Ci presentiamo, siamo due studenti dell'Istituto Tecnico Tecnologico E.Divini.
			Frequentiamo la specializzazione informatica, dove approfondiamo le conoscenze di una realtà sempre più in sviluppo, quella della tecnologia. </p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">ITT E.Divini</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center auto" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h2 class="text-secondary mb-0">ITT E.Divini</h2>
          <h2 class="mb-5">Informatica: la nostra specializzazione!</h2>
        </div>
        <div class="row">
		 <img class="scuola" src="img/scuola.jpg" alt="">
        </div>
      </div>
    </section>

   

    <!-- Portfolio -->
    <section class="content-section auto" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h2 class="text-secondary mb-0"></h2>
          <h2 class="mb-5">Progetti</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6" >
            <a class="portfolio-item" href="https://www.divini5g.com/cryptolocker/matteo.php" target="_blank">
              <span class="caption">
                <span class="caption-content">
                  <h2>Cripty</h2>
                  <p class="mb-0">Come cryptare dei file attraverso un Ransomware!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/lock.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="https://www.divini5g.com/cryptolocker/sophia.php" target="_blank">
              <span class="caption">
                <span class="caption-content">
                  <h2>Sicurezza Informatica</h2>
                  <p class="mb-0">Conoscere chi ci attacca e imparare a difendersi!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/sicurezza.jpg" alt="">
            </a>
          </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="footer text-center" id="contact">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/itdivini/" target="_blank">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/itisdivini/" target="_blank">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2017</p>
		<p class="text-muted small mb-0">ITTS DIVINI -- INFORMATICA 5G</p>
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
