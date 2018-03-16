<?php

$mysqli1 = new mysqli("exemple.com", "utilisateur", "mot_de_passe", "MaBase");
$res = $mysqli1->query("SELECT * FROM MaTable WHERE id=".$_GET['id']);
$res = $mysqli1->query($a);

$mysqli2 = mysqli_connect("exemple.com", "utilisateur", "mot_de_passe", $_GET['base']);
$res = $mysqli2->query("SELECT * FROM MaTable WHERE id=".$_GET['id']);
$res = $mysqli2->query($a);