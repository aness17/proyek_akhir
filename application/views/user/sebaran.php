<script src="<?= base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js') ?>"></script>
<script src="batas.js"></script>
<!-- <script src="jarak.js"></script> -->
<style type="text/css">
	.btn_style {
		border: 1px solid #cecece;
		border-radius: 3px;
		padding: 3px 10px;
		box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
		color: white;
		background-color: red;
	}

	.btn_style:hover {
		border: 1px solid #b1b1b1;
		box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
	}
</style>
<section id="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<center>
							<div id="map" style="height: 500px; width: 950px;"></div>

						</center>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<table class="table">
							<tr>
								<td style="background: purple"> </td>
								<td>
									rekomendasi untuk pencarian Ekspedisi
								</td>
							</tr>
						</table>
						<table class="table">
							<tr>
								<td>Kriteria Penetuan Rekomendasi Ekspedisi Terdekat Dari Masjid / Fasilitas Umum</td>

							</tr>
							<tr>
								<td>- Minimal Berjarak 50 Meter dari masjid terdekat atau fasilitas umum</td>
							</tr>
						</table>
					</div>
				</div>
			</div> -->
		</div>

	</div>
</section>




<script>
	getLocation();
	setInterval(() => {
		getLocation();

	}, 3000);

	function getLocation() {
		//jika browser mendukung navigator.geolocation maka akan menjalankan perintah di bawahnya
		if (navigator.geolocation) {
			// getCurrentPosition digunakan untuk mendapatkan lokasi pengguna
			//showPosition adalah fungsi yang akan dijalankan
			navigator.geolocation.getCurrentPosition(showPosition);
		}
	}

	function showPosition(position) {
		var titik = [position.coords.latitude, position.coords.longitude];
		// let titik = [0.4737907605329965, 101.4248760767789];
		var map = L.map('map').setView(titik, 12);

		var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);
		var myIcon = L.icon({
			iconUrl: 'location.png',
			iconSize: [40, 45],
		});

		var getaku = L.marker([position.coords.latitude, position.coords.longitude], {
				icon: myIcon
			})
			.addTo(map)
			.bindPopup("<b>Hai!</b><br />Ini adalah lokasi mu");
		var satu = L.layerGroup();
		var dua = L.layerGroup();
		var lima = L.layerGroup();
		var satukm = L.layerGroup();
		var masjid = L.layerGroup();
		var mall = L.layerGroup();
		var taman = L.layerGroup();
		//basemaps
		var baseMaps = [{
			groupName: "Base Maps",
			expanded: true,
			layers: {
				"Open Street": map,
			}
		}];


		var overlays = [{
			groupName: "Peta",
			layers: {
				"Masjid": masjid,
				"Mall": mall,
				"Taman": taman,
				"Jarak 100 M": satu,
				"Jarak 200 M": dua,
				"Jarak 500 M": lima,
				"Jarak 1 KM": satukm,
			}
		}];

		var options = {
			contaner_width: "300px",
			group_maxHeight: "80px",
			exclusive: false,
			collapsed: true,
			position: "topright"
		}
		var control = L.Control.styledLayerControl(baseMaps, overlays, options);
		map.addControl(control);

		$.getJSON("gg.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#15C809",
						weight: 1,
						fillColor: "#15C809",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Kecamatan : " + feature.properties.Name + "</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(map);
		});

		$.getJSON("geo/mall.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#15C809",
						weight: 1,
						fillColor: "#15C809",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Nama : " + feature.properties.Name + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(mall);
		});
		$.getJSON("geo/taman.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#15C809",
						weight: 1,
						fillColor: "#15C809",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Nama : " + feature.properties.Nama + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(taman);
		});

		$.getJSON("geo/1_km.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#09C885",
						weight: 1,
						fillColor: "#09C885",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Nama : " + feature.properties.Nama + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Telpon : " + feature.properties.Telpon + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> AnalysisArea : " + feature.properties.AnalysisArea + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> BUFF_DIST : " + feature.properties.BUFF_DIST + " Meter</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(satukm);
		});
		$.getJSON("geo/100_m.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#F9860B",
						weight: 1,
						fillColor: "#F9860B",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Nama : " + feature.properties.Nama + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Telpon : " + feature.properties.Telpon + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> AnalysisArea : " + feature.properties.AnalysisArea + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> BUFF_DIST : " + feature.properties.BUFF_DIST + " Meter</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(satu);
		});
		$.getJSON("geo/200_m.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#F9160B",
						weight: 1,
						fillColor: "#F9160B",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Nama : " + feature.properties.Nama + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Telpon : " + feature.properties.Telpon + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> AnalysisArea : " + feature.properties.AnalysisArea + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> BUFF_DIST : " + feature.properties.BUFF_DIST + " Meter</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(dua);
		});
		$.getJSON("geo/500_m.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#F9860B",
						weight: 1,
						fillColor: "#F9860B",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					var hehe = "<table class='table table-striped table-bordered'>";
					hehe += "<tr>";
					hehe += "<td> Nama : " + feature.properties.Nama + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> Telpon : " + feature.properties.Telpon + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> AnalysisArea : " + feature.properties.AnalysisArea + "</td>";
					hehe += "</tr>";
					hehe += "<tr>";
					hehe += "<td> BUFF_DIST : " + feature.properties.BUFF_DIST + " Meter</td>";
					hehe += "</tr>";
					hehe += "</table>";
					layer.bindPopup(hehe);
				}
			}).addTo(dua);
		});


		$.getJSON("masjid.geojson", function(data) {
			L.geoJSON(data, {
				style: function(feature) {
					return {
						color: "#A509C8",
						weight: 5,
						fillColor: "#A509C8",
						fillOpacity: 0.4
					}

				},
				onEachFeature: function(feature, layer) {
					if (feature.geometry.type == "Point") {
						var hehe = "<table class='table table-striped table-bordered'>";
						hehe += "<tr>";
						hehe += "<td> Nama Eskpedisi: " + feature.properties.Nama + "</td>";
						hehe += "</tr>";
						hehe += "<tr>";
						hehe += "<td> Telpon : " + feature.properties.Telpon + "</td>";
						hehe += "</tr>";
						hehe += "<tr>";
						hehe += "<td> Alamat : " + feature.properties.Alamat + "</td>";
						hehe += "</tr>";
						hehe += "<tr>";
						hehe += "<td> Jarak : " + feature.properties.Total_Miles + " Total_Miles</td>";
						hehe += "</tr>";
						hehe += "</table>";
						layer.bindPopup(hehe);
					} else {
						var hehe = "<table class='table table-striped table-bordered'>";

						hehe += "<tr>";
						hehe += "<td> Nama Masjid : " + feature.properties.From_nama + " </td>";
						hehe += "</tr>";
						hehe += "<tr>";
						hehe += "<td> Telepon : " + feature.properties.From_telepon + " </td>";
						hehe += "</tr>";

						hehe += "<tr>";
						hehe += "<td> Alamat : " + feature.properties.From_alamat + " </td>";
						hehe += "</tr>";


						hehe += "<tr>";
						hehe += "<td> Jarak Ke Ekspedisi : " + feature.properties.To_Nama + " </td>";
						hehe += "</tr>";

						hehe += "<tr>";
						hehe += "<td> Jarak : " + feature.properties.Total_Miles + " Total_Miles</td>";
						hehe += "</tr>";
						hehe += "</table>";
						layer.bindPopup(hehe);
					}
				}
			}).addTo(masjid);
		});
	};
</script>

<br>
<br>
<br>
<br>