<?php
require_once"koneksi.php";
$sql = "select * from koordinat";
$run = pg_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/leaflet.css" /> <!-- memanggil css di folder leaflet -->
	<link rel="stylesheet" href="assets/css/style.css" /> <!-- memanggil css di folder leaflet -->
	<script src="assets/js/leaflet.js"></script> <!-- memanggil leaflet.js di folder leaflet -->
	<script src="assets/js/jquery-3.2.1.min.js"></script> <!-- memanggil jquery di folder js -->
  </head>
  <body>
    <div id="header">
      <table>
        <tr>
            <td><a href="index.php">Beranda</a></td>
            <td><a href="login.php">Login Admin</a></td>
        </tr>
      </table>
    </div>
    <div id="map"> <!-- ini id="map" bisa di ganti dengan nama yang di inginkan -->

	 <script>
		var map = L.map('map').setView([-6.6061381,106.801851], 12);
		var basemap = L.tileLayer.wms("http://localhost:8080/geoserver/latihan/wms?service=WMS", {
			layers: 'latihan:CITRA 2014 KOTA BOGOR',
			format: 'image/png',
			transparent: true
		});
		basemap.addTo(map);

		 var IconBiru = L.icon({
						iconUrl: 'assets/image/blue-marker.png',
						iconSize: [30, 30], // size of the icon
						iconAnchor: [15,35],
					});

		var simpul = [
        <?php while($data = pg_fetch_assoc($run)){ ?>
				['<center><img src="<?php echo "gambar/".$data ["gambar"]; ?> "style="height: 225px; width: 200px"></center> <br> <?php echo $data['gedung']."<br>".$data['alamat']."<br>".$data['kecamatan']?>',<?php echo $data['latitude'].",".$data['longitude'] ?>],
			<?php } ?>
		 ];

		  for (var i = 0; i < simpul.length; i++) {
			  marker = new L.marker([simpul[i][1],simpul[i][2]],{icon: IconBiru})
			  .bindPopup(simpul[i][0])
			  .addTo(map);
          }

	 </script>
	</div>
  </body>
</html>
