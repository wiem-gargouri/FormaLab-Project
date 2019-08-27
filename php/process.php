<?php
function connect(){
    $serveur = "localhost";
    $base = "tpbd";
    $username = "root";
    $pass = "";
    try{
        $dataBase = new PDO("mysql:host=$serveur;dbname=$base",$username,$pass);
        return $dataBase;
    }catch(PDOException $e){
        die("erreur de connexion : ".$e->getMessage());
    }
}
session_start();

//connexion bd
$conn = connect();

//recuperation data
$des='';
$date='';
$des = $_POST['des'];
$date= $_POST['date'];


//preparation requette
$req = "INSERT into  data values (null,'$des','$date')";



$result = $conn->exec($req);
$_SESSION['message']=" Saved ! ";
$_SESSION['msg_type']="success";
header('location:../html/connectee/goals.php');
//result 1 ou 2
echo $result;

?>