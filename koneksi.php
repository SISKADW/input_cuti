<?php
$user="root";
$server="localhost";
$password="";
$database="db_uts3";

$conn=mysql_connect($server,$user,$password);
if($conn){
	echo 'Ok ';
}else{
	echo 'Cek Lagi';
}

$db=mysql_select_db($database);
if($db){
	echo 'Database Berhasil Terhubung ';
}else{
	echo 'OKE';
}
?>