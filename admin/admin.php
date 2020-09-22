<?php

// Pengecekan Login
session_start();

if (!isset($_SESSION["username"])) {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu :');
            document.location='index.php?page=login';

    </script>";
    exit;
}
$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];

// akhir pengecekan



include "koneksi.php";
// Fungsi Simpan
if (isset($_POST['bsubmit'])) {

    //  edit
    if (@$_GET['hal'] == "edit") {
        @$edit = mysqli_query($koneksi, "UPDATE  tblog set 
                                                                judul = '$_POST[ijudul]',
                                                                kategori = '$_POST[ikategori]',
                                                                isi = '$_POST[iisi]',
                                                                post = '$_POST[ipost]'
                                                                where id_blog = '$_GET[id]'
    ");

        if ($edit) {
            echo "<script>
            alert('Update Sudah Tersimpan :');
            document.location='index.php?page=home';

    </script>";
        } else {
            echo "<script>
            alert('Update  Gagal Tersimpan :');
            document.location='index.php?page=home';
    </script>";
        }
    } else {
        @$save = mysqli_query($koneksi, "INSERT INTO   tblog (judul, kategori, isi, post) 
    VALUES ('$_POST[ijudul]', '$_POST[ikategori]',  '$_POST[iisi]', '$_POST[ipost]')

    ");

        if ($save) {
            echo "<script>
            alert('Data Sudah Tersimpan :');
            document.location='index.php?page=home';

    </script>";
        } else {
            echo "<script>
            alert('Data Gagal Tersimpan :');
            document.location='index.php?page=home';
    </script>";
        }
    }
}


// Edit data
if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "edit") {
        $tampil = mysqli_query($koneksi, "SELECT * From tblog WHERE id_blog = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
            $vjudul = $data['judul'];
            $vkategori = $data['kategori'];
            $visi = $data['isi'];
            $vpost = $data['post'];
        }
    } elseif ($_GET['hal'] == "hapus") {
        // Hapus Data
        $hapus = mysqli_query($koneksi, "DELETE From tblog where id_blog= '$_GET[id]' ");
        echo "<script>
            alert('Data Terhapus :');
            document.location='index.php?page=home';
    </script>";
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
                <form method="post" action="" enctype="multipart/form-data ">

                    <!-- grup awal -->
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="ijudul" value="<?= @$vjudul ?>" class="form-control" placeholder="Judul Postingan" required>
                    </div>

                    <div class="form-group">
                        <label>Pemublikasi</label>
                        <input type="text" name="ipost" value="<?= @$vpost ?>" class="form-control" placeholder="Pemublikasi" required>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="ikategori" value="<?= @$vkategori ?>" class="form-control" placeholder="Kategori Postingan" required>
                    </div>


                    <div class="form-group">
                        <label>ISI</label><br>
                        <textarea name="iisi" class="form-control" placeholder="Isi Postingan" required rows="10"><?= @$visi ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success" name="bsubmit">Submit</button>
                    <button type="reset" class="btn btn-danger" name="breset">Reset</button>
                    <!-- grup akhir -->

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
                            <td><?php
                                $num_char = 100;
                                $text = $data["isi"];
                                echo substr($text, 0, $num_char) . '...';
                                ?></td>
                            <td><a href="admin.php?hal=edit&id=<?= $data['id_blog'] ?>" class="btn btn-success">Update</a>
                                <a href="admin.php?hal=hapus&id=<?= $data['id_blog'] ?>" onclick="return confirm(' Ingin menghapus datanya?')" class="btn btn-danger">Hapus</a></td>

                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <!-- tabel akhir-->

    </div>


</body>
<script type="text/javascript" src=assets/js/bootstrap.min.js""> </script> </html>