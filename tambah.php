<?php
	include 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$usia = $_POST['usia'];

	$sql = mysqli_query ($conn ,"INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', usia='$usia'");

	if(sql){
		echo "data berhasil ditambah";
	}
		else{
			echo "data tidak ditambah";
	
		}
	?>