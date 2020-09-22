<!-- Cek Password  -->
<?php
session_start();
include "koneksi.php";
@$username = $_POST["username"];
@$p = md5($_POST["password"]);

$sql = "select * from user where username='" . $username . "' and password='" . $p . "' limit 1";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);

if ($jumlah > 0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["id_user"] = $row["id_user"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["nama"] = $row["nama"];
    $_SESSION["email"] = $row["email"];

    header("Location:index.php?page=home",);
} else {
    echo '
   <div class="container text-center mt-5">
    <h1 size="20px" ">Password Anda Salah</h1><br>
    <h3><a href=" index.php?page=login ">Coba lagi</a></h3>
</div>';
}
?>