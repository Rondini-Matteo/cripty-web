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
  width:70%;
  height: 70%;
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
		<section class="about content-section text-center ">
		<div class="about content-section text-center ">
		<div class="col-lg-10 mx-auto">
        <h1>CRIPTY e la Sicurezza Informatica</h1>
        <h3>
          <em>di Rondini Matteo e Trivellini Sophia</em>
        </h3>
		<div class="overlay"></div>
		</div>
		</div>
		</section>
    </header>

    <!-- About -->
    <section class="about content-section bg-light text-center auto" id="about">
      <div >
        <div class="row">
          <div class="col-lg-10 mx-auto ">
            <h2>Chi siamo?</h2>
            <p class="lead mb-5" style="font-size:2vw; ">Ci presentiamo, siamo due studenti dell'Istituto Tecnico Tecnologico E.Divini.
			Frequentiamo la specializzazione informatica, classe 5G. </p>
			<div class="auto">
			<img class="scuola" src="img/gruppo.jpg" alt="Matteo e Sophia">
			</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div>
        <div class="content-section-heading">
          <h2 class="mb-5" style="color:#ffd480;">Introduzione</h2>
        </div>
        <div>
			<div class="testo mx-auto text-left">
			<p class="lead mb-5" style="font-size:2vw; ">Questo progetto nasce dalla curiosità suscitata da un argomento sempre più presente nella realtà digitale odierna, il problema della sicurezza informatica. A causa di questa tematica sempre più diffusa è stato necessario per le aziende creare una nuova figura lavorativa il Data Protection Officer, relativo alla nuova legge GDPR.</p>
			<p class="lead mb-5" style="font-size:2vw; ">Nell’attività quotidiana, per esempio, un operatore di un’azienda potrebbe riceve un’email di un hacker che falsifica la sua identità, spacciandosi per un ente bancario. L’email sarà strutturata in modo da spingere la vittima a scaricare l’allegato, solitamente appare come un pdf. Una volta aperto il file, il malware eseguirà un payload, cioè un’operazione che un virus o un worm mandano in esecuzione una volta attivati. </p>
			<p class="lead mb-5" style="font-size:2vw; ">Vengono così criptati i file presenti nell’hard disk come pdf e documenti di testo, causando ingenti danni all’utente dato che potrebbe perdere file di straordinaria importanza. Per riottenere i file la vittima deve necessariamente pagare una somma all’hacker tramite bonifico o tramite cryptovalute, come i Bitcoin.</p>
			</div>
        </div>
      </div>
    </section>  

   

    <!-- Portfolio -->
    <section class="content-section auto text-center" id="portfolio">
      <div class="container">
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
		<div class="content-section text-center">
			<a class="btn btn-dark btn-xl js-scroll-trigger" href="https://drive.google.com/drive/folders/12PeAPINKrq_CxINM_Pm6SoNTMMd13q_I?usp=sharing" target="_blank" >Download Cripty</a>
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
            <a class="social-link rounded-circle text-white" href="https://github.com/Rondini-Matteo/Cripty" target="_blank">
              <i class="icon-social-github">C</i>
            </a>
          </li>
		  <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="https://github.com/Rondini-Matteo/cripty-web" target="_blank">
              <i class="icon-social-github">W</i>
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
