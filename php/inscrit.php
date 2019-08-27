<?php
include_once "./connect.php";


//connexion bd
$conn = connect();

//recuperation data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$addr = $_POST['adress'];
$genr = $_POST['gender'];
$cartnum = $_POST['numcard'];
$cartname = $_POST['namecard'];


//preparation requette
$req = "INSERT into inscrit values(null,'$nom','$prenom','$email','$addr','$genr','$cartname','$cartnum','$pwd')";

//exec(requette) => insert , update , delete
//success => nbr de ligne inséré ( int )
//erreur => false ( boolean )

$result = $conn->exec($req);

//result
echo $result;
?>