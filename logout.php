<?php
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

header("Location: https://www.divini5g.com/cryptolocker/matteo.php");
?>