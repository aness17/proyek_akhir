<!DOCTYPE html>
<html lang="en">

<head>
<base href="<?= base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GIS-Ekspedisi</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- Leaflet Draw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="plugin/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <link rel="stylesheet" href="plugin/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <script type="text/javascript" src="src/L.Control.ZoomBar.js"></script>
    <script type="text/javascript" src="plugin/dist/Leaflet.Coordinates-0.1.5.min.js"></script>
    <link rel="stylesheet" href="plugin/dist/Leaflet.Coordinates-0.1.5.css" />
    <link rel="stylesheet" href="plugin/dist/L.Control.Locate.min.css" />
    <script src="plugin/src/L.Control.Locate.js"></script>
    <script src="plugin/src/leaflet-compass.js"></script>
    <script src='plugin/Leaflet.LocationShare.js'></script>
    <link rel="stylesheet" href="plugin/src/leaflet-compass.css" />
    <script src="plugin/L.Control.Window.js"></script>
    <link rel="stylesheet" href="plugin/L.Control.Window.css" />
    <script src="plugin/dist/Control.FullScreen.js"></script>
    <link rel="stylesheet" href="plugin/dist/Control.FullScreen.css" />
    <script src="plugin/src/Control.GlobeMiniMap.js"></script>
    <link rel="stylesheet" href="plugin/dist/Control.MiniMap.min.css" />
    <script src="plugin/dist/Control.MiniMap.min.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" type="text/css" href="src/leaflet.css"/> -->
    <link rel="stylesheet" type="text/css" href="src/L.Control.ZoomBar.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="plugin/angular.min.js"></script>
    <link rel="stylesheet" href="plugin/css/styledLayerControl.css" />
    <script src="plugin/src/styledLayerControl.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://maps.google.com/maps/api/js?v=3.2&sensor=false&key=AIzaSyBXTXgQ7wZPndgKZilAsFVZjT5YWMr9WFs"></script>

    <script src="https://raruto.github.io/cdn/leaflet-google/0.0.3/leaflet-google.js"></script>
</head>