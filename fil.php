<?php 

include_once "Function.php";
session_start();
$Orecord=new record;
$Orecord->Ofmanager->fileN="users.txt";
$es=$_SESSION["Email"];
$user=$Orecord->Esearchuser($es);
$id=$Orecord->Esearchid($es);

$er=$_REQUEST["id"];
$Orecord1=new record;
$Orecord1->Ofmanager->fileN="product.txt";
$arr=array();
$arr =$Orecord1->fin();

//$Orecord1->id=$arr[$er]->id;
$a=$arr[$er-1]->user;
$b=$arr[$er-1]->Email;
$c=$arr[$er-1]->pass;
$d= $arr[$er-1]->type;
echo $er;
echo $d;

$Orecord2=new record;
$Orecord2->Ofmanager->fileN="$user$id.txt";
$Orecord2->user=$a;
$Orecord2->Email=$b;
$Orecord2->pass=$c;
$Orecord2->type =$d;
$Orecord2->OrecordsNOS();
header("location:prodppp.php");


//$myfile = fopen("$user$id.txt", "w+");

