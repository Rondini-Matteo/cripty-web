<?php
session_start();

$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "cryptoutenti";

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$email= $_POST["email"];
$password= $_POST["password"];

$pass=md5($password);

$sql= "SELECT * FROM $tab_nome WHERE email='$email' AND password='$pass'";
$result=mysql_query($sql);
$conta=mysql_num_rows($result);

if($conta==1){
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	header("Location: https://www.divini5g.com/cryptolocker/read.php");
}
else{
	header("Location: https://www.divini5g.com/cryptolocker/login.php?errore=1");
}

?>