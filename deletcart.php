<?php
//echo ;
include_once "Function.php";
session_start();
$Orecord=new record;

$es=$_SESSION["Email"];
$Orecord->Ofmanager->fileN="users.txt";
$user=$Orecord->Esearchuser($es);
$id=$Orecord->Esearchid($es);

$Orecord1=new record;
$Orecord1->Ofmanager->fileN="$user$id.txt";


$Orecord1->delete_user($_GET["id"]);

header("location:viewcart.php");
