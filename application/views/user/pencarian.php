<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
    body {

      margin: 0;

      padding: 0;

    }

    * {

      box-sizing: border-box;

    }

    form {

      padding: 1rem;

      background: white;


      margin-top: 1rem;

      max-width: 800px;

      margin-left: auto;

      margin-right: auto;


    }

    form input {

      margin-bottom: 1rem;

      background: #fff;

      border: 1px solid #9c9c9c;

    }

    form button {

      background: lightgrey;

      padding: 0.7em;

      border: 0;

    }



    form button:hover {

      background: green;

      color: white;

    }

    form span a {

      background: lightblue;

      padding: 0.7em;

      border: 0;

      text-decoration: none;

      color: black;

      text-align: center;

    }



    form span a:hover {

      background: blue;

      color: white;

    }





    label {

      text-align: right;

      display: block;

      padding: 0.5em 1.5em 0.5em 0;

    }

    input {

      width: 100%;

      padding: 0.7em;

      margin-bottom: 0.5rem;

    }

    input:focus {

      outline: 3px solid green;

    }

    select {

      width: 100%;

      padding: 0.7em;

      margin-bottom: 0.5rem;

    }

    select:focus {

      outline: 3px solid green;

    }

    @media (min-width: 400px) {

      form {

        overflow: hidden;

      }

      label {

        float: left;

        width: 200px;

      }

      input {

        float: left;

        width: calc(100% - 200px);

      }



      select {

        float: left;

        width: calc(100% - 200px);

      }

      button {

        float: right;

        width: calc(100% - 200px);

      }
    }
  </style>
</head>

<body>
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2>CARI EKSPEDISI</h2>
            <p>Isi form dibawah untuk memudahkanmu
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="features" class="features" style="padding: 10px 0 !important;">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <form action="" method="post">
        <div class="row flex-row align-items-end" id="form-tanggal">
          <div class="col-lg-12">
            <h5 class="card-title">Jenis Pengiriman</h5>
            <select name="filter" id="filter" class="form-control">
              <option value="Reguler">Reguler</option>
              <option value="ln">Luar Negeri</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h5 class="card-title">Tujuan</h5>
            <select name="tujuan" id="tujuan" class="form-control">
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h5 class="card-title">Ekspedisi</h5>
            <select name="ekspedisi" id="ekspedisi" class="form-control">
              <option value="jne">JNE</option>
              <option value="tiki">TIKI</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <button type="submit" name="cari" class="btn btn-primary">Cari</button>
          </div>
        </div>
      </form>
    </div>
    <hr>
    <h2 style="text-align: center;" class="card-title">Peta Sebaran</h2>
    <div>
      <center>
        <div class="card">
          <div class="card-body table-responsive">
            <div id="map" style="height: 600px; width: 1000px;"></div>
          </div>
        </div>
      </center>
    </div>
  </section>
  <?php
  if (isset($_POST['cari']) != "") {
    if ($_POST['ukuran'] != "") {
      $query = "select * from agen";

      if ($_POST['ukuran'] != "") $query .= " where h='$_POST[ukuran]'";

      if ($_POST['kec'] != "") {
        if ($_POST['ukuran'] != "") $query .= " and d='$_POST[kec]'";
        else $query .= " where d='$_POST[kec]'";
      }

      if ($_POST['harga'] != "") {
        if ($_POST['kec'] != "" || $_POST['ukuran'] != "") $query .= " and d='$_POST[harga]'";
        else $query .= " where d='$_POST[harga]'";
      }

      if ($_POST['jam'] != "") {
        if ($_POST['kec'] != "" || $_POST['ukuran'] != "" || $_POST['harga'] != "") $query .= " and d='$_POST[jam]'";
        else $query .= " where d='$_POST[jam]'";
      }


      $q = $this->db->query($query);
    } else {
      $q = $this->db->query("select * from agen");
    }
  }
  ?>
  <!-- <form>

        <label>Opsi Pengiriman</label>

        <select name="opsi">

         <option value="reguler">Reguler</option>

         <option value="ln">Luar Negeri</option>

        </select>

        <label>Berat</label>

        <input name="berat" type="text">

        <button>Cari</button>

 </form> -->
  <div id="map" style="height: 400px; width: 900px;"></div>

</body>


</html>




