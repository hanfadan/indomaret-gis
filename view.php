<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="icon" href="assets/images/favicon.ico"/>

  <title>Panel Admin</title>
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
    <h1>Panel Admin</h1>
</div>

  <a href="tambah.php"> <button class="btn btn-primary" >   <span class="glyphicon glyphicon-log-in"></span> Tambah Data</button> </a>
  <a href="logout.php"> <button class="btn btn-primary" >   <span class="glyphicon glyphicon-log-in"></span> Logout</button> </a>

     <br>
     </br>

<form action="view.php" method="get">
     <div class="col-lg-6">
       <div class="input-group">
         <input type="text" class="form-control" placeholder="Search for..." name="cari">
         <span class="input-group-btn">
            <a href="proses_cari.php"><button class="btn btn-default" type="button">Go!</button></a>
         </span>
       </div><!-- /input-group -->
     </div><!-- /.col-lg-6 -->
   </div><!-- /.row -->
   </form>

   <br>
   </br>

  <table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Kecamatan</th>
    <th>Gedung</th>
    <th>Longitude</th>
    <th>Latitude</th>
    <th>Alamat</th>
    <th>Gambar</th>
    <th colspan="2">Aksi</th>
  </tr>

  <?php
  // Load file koneksi.php
  include "koneksi.php";

  $query = "SELECT * FROM koordinat"; // Query untuk menampilkan semua data siswa
  $sql = pg_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = pg_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['no']."</td>";
    echo "<td>".$data['kecamatan']."</td>";
    echo "<td>".$data['gedung']."</td>";
    echo "<td>".$data['longitude']."</td>";
    echo "<td>".$data['latitude']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><img src='gambar/".$data['gambar']."' width='100' height='100'></td>";
    echo "<td><a href='ubah.php?gid=".$data['gid']."'>Ubah</a></td>";
    echo "<td><a href='hapus.php?gid=".$data['gid']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
  <br>
  </br>
<tr>

  <br>
  </br>
  <footer class="footer">
    <div class="container">
      <p>Copyright &copy; <?=date('Y')?> Kelompok PFS <em class="pull-right">Diupdate tanggal 16 Desember 2019</em></p>
    </div>
  </footer>
</body>
</htm
