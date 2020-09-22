<?php
include "admin/koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="HMTI Festival 2020 Cabang Web Programming.">
   <link rel="shortcut icon" href="https://hmtipolibatam.org/wp-content/uploads/2020/07/cropped-logo-1-80x80.png" type="image/x-icon" />
   <title> HMTI Festival 2020 </title>


   <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/icofont.css" />
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/owlcarousel.min.css" />
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<div class="form" id="form">
   <a class="" id="btn"></a>
</div>
<header>

   <div class="tw-head">
      <div class="container">

         <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a href="https://hmtipolibatam.org/">
               <img src="https://hmtipolibatam.org/wp-content/uploads/2020/07/cropped-logobanner.png" alt="HMTI LOGO">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="?page=home">Home</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="?page=about">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="?page=article">Article</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>



<section class="content">
   <!-- PHP  -->
   <?php
   @$page = $_GET['page'];

   if (!empty($page)) {
      switch ($page) {

            // Page Home 
         case 'home':
            include "home.php";
            break;

            // Page About 
         case 'about':
            include "about.php";
            break;

            // article
         case 'article':
            include "article.php";
            break;

            // Page Default
         default:
            include "home.php";
            break;
      }
   } else {
      include "home.php";
   }
   ?>
</section>


<!-- Footer -->
<div class="copyright">
   <div class="container text-center">
      <div class="row">
         <div class="col-md-12">
            <span>Copyright &copy; 2020 Galatia Sijabat</span>
         </div>
      </div>
   </div>
</div>
<div id="back-to-top" class="back-to-top">
   <button class="btn btn-dark" title="Back to Top">
      <i class="fa fa-angle-up"></i>
   </button>
</div>
</footer>




</body>
<script src="assets/js/jquery-2.0.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl-carousel.2.3.0.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>


</html>