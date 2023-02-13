<?php
include("koneksi.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data di from
	$Id =$_POST['Id'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$tgl_lahir =$_POST['tgl_lahir'];
	$alamat =$_POST['alamat'];
	//buat query update
	$sql ="UPDATE admin SET Id='$Id',Nama='$nama',Email='$email',tgl_lahir='$tgl_lahir',alamat='$alamat' WHERE Id ='$Id' ";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah update berhasil
	if($query){
		//kalau berhasil, alihkan ke halaman index2.php dengan status = sukses
		header('location:index.php?status=sukses');
	}else{
		//kalau gagal, alihkan ke halaman index2.php dengan status = gagal
		header('location:index.php?status=gagal');
	}

	}else{
		die("Akses dilarang...");
	}
?>
	}

