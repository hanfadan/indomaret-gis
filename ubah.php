<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="icon" href="assets/images/favicon.ico"/>

  <title>Ubah Data Indomaret</title>
  <link href="assets/css/journal-bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/general.css" rel="stylesheet"/>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
      <header style="background: url(webgis.png); height: 194px;">
          <div class="row" >
              <div class="col-md-3">

              </div>
              <div class="col-md-6"></div>
              <div class="col-md-3"></div>
          </div>
          </header>

          <nav class="navbar navbar-default navbar-static-top">
          <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Web Gis</a>
              </div>

              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="about.php"><span class="glyphicon glyphicon-glyphicon glyphicon-cloud"></span> Tentang</a></li>
                  <li><a href="login.php"><span class="glyphicon glyphicon-glyphicon glyphicon-user"></span> Login</a></li>
                  </ul>


<br>
</br>

<br>
</br>

<div class="page-header">
    <h1>Ubah Data Indomaret</h1>
</div>


  <?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $gid = $_GET['gid'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM koordinat WHERE gid='".$gid."'";
  $sql = pg_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = pg_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>

  <form method="post" action="proses_ubah.php?gid=<?php echo $gid; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Kecamatan</td>
    <td><input type="text" name="kecamatan" value="<?php echo $data['kecamatan']; ?>"></td>
  </tr>
  <tr>
    <td>Gedung</td>
    <td><input type="text" name="gedung" value="<?php echo $data['gedung']; ?>"></td>
  </tr>
  <tr>
  <tr>
    <td>Longitude</td>
    <td><input type="text" name="longitude" value="<?php echo $data['longitude']; ?>"></td>
  </tr>
  <tr>
    <tr>
      <td>Latitude</td>
      <td><input type="text" name="latitude" value="<?php echo $data['latitude']; ?>"></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="gambar">
    </td>
  </tr>
  </table>

  <hr>
  <input type="submit" value="Ubah">
  <a href="view.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
