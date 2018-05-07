
<!DOCTYPE html>
<html>
<head>
<title>Data Mahasiswa</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<table width="50%" border="1">
	<tr>
	<th>no</th>
	<th>nama</th>
	<th>nim</th>
	<th>jurusan</th>
	<th>usia</th>
	</tr>

	<?php
	include 'koneksi.php';
	$sql = mysqli_query($conn,"SELECT * FROM mahasiswa");
	$nomor=1;
	while ($data=mysqli_fetch_array($sql)){
		echo 
		"<tr>
		<td>$nomor</td>
		<td>$data[nim]</td>
		<td>$data[nama]</td>
		<td>$data[jurusan]</td>
		<td>$data[usia]</td>
		</tr>";
  $nomor++;
		
	}
	?>
	</table>

</body>

</html>