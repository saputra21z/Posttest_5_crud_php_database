<?php
include('koneksi.php');

if(isset($_POST['submit'])){
   $id = $_POST['id_barang'];
   $nama = $_POST['nama_barang'];
   $jenis = $_POST['jenis_barang'];
   $stok = $_POST['stok_barang'];
   $status = $_POST['status_barang'];

   $create = mysqli_query($koneksi,"INSERT INTO goods VALUES(
      '".$id."',
      '".$nama."',
      '".$jenis."',
      '".$stok."',
      '".$status."'

   )");

   if($create){
      ?>
      <script>
        alert("data berhasil ditambahkan");
        window.location=('tampilan.php');
      </script>
      <?php
   } else {
      echo "gagal" . mysqli_error($koneksi);
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST TEST 4</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="forms1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-success" href="#">HendySports</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="forms.php">Forms</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tampilan.php">Read Data</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Alat Olahraga
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Bulu Tangkis</a>
            <a class="dropdown-item" href="#">Futsal</a>
            <a class="dropdown-item" href="#">Renang</a>
            <a class="dropdown-item" href="#">Basket</a>
            <a class="dropdown-item" href="#">Sepak Bola</a>
          </div>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Me</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container">
        <h2 class="alert alert-success text-center mt-5 col-md-8">Forms Tambah Data</h2>
        <form action="" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="id_barang">Id Barang:</label>
                        <input type="number" name="id_barang" class="form-control" placeholder="Masukan Id Barang">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="nama_barang">Nama Alat Olahraga:</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Alat Olahraga">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="jenis_barang">Jenis Alat Olahraga:</label>
                        <input type="text" name="jenis_barang" class="form-control" placeholder="Jenis Alat Olahraga">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="stok_barang">Stok Barang:</label>
                        <input type="number" name="stok_barang" class="form-control" placeholder="Masukan Stok Barang">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="status_barang">Status: </label>
                <div class="row">
                    <div class="col-md-8">
                        <input type="radio" name="status_barang" value="ready">Ready
                        <input type="radio" name="status_barang" value="tidak">Tidak
                    </div>
                </div>
            </div>
            <button type="submit" name="submit"  class="btn btn-primary">Tambah</button>
        </form>
    </div>
  <section class="footer">
    <div class="social">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <ul class="list">
      <li>
        <a href="#">Home</a
      </li>
      <li>
        <a href="#">Services</a>
      </li>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Terms</a>
      </li>
      <li>
        <a href="#">Privacy Policy</a>
      </li>
    </ul>
    <p class="copyright">
      Future Coders &copy;2022 - by Hendy Saputra
    </p>
  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>