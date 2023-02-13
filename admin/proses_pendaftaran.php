<?php 
include ( "koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if($_SERVER['REQUEST_METHOD']=="POST"){
	//ambil data dari form
	$Id =$_POST['Id'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$tgl_lahir =$_POST['tgl_lahir'];
	$alamat =$_POST['alamat'];
	//buat query
	$sql = "INSERT INTO admin(Id,nama,email,tgl_lahir,alamat) VALUE ('$Id','$nama','$email','$tgl_lahir','$alamat')";
	$query = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	//apakah query update berhasil
	if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
		header('location:index.php?status=sukses');
	}elseif (header('location:index.php?status=gagal')) {
		//kalau gagal, alihkan ke halaman index.php dengan status=gagal
	}else{
		die("Akses dilarang...");
	}
}
?>
