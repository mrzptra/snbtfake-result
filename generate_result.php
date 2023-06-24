<?php
include 'header.php';
if(isset($_POST['search'])){
    $nopeserta = $_POST['nopes'];
	$namapes = $_POST['nama'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
	$kode = $_POST['kodeptn'];
	$jurusan = $_POST['jurusan'];
	$prodi = $_POST['prodi'];
    $status = $_POST['status'];

    $dateofbirth = ''.$month.'-'.$day.'-'.$year.' ';
    if($status == "accept"){
        include 'true.php';
    }else{
        include 'false.php';
    }
}else{
	header("location: index.php");
}
include 'footer.php';
?>