<!DOCTYPE html>
<html>
<head><title>membuat from login dangan javascript</title>
</head>
<body>


<form action="nav.php" method="post" onsubmit="return submit()">
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" type="text/css" href="style.css">


    <title>Hello, world!</title>
  </head>
  <body>
    <form action="login.php" method="post" onsubmit="return submit()">  
    <!-- navbar -->
<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="logo" src="ll.png" height="100" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="info.php">Info</a>
         <form class="form-info" action="info.php" method="POST">

        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Profil</a>
        </li>
      </ul>
      <button class="btn btn-primary ms-3">Sign in</button>
    </div>
  </div>
</nav>

<div class="hero vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto text-center">
        <h1 class="display-4 text-white">Welcome To Event K-pop Concert</h1>
        <p class="text-white my-4">Kabar gembira buat K-Popers yang mau lihat aksi panggung para idola mereka secara langsung nih! Ada satu lagi konser musik yang wajib banget buat didatangi, namanya adalah We All Are One Let’s Love K-Pop Concert.Kabar ini disampaikan oleh We All Are One atau Red Angel Korea melalui akun media sosial resmi mereka. Rangkaian konser We All Are One Let’s Love ini rencananya akan digelar di Stadion Madya Gelora Bung Karno, Jakarta.</p>
        <a href="login.php" class="btn me-2 btn-primary">Daftar</a>
        <a href="v_form.php" class="btn btn-outline-light">Login admin</a>
      </div>
    </div>
  </div>
</div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body>
</html>

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