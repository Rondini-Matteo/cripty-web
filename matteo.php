<?php
setcookie("riferimenti", "matteo", time() + 3600, "/"); 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">

    <title>Cryptolocker</title>

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
	
	 <!-- Navbar -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-light navbar-fixed-top ">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="https://www.divini5g.com/cryptolocker/">Home Page</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="https://www.divini5g.com/cryptolocker/login.php">Login</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="#ransomware">Ransomware</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="#cryptolocker">Cryptolocker</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="#sha">Algoritmo SHA</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="#aes">Algoritmo AES</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="#bitcoin">Bitcoin</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link js-scroll-trigger" style='color:#FFFFFF;' href="https://www.divini5g.com/cryptolocker/riferimenti.php">Riferimenti</a>
			</li>
		</ul>
	</nav>

     <!-- Header -->
    <header class="header">
	
	   </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
        <h1>Progetto Cryptolocker</h1>
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
				<p class="lead mb-5" style="font-size:2vw; ">I ransomware (virus del riscatto) tipicamente si diffondono come i trojan, penetrando nel sistema attraverso un file scaricato o una vulnerabilità nel servizio di rete. Non esiste un solo tipo di ransomware, infatti questa famiglia di malware è in grado di bloccare il funzionamento del computer, facendo sì che l’utente non riesca a effettuare il login nel suo profilo utente (mostrando, solitamente, un avviso dell’FBI o della Polizia di Stato) o utilizzando la crittografia per rendere illeggibili i file presenti all’interno del disco rigido (questi ransomware sono chiamati cryptolocker).</p>
				<p class="lead mb-5" style="font-size:2vw; ">Nel settembre 2014 si sviluppò una nuova ondata di malware nota con il nome di "CryptoLocker". Il worm si diffondeva attraverso e-mail ingannevoli, che si mostravano come notifiche di mancata consegna di pacchi da parte di una ditta postale; per evitare di venir identificati dagli scanner automatici che verificano se i link contenuti in una pagina conducono a malware, questa variante prevedeva che l'utente visitasse una pagina e digitasse un codice captcha prima di scaricare il payload.</p>
			</div>
        </div>
      </div>
    </section>
	   
    <!-- Blu -->
    <section class="content-section bg-primary text-white text-center" id="cryptolocker">
      <div>
        <div class="content-section-heading">
          <h2 class="mb-5" style="color:#ffd480;">I Cryptolocker</h2>
        </div>
        <div >
			<div class="testo mx-auto">
				<p class="lead mb-5" style="font-size:2vw; ">Il software appena lanciato eseguirà payload che cripterà i file personale sull’hard disk con una password; l’unico a conoscere la password per la decriptazione è l'autore del malware. Un payload è una qualsiasi operazione a tempo determinato, casuale o attivata da un trigger che un virus o worm manda in esecuzione. Per decodificare i file è richiesto un pagamento; il pagamento può essere effettuato tramite bonifico o tramite cryptovalute, come il Bitcoin.</p>				
				<p class="lead mb-5" style="font-size:2vw; ">Il più famoso attacco cryptolocker degli ultimi anni può essere considerato WannaCry, avvenuto nel maggio 2017. L'attacco di WannaCry si è diffuso rubando un software sviluppato dalla NSA e chiamato EternalBlue, che sfruttava una vulnerabilità del sistema operativo Windows ed ha infettato oltre 230.000 computer in 150 paesi.</p>
				<p class="lead mb-5" style="font-size:2vw; ">EternalBlue sfrutta una vulnerabilità nell'implementazione del protocollo Server Message Block (SMB) presente in alcuni sistemi operativi Microsoft; grazie alla quale il computer accetta pacchetti di dati opportunamente prodotti da chi sta eseguendo un attacco remoto, permettendo a tali utenti remoti di eseguire codice arbitrario sulla macchina bersaglio dell'attacco.</p>
				<p class="lead mb-5" style="font-size:2vw; ">Quando infetta un computer, WannaCry cripta i file bloccandone l'accesso e aggiunge l'estensione .WCRY; impedisce inoltre il riavvio del sistema. Dopo di che viene mostrato all’utente una schermata che lo informa che tutti i suoi file sono stati criptati e che ha 2 giorni per pagare un riscatto di 600 dollari in Bitcoin.</p>
			</div>
        </div>
      </div>
    </section>   
	
    <!-- Bianco-->
    <section class="content-section bg-light" id="sha">
      <div >
		<div class="content-section-heading">
			<h2 class="mb-5 text-center" style="color:#1d809f;">Algoritmo SHA (Secure Hash Algorithm)</h2>
		</div>
		<div class="row">
			<div class="testo mx-auto">
			<p class="lead mb-5" style="font-size:2vw; ">Con il termine SHA si indica una famiglia di cinque diverse funzioni crittografiche di hash sviluppate a partire dal 1993, pubblicate dal NIST (National Institute of Standards and Technology) come standard federale dal governo degli USA.</p>
			<p class="lead mb-5" style="font-size:2vw; ">Come ogni algoritmo di hash, lo SHA produce un message digest di lunghezza fissa partendo da un messaggio di lunghezza variabile. La sicurezza di un algoritmo di hash risiede nel fatto che la funzione non sia reversibile, cioè non è possibile risalire al messaggio originale tramite il digest. Inoltre una minima variazione nel messaggio genera un hash completamente differente,  a causa di una reazione a catena nota come effetto valanga.</p>
			<p class="lead mb-5" style="font-size:2vw; ">Il primo algoritmo SHA-1 produce un digest del messaggio di soli 160 bit, mentre gli altri producono digest di lunghezza in bit pari al numero indicato nella loro sigla (SHA-256 produce un digest di 256 bit). </p>
			<p class="lead mb-5" style="font-size:2vw; ">Nel 2001 il NIST pubblicò quattro funzioni di hash addizionali facenti parte della famiglia SHA, ognuna con un digest più lungo di quello originale, collettivamente denominate SHA-2 e sono: lo SHA-224, lo SHA-256, lo SHA-384 e lo SHA-512. </p>
			</div>
        </div>
      </div>
    </section>
	   
    <!-- Blu -->
    <section class="content-section bg-primary text-white" id="aes">
      <div>
        <div class="content-section-heading text-center">
          <h2 class="mb-5" style="color:#ffd480;">Algoritmo AES (Advance Encryption Standard)</h2>
        </div>
        <div >
			<div class="testo mx-auto">
				<p class="lead mb-5" style="font-size:2vw; ">In crittografia, l'Advanced Encryption Standard (AES) è un algoritmo di cifratura  a blocchi utilizzato come standard dal governo degli Stati Uniti d'America.</p>
				<p class="lead mb-5" style="font-size:2vw; ">AES fu progettato dai due crittologi Joan Daemen e Vincent Rijmen sulla base di 3 caratteristiche fondamentali:</p>
				<ul class="lead mb-5" style="font-size:2vw; ">
					<li>resistenza contro gli attacchi, dato che la chiave ha dimensioni minime di 128 bit, gli attacchi a “forza bruta” (brute force) non sono una minaccia;</li>
					<li>velocità e compattezza del codice su un’ampia gamma di piattaforme;</li>
					<li>semplicità progettuale.</li>
				</ul>
				<p class="lead mb-5" style="font-size:2vw; ">AES è il primo standard approvato da NSA (National Security Agency) per comunicazioni top-secret ed è tuttora il cifrario a chiave segreta più usato negli ambienti informatici: a oggi non sono conosciuti attacchi in grado di violarlo.</p>
			</div>
        </div>
      </div>
    </section>   
	
	<!-- Bianco-->
    <section class="content-section bg-light text-center" id="bitcoin">
      <div >
		<div class="content-section-heading">
			<h2 class="mb-5 " style="color:#1d809f;">I Bitcoin</h2>
		</div>
		<div class="row">
			<div class="testo mx-auto">
				<p class="lead mb-5" style="font-size:2vw; ">I Bitcoin nascono come valuta virtuale nel 2009. Il suo inventore ha identità sconosciuta ma è noto al mondo con lo pseudonimo di Satoshi Nakamoto. Si tratta di una moneta non reale, con la quale però si possono comprare oggetti reali. A differenza delle valute tradizionali i bitcoin non sono controllati da un organo centrale, questo rende il loro valore reale molto variabile.</p>
				
				<h3 class="mb-5 text-left" style="color:#1d809f;">Come vengono creati</h3>
				<p class="lead mb-5" style="font-size:2vw; ">Generare Bitcoin è abbastanza complesso. L’operazione si definisce mining. Inizialmente per il mining venivano usate le risorse della CPU. Oggi i vari programmi per il mining sfruttano le risorse della GPU, ma le macchine sono formate solo da hardware specializzato e richiedono un’enorme quantità di energia.</p>
				<p class="lead mb-5" style="font-size:2vw; ">Questo a portato alla formazione di “gilde di minatori” (Mining Pool) dove tutti i partecipanti mettono in comune le proprie risorse, spartendosi poi i blocchi generati in funzione del contributo di ognuno. Ovviamente è anche possibile comprarli scambiandoli con l’euro, in Rete o in sportelli fisici.</p>
				<p class="lead mb-5" style="font-size:2vw; ">Inoltre un utente può affittare una macchina remota per il mining (Cloud Mining). Grazie al Cloud Mining si può iniziare l'estrazione della criptovaluta anche con minimi investimenti e senza conoscenze tecniche. Il tutto può essere controllato sulla dashboard del sito che offre questo servizio.</p>
				
				<h3 class="mb-5 text-left" style="color:#1d809f;">Qual’è il limite del bitcoin?</h3>
				<p class="lead mb-5" style="font-size:2vw; ">La creazione è lo scambio di questa moneta avviene secondo il protocollo peer-to-peer. Chiunque può coniarla ma esiste un tetto massimo di bitcoin coniabili. Questa cifra è di 21 milioni.</p>
				<p class="lead mb-5" style="font-size:2vw; ">Nel 2013 è stata generata metà delle possibili monete e per il 2017 saranno i tre quarti, in questo modo in meno di 32 anni verranno generate tutte le monete. All’avvicinarsi di quella data è probabile pensare che i bitcoin subiranno una deflazione nel valore (cioè un aumento del valore reale) dovuta alla scarsità di nuova moneta.</p>
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
        <p class="text-muted small mb-0 text-center">Copyright &copy; Your Website 2017</p>
		<p class="text-muted small mb-0 text-center">ITTS DIVINI -- INFORMATICA 5G -- Rondini Matteo</p>
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