<script>
  const fetchData = async (url) => {
    const response = await fetch(`<?= base_url() ?>${url}`);
    const data = await response.json();
    return new Promise((resolve, reject) => {
      resolve(data);
    })
  }
  const tujuan = document.getElementById("tujuan");
  document.getElementById("filter").addEventListener('change', async (e) => {
    tujuan.innerHTML = ""
    const data = await fetchData(`/user/pencarian/cari_ekspedisi/${e.target.value}`)
    if (e.target.value == "ln") {
      data.map((t) => {
        tujuan.innerHTML += `<option value="${t.id_luarnegeri}">${t.nama_negara}</option>`
      })
    } else {

    }
  })
  // var layersKecamatan = [];

  function filtering() {
    // var el = document.getElementById("sub_category");
    // var al = document.getElementById("category");
    // var filterValue = el.value && al.value;
    // document.getElementById("kecamatan").value = filterValue;
    // console.log(document.getElementById("category").value);
    // console.log(document.getElementById("sub_category").value);
    document.myForm.submit();
  }

  var map = L.map("map", {
    center: [0.5052080953233125, 101.45147219026317],
    zoom: 12,
    zoomControl: false,
    layers: [],
    fullscreenControl: true,
    fullscreenControlOptions: { // optional
      title: "Show me the fullscreen !",
      titleCancel: "Exit fullscreen mode"
    }
  });
  var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    attribution: "",
  });
  var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 12,
    attribution: ''
  }).addTo(map);
  // detect fullscreen toggling
  map.on('enterFullscreen', function() {
    if (window.console) window.console.log('enterFullscreen');
  });
  map.on('exitFullscreen', function() {
    if (window.console) window.console.log('exitFullscreen');
  });
  //untuk buat skala
  //zommba
  // var zoom_bar = new L.Control.ZoomBar({position: 'topleft'}).addTo(map);

  var baseMaps = [{
    groupName: "Base Maps",
    expanded: true,
    layers: {
      "Google Street": googleStreets,
      "Open Street": OpenStreetMap_Mapnik,
    }
  }];
  var overlays = [
    // {
    //     // groupName:"Lahan Dan Irigasi",
    //   expanded : true,
    //   layers : {
    //       "Group Lahan" : gruplahan,
    //       "Group Irigasi" : grupirigasi
    //    }
    // }
  ];


  var options = {
    contaner_width: "300px",
    group_maxHeight: "80px",
    exclusive: false,
    collapsed: true,
    position: "topright"
  }
  var control = L.Control.styledLayerControl(baseMaps, overlays, options);
  map.addControl(control);

  function featureToMarker(feature, latlng) {
    return L.marker(latlng, {
      icon: L.divIcon({
        className: 'marker-' + feature.properties.amenity,
        html: iconByName(feature.properties.amenity),
        // iconUrl: '../images/markers/' + feature.properties.amenity + '.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      })
    });
  };

  <?php
  // $q = $this->db->query("select * from agen");
  if (isset($filter)) {
    $arrayKec = array();
    foreach ($filter as $key) {
      $arrayKec[] =
        '{
		 			name: "' . $key->f . '",
		 			layer: L.marker([' . $key->e . '],{
		 				pointToLayer:featureToMarker
		 			}).addTo(map).bindPopup("<b>Nama Agen : ' . $key->a . '</b><br><br><b>Kab/Kota : ' . $key->b . '</b><br><br><b>Prov : ' . $key->c . '</b><br><br><b>Kecamatan : ' . $key->d . '</b><br><br><b>Harga : ' . $key->f . '</b><br><br><b>Jam Operasional : ' . $key->g . '</b><br><br><b>Ukuran : ' . $key->h . '</b><br><br><b>Jenis : ' . $key->i . '</b><br><br>")

		 		}';
    }
    $arrayKec = implode(',', $arrayKec);
  }
  ?>

  var overLayers = [
    <?php
    if (isset($arrayKec)) {
    ?>
      <?= $arrayKec ?>
    <?php
    }
    ?>
  ];

  var filteringOverLayers = [];
  var data_name = [];
  var data_layer = [];
  var data_id = [];

  let this_name = [];
  let this_layer = [];
  let this_id = [];

  overLayers.map((data) => {
    if (!this_name.includes(data.name)) {
      this_name.push(data.name)
      data_name.push({
        name: data.name
      })
    }
    if (!this_layer.includes(data.layer)) {
      this_layer.push(data.layer)
      data_layer.push({
        name: data.name,
        layer: data.layer
      })
    }
    if (!this_id.includes(data.id)) {
      this_id.push(data.id)
      data_id.push({
        name: data.name,
        id: data.id
      })
    }
  })

  data_name.map((data) => {
    let layer_list = data_layer.filter((this_data) => this_data.name == data.name);
    let new_layer = [];
    layer_list.map((data_layer) => {
      new_layer.push(data_layer.layer)
    })
    let id_list = data_id.filter((this_data) => this_data.name == data.name);
    let new_id = [];
    id_list.map((data_id) => {
      new_id.push(data_id.id)
    })

    filteringOverLayers.push({
      name: data.name,
      id: new_id,
      layer: new_layer,
      overlay: true
    })
  })

  console.log(filteringOverLayers)
  console.log(overLayers)

  // overLayers = filteringOverLayers

  var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
    collapsibleGroups: true,
    collapsed: false,
    autoZIndex: false
  });
  // var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);
  // panelLayers.addTo(map);
  map.addControl(panelLayers);
</script>