<div class="row">
    <div class="col-lg-6">
        <div class="container-fluid">

            <form method="POST" action="<?php echo site_url('admin/dashboard/savesebaran') ?>">
                <div class="form-group">
                    <label>Nama Agen</label>
                    <input type="text" name="agen" placeholder="Masukkan Nama agen " required class="form-control">

                </div>
                <div class="form-group">
                    <label>NO.HP</label>
                    <input type="number" name="telp" placeholder="Masukkan Nomor telepon " class="form-control">

                </div>
                <div class="form-group">
                    <label>Latitude</label>
                    <input name="lat" id="Latitude" type="text" class="form-control"  placeholder="Latitude" required>

                </div>
                <div class="form-group">
                    <label>Longitude</label>
                    <input name="lng" id="Longitude" type="text" class="form-control"  placeholder="Longitude" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" id="" type="text" class="form-control" placeholder="Alamat..." required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div id="map" style="height: 400px;"></div>

    </div>
</div>

<script>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {

        curLocation = [0.5086411884223458, 101.44632234878364];
    }

    var map = L.map("map", {
        center: [0.5086411884223458, 101.44632234878364],
        zoom: 12,
        zoomControl: false,
        layers: [],
    });
    var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        // maxZoom: 12,
        attribution: ""
    }).addTo(map);
    var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 12,
        attribution: ''
    });
    var mapdark = L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}", {
            attribution: "",
            maxZoom: 18,
            minZoom: 7,
            id: "mapbox/dark-v10",
            tileSize: 512,
            zoomOffset: -1,
            accessToken: "pk.eyJ1Ijoic25vd3JleCIsImEiOiJjazhmbTd4cG8wNXN0M2ZzMDFpZGNoaWpmIn0.GgO0rwaNrkc-eqVt6DeM3g",
        });
    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: "",
    });

    var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: "",
    });
    L.control.scale({
        maxWidth: 150
    }).addTo(map);

    //base maps
    var baseMaps = [{
        groupName: "Base Maps",
        expanded: true,
        layers: {
            "Satellite": GoogleSatelliteHybrid,
            "Open Street Map Mapnik": OpenStreetMap_Mapnik,
            "Open Street Map Dark": mapdark,
            "Google Street": googleStreets,
            "Google Terrain": googleTerrain
        }
    }];


    var options = {
        contaner_width: "300px",
        group_maxHeight: "80px",
        exclusive: false,
        collapsed: true,
        position: "topright"
    }
    var control = L.Control.styledLayerControl(baseMaps, options);
    map.addControl(control);


    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function() {
        var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        map.panTo(position);
    });

    map.addLayer(marker);
</script>