<?php

include "admin/koneksi.php";

// Edit data
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

<!-- Artikel -->

<div id="banner-area" class="banner-area" style="background-image:url(assets/images/banner/banner5.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="banner-heading">
                    <h1 class="banner-title">Article</h1>
                    <ol class="breadcrumb bg-transparent">
                        <li>Home</li>
                        <li><a href="?page=article">Article</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tabel  awal -->
<div class="">
    <table class="">
        <?php $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * From   tblog order by id_blog desc");
        while ($data = mysqli_fetch_array($tampil)) :
        ?>
            <tr>
                <section id="main-container" class="main-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <article class="post tw-news-post">
                                    <div class="post-media post-image">
                                        <img src="assets\images\image.png" class="container" alt="">
                                    </div>

                                    <div class="entry-header">
                                        <div class="post-meta">
                                            <span class="post-author">
                                                Posted By <b>#<?= $data['post'] ?></b>
                                            </span>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href=""><?= $data['judul'] ?></a>
                                            <br>
                                            <h4 class="mt-3"><b>#<?= $data['kategori'] ?><b></h4>
                                        </h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>
                                            <!-- Memotong karakter yang lebih -->
                                            <?php
                                            $num_char = 200;
                                            $text = $data["isi"];
                                            echo substr($text, 0, $num_char) . '...';
                                            ?>
                                        </p>
                                    </div>
                                    <div class="post-footer">
                                        <a href="article1.php?hal=view&id=<?= $data['id_blog'] ?>" class="btn btn-dark">Read More <i class="icon icon-arrow-right"></i></a>
                                    </div>
                            </div>
                            </article>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</div>
<!-- tabel akhir-->
</div>