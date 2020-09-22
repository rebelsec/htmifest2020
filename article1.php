<?php

include "admin/koneksi.php";

// View Data nya
if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "view") {
        $tampil = mysqli_query($koneksi, "SELECT * From tblog WHERE id_blog = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
            $vjudul = $data['judul'];
            $vkategori = $data['kategori'];
            $visi = $data['isi'];
        }
    }
}

?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="post-content post-single">
                    <div class="post-media post-image">
                        <img src="assets/images/image.png" class="img-fluid" alt="Gambar">
                    </div>

                    <div class="post-body">

                        <div class="entry-header">
                            <div class="post-meta">
                                <span class="post-meta-date">
                                    <i class="fa fa-clock-o"></i>
                                    <span>
                                        Posted By <b><?= $data['post'] ?>
                                    </span>
                            </div>
                            <h1 class="text-primary  entry-title">
                                <!-- JUDUL ARTIKEL --><b><?= $data['judul'] ?></b>
                            </h1>
                        </div>

                        <div class="entry-content">
                            <p><?= $data['isi'] ?></p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="title-normal">Leave a comment</h3>

                    <div id="disqus_thread"></div>
                    <script>
                        (function() {
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://https-rebelsec-blogspot-com.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>
            </div>


            <!-- CSS -->
            <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
            <link rel="stylesheet" href="assets/css/animate.css">
            <link rel="stylesheet" href="assets/css/icofont.css" />
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owlcarousel.min.css" />
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">


            <script src="assets/js/jquery-2.0.0.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/owl-carousel.2.3.0.min.js"></script>
            <script src="assets/js/waypoints.min.js"></script>
            <script src="assets/js/jquery.counterup.min.js"></script>
            <script src="assets/js/wow.min.js"></script>
            <script src="assets/js/main.js"></script>