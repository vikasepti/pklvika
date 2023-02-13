<?php include('koneksi.php');
session_start();?>
<!DOCTYPE html>
<html>
<head><title>Data Pendaftaran</title></head>
<center><h2>Data Pendaftaran</h2></center>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<header><h2><daftar peserta></h2></header>
	<center><nav><a href="login.php"><button>tambah baru</button>
	</a></nav></center>
	<br>
	<center>
	<table  class="table table-bordered table-striped table-hover">
	<head>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Tindakan</th>
		</tr>
	</head>
<?php
$sql = "SELECT * FROM admin";
$query = mysqli_query($koneksi, $sql);
while ($admin = mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td>".$admin['Id']."</td>";
	echo "<td>".$admin['nama']."</td>";
	echo "<td>".$admin['email']."</td>";
	echo "<td>".$admin['tgl_lahir']."</td>";
	echo "<td>".$admin['alamat']."</td>";
	echo "<td>";
	echo "<a href = 'edit.php?Id=".$admin['Id']."'>Edit</a> | ";
	echo "<a href = 'hapus.php?Id=".$admin['Id']."'>Hapus</a> | ";
}
?>
</tbody>
</table>
<p>total:
	<?php echo mysqli_num_rows($query)?>
<br>
<center><nav><a href="logout.php"><button>logout</button></a></nav>
</center>
</p>
</html>


<!DOCTYPE html>
<html>
<head><title>membuat from login dangan javascript</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
</br>
<br/>
<center><h2>FROM LOGIN</h2></center>
<br/>
<div class="login">
<br/>	
<form action="login.php" method="post" onsubmit="return validasi()">
<div>
	<label>username</label>
	<input type="text" name="username" id="username"/>
</div>
<div>
	<label>password</label>
	<input type="password:" name="password" id="password"/>
</div>
<div>
	<input type="submit" value="login" class="tombol"/>
</div>
</form>
</div>
</body>
<script type="text/javascript">
function validasi (){
	var username = documen.getElementById("username").value;
	var password = documen.getElementById("password").value;
	if (username!=""&&password!=""){
		return true;
	}  else {
		alert('username dan password harus diisi!');
		return ealse;}}
</script>
</html>