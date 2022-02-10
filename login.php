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
    <h1>Login Admin</h1>
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
      }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
      }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
      }
    }
    ?>
</div>
<div class="row">
    <div class="col-md-4">
        <form class="form-signin" action="proses_login.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" autofocus />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-log-in"> </span> Masuk</button>
                <p class="help-block">User dan pass admin: admin <br />
                User dan pass petugas: petugas</p>
            </div>
        </form>
    </div>
</div>

<br>
</br>

<br>
</br>
<footer class="footer">
  <div class="container">
    <p>Copyright &copy; <?=date('Y')?> Kelompok PFS <em class="pull-right">Diupdate tanggal 16 Desember 2019</em></p>
  </div>
</footer>
</body>
</htm
