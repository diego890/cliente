<?php
require("class-Clockwork.php");
$apikey = "25e17738c221f7b79e04791ed7909dc613b7848d";
$clockwork = new Clockwork($apikey);

$message = array('to'=> '51968577250', 'message' => 'es ekl primer mensaje');
$done = Clockwork->send($mensaje);
?>