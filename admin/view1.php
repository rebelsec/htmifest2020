<?php

include "koneksi.php";

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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- container awal -->
    <div class="container">
        <h1 class="text-center">
            HALAMAN ADMIN
        </h1>

        <!-- Card awal -->
        <div class="card mt-5">
            <div class="card-header bg-success text-white">
                Postingan Baru
            </div>
            <div class="card-body">
                <form method="post" action="">

                    <!-- grup awal -->
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="ijudul" value="<?= @$vjudul ?>" class="form-control" placeholder="Judul Postingan" required>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="ikategori" value="<?= @$vkategori ?>" class="form-control" placeholder="Kategori Postingan" required>
                    </div>

                    <div class="form-group">
                        <label>ISI</label><br>
                        <textarea name="iisi" class="form-control" placeholder="Isi Postingan" required rows="10"><?= @$visi ?></textarea>
                    </div>

                </form>
            </div>
        </div>


    </div>

    <!-- container akhir -->


</body>
<script type="text/javascript" src=assets/js/bootstrap.min.js""> </script> </html> </h1> <!DOCTYPE html>