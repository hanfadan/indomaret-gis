<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$gid = $_GET['gid'];
// Ambil Data yang Dikirim dari Form
$kecamatan = $_POST['kecamatan'];
$gedung = $_POST['gedung'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// Cek apakah user ingin mengubah gambarnya atau tidak
if(isset($_POST['ubah_gambar'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data gambar yang dipilih dari form
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];

  // Rename nama gambarnya dengan menambahkan tanggal dan jam upload
  $gambarbaru = date('dmYHis').$gambar;

  // Set path folder tempat menyimpan gambarnya
  $path = "gambar/".$gambarbaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM koordinat WHERE gid='".$gid."'";
    $sql = pg_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = pg_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file gambar sebelumnya ada di folder gambar
    if(is_file("gambar/".$data['gambar'])) // Jika gambar ada
      unlink("gambar/".$data['gambar']); // Hapus file gambar sebelumnya yang ada di folder gambar

    // Proses ubah data ke Database
    $query = ("UPDATE koordinat SET kecamatan='$kecamatan', gedung='$gedung', longitude='$longitude', latitude='$latitude', alamat='$alamat', gambar='$gambarbaru' WHERE gid='$gid'");
    $sql = pg_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: view.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
      $query = ("UPDATE koordinat SET kecamatan='$kecamatan', gedung='$gedung', longitude='$longitude', latitude='$latitude', alamat='$alamat' WHERE gid='$gid'");
  $sql = pg_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: view.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
  }
}
?>
