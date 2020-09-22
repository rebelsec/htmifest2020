<?php

include "koneksi.php";

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
        <!-- Card akhir-->

        <!-- tabel  awal -->
        <div class="card mt-5">
            <div class="card-header bg-primary text-white">
                ISI POSTINGAN
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>

                    <?php $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * From   tblog order by id_blog desc");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr>
                            <td><?= $no++;  ?></td>
                            <td><?= $data['judul'] ?> </td>
                            <td><?= $data['kategori'] ?></td>
                            <td><?= $data['isi'] ?></td>
                            <td><a href="view1.php?hal=view&id=<?= $data['id_blog'] ?>" class="btn btn-success">Update</a>
                                <a href="view1.php?hal=hapus&id=<?= $data['id_blog'] ?>" onclick="return confirm(' Ingin menghapus datanya?')" class="btn btn-danger">Hapus</a></td>

                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <!-- tabel akhir-->

    </div>

    <!-- container akhir -->


</body>
<script type="text/javascript" src=assets/js/bootstrap.min.js""> </script> </html> </h1> <!DOCTYPE html>