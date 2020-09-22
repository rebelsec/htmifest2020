<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'db_htmi';
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
echo '
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/icofont.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owlcarousel.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <script src="../assets/js/jquery-2.0.0.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl-carousel.2.3.0.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/main.js"></script>
    ';
