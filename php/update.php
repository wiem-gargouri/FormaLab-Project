<?php

include_once "./connect.php";

session_start();

$conn = connect();
$des='';
$date='';
if(isset($_GET['edit'])) {
    $id=$_GET['edit'];
    $req= "SELECT * from data where num=$id" ;
    $result = $conn->query($req);
    if ($result->rowCount()==1){
        $user = $result->fetch_array();
        $des=$user->des ;
        $date=$user->date; 

    }
     }
?>