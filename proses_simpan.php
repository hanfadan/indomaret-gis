<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$kecamatan = $_POST['kecamatan'];
$gedung = $_POST['gedung'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$gambarbaru = date('dmYHis').$gambar;
// Set path folder tempat menyimpan fotonya
$path = "gambar/".$gambarbaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO koordinat (kecamatan, gedung, longitude, latitude, alamat, gambar) VALUES ('$kecamatan', '$gedung', '$longitude', '$latitude', '$alamat', '$gambarbaru')";
  $sql = pg_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: view.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
}
?>
