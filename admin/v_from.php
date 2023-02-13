<?php
include("koneksi.php");
if (isset($_GET['Id'])){
	$title = 'edit';
	$url = 'proses_edit.php';
	$id = $GET['Id'];
	//buat query untuk ambil data dari database
	$sql = "select * FROM admin WHERE Id = $id";
	$query = mysqli_query($koneksi,sql);
	$admin = mysqli_fetch_assc($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query)<1){
		die ("data tidak ditemukan...");}
		//url jika edit data
	}else{
		$title ="add";
		//url jika tambah data
		$url = 'proses_pendaftaran.php';
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>formulir pendaftaran</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<header><h3>formulir pendaftaran</h3></header>
		<form action="proses_pendaftaran.php" method="POST">
		<fieldset>
			<legend><h2>from pendaftaran</h2></legend>
<div>
<label for="Id">ID: </label><br>
<input type="text" name="Id" value="<?php if(isset ($_GET['Id']))
{echo $admin ['Id'];}?>"/>
</div>
<div>
<label for="nama">Nama: </label><br>
<input type="text" name="nama" value="<?php if(isset ($_GET['Id']))
{echo $admin ['nama'];}?>"/>
</div>
<div>
<label for="email">Email:</label><br>
<input type="text" name="email" value="<?php if(isset ($_GET['Id']))
{echo $admin ['email'];}?>"/>
</div>
<label for="tgl_lahir">Tanggal Lahir:</label><br>
<input type="date" name="tgl_lahir" value="<?php if(isset ($_GET['Id']))
{echo $admin ['tgl_lahir'];}?>"/>
<div>
<label for = 'alamat'> Alamat :</label><br>
<textarea name = "alamat" row = "5"> <?php if(isset ($_GET['Id']))
{echo $admin ['alamat'];} ?> </textarea>
</div>
<hr>
<div>
	<input type="submit" value = "simpan" name="simpan"/>
</div>
</fieldset>
</from>
</body>
</html>