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
    <h1>Tambah Data Indomaret</h1>
</div>


  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Kecamatan</td>
    <td><input type="text" name="kecamatan"></td>
  </tr>
  <tr>
    <td>Gedung</td>
    <td><input type="text" name="gedung"></td>
  </tr>
  <tr>
    <td>Longitude</td>
    <td><input type="number" step="any" name="longitude"></td>
  </tr>
  <tr>
    <td>Latitude</td>
    <td><input type="number" step="any" name="latitude"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="gambar"></td>
  </tr>
  </table>

  <hr>
  <input type="submit" value="Simpan">
  <a href="view.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
