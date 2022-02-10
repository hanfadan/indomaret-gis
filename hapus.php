<?php

	include 'koneksi.php';
	$gid=$_GET['gid'];
	pg_query("DELETE from koordinat WHERE gid='$gid'");


	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href='view.php';
		  </script>";



?>
