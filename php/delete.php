<?php
include_once "./connect.php";
session_start(); 
//connexion bd
$conn = connect();

//recuperation data
$id = $_GET['delete'];

//preparation requette
$req = "delete from data where num = $id";

//exec(requette) => insert , update , delete
//success => nbr de ligne inséré ( int )
//erreur => false ( boolean )

$result = $conn->exec($req);
$_SESSION['message']=" row has been deleted ! ";
$_SESSION['msg_type']="danger";
header('location:../html/connectee/goals.php');
//result
if ($result == 1) {
    echo "supprimé avec succées";
}else {
    echo "error";
}


?>
