<?php
include "admin/koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT * From   tblog order by id_blog desc LIMIT 1");
while ($data = mysqli_fetch_array($tampil)) :
?>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <style>
      .carousel-inner img {
         width: 100%;
         height: 100%;
      }
   </style>
   </head>

   <body>

      <div id="slider1" class="carousel slide" data-ride="carousel">
         <ul class="carousel-indicators">
            <li data-target="#slider1" data-slide-to="0" class="active"></li>
            <li data-target="#slider1" data-slide-to="1"></li>
            <li data-target="#slider1" data-slide-to="2"></li>
            <li data-target="#slider1" data-slide-to="3"></li>
            <li data-target="#slider1" data-slide-to="4"></li>
         </ul>

         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="assets/images/home/1.jpg" alt="Gambar - 1" width="1280" height="700">
            </div>
            <div class="carousel-item">
               <img src="assets/images/home/2.jpg" alt="Gambar - 2" width="1280" height="700">
            </div>
            <div class="carousel-item">
               <img src="assets/images/home/3.jpg" alt="Gambar - 3" width="1280" height="700">
            </div>
            <div class="carousel-item">
               <img src="assets/images/home/4.jpg" alt="Gambar - 4" width="1280" height="700">
            </div>
            <div class="carousel-item">
               <img src="assets/images/home/5.jpg" alt="Gambar - 5" width="1280" height="700">
            </div>
         </div>
         <a class="carousel-control-prev" href="#slider1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#slider1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
         </a>
      </div>



      <!-- Ini untuk top 5 artis  -->
      <section class="tw-blog">
         <div class="container">
            <div class="row text-center">
               <div class="col section-heading ">
                  <h2>
                     <small>Artist</small>
                     Top <span>5 </span>
                  </h2>
                  <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
               </div>
            </div>

            <div id="slider2" class="carousel slide" data-ride="carousel">
               <ul class="carousel-indicators">
                  <li data-target="#slider2" data-slide-to="0" class="active"></li>
                  <li data-target="#slider2" data-slide-to="1"></li>
                  <li data-target="#slider2" data-slide-to="2"></li>
                  <li data-target="#slider2" data-slide-to="3"></li>
                  <li data-target="#slider2" data-slide-to="4"></li>
               </ul>

               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="assets/images/aktor/1.jpg" alt="Gambar - 1" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/aktor/2.jpg" alt="Gambar - 2" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/aktor/3.jpg" alt="Gambar - 3" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/aktor/4.jpg" alt="Gambar - 4" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/aktor/5.jpg" alt="Gambar - 5" width="1280" height="700">
                  </div>

               </div>

               <a class="carousel-control-prev" href="#slider2" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
               </a>
               <a class="carousel-control-next" href="#slider2" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
               </a>
      </section>



      <!-- INI untuk TOP 5 MOVIE -->
      <section class="tw-blog">
         <div class="container">
            <div class="row text-center">
               <div class="col section-heading ">
                  <h2>
                     <small>Movie</small>
                     Top <span>5 </span>
                  </h2>
                  <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
               </div>
            </div>

            <div id="slider3" class="carousel slide" data-ride="carousel">
               <ul class="carousel-indicators">
                  <li data-target="#slider3" data-slide-to="0" class="active"></li>
                  <li data-target="#slider3" data-slide-to="1"></li>
                  <li data-target="#slider3" data-slide-to="2"></li>
                  <li data-target="#slider3" data-slide-to="3"></li>
                  <li data-target="#slider3" data-slide-to="4"></li>
               </ul>

               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="assets/images/movie/1.jpg" alt="Gambar - 1" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/movie/2.jpg" alt="Gambar - 2" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/movie/3.jpg" alt="Gambar - 3" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/movie/4.jpg" alt="Gambar - 4" width="1280" height="700">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/images/movie/5.jpg" alt="Gambar - 5" width="1280" height="700">
                  </div>

               </div>

               <a class="carousel-control-prev" href="#slider3" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
               </a>
               <a class="carousel-control-next" href="#slider3" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
               </a>
      </section>




      <!-- INI UNTUK ARTIKEl -->
      <section class="tw-blog">
         <div class="container">
            <div class="row text-center">
               <div class="col section-heading ">
                  <h2>
                     <small>Article</small>
                     Latest <span>Article</span>
                  </h2>
                  <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
               </div>
            </div>

            <div class="tw-latest-post">
               <div class="latest-post-media text-center">
                  <img src="assets/images/image.png" alt="" class="img-fluid mt-3">
               </div>

               <div class="post-info">
                  <div class="post-meta">
                     <span class="post-author">
                        Posted by <a href="#"><?= $data['post'] ?></a>
                     </span>
                  </div>

                  <h3 class="post-title"><a href="article1.php?hal=view&id=<?= $data['id_blog'] ?>"><?= $data['judul'] ?></a>
                  </h3>
                  <div class="entry-content">
                     <p>
                        <?php
                        $num_char = 150;
                        $text = $data["isi"];
                        echo substr($text, 0, $num_char) . '...';
                        ?>
                     </p>
                     </p>
                  </div>
               </div>
            </div>
         </div>

      </section>
   <?php endwhile; ?>