<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "tugaspaw";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
	die("koneksi gagal: ". mysqli_connect_error());
}

?>
	<table class="table table-dark">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>NIM</td>
			<td>Alamat</td>
			<td>Action</td>
		</tr>
		<tr>
			<td>1</td>
			<td>IZUL RAMDANI</td>
			<td>200411100111</td>
			<td>KARAWANG</td>
			<td>Edit | Delet</td>
		</tr>
	</table>
</body>
</html>
