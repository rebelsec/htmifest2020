<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HMTI Festival 2020 Cabang Web Programming.">
    <link rel="shortcut icon" href="https://hmtipolibatam.org/wp-content/uploads/2020/07/cropped-logo-1-80x80.png" type="image/x-icon" />
    <title> HMTI Festival 2020 </title>


</head>

<div class="form" id="form">
    <a class="" id="btn"></a>
</div>
<header>
    <div class="tw-head">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a href="https://hmtipolibatam.org/">
                    <img src="https://hmtipolibatam.org/wp-content/uploads/2020/07/cropped-logobanner.png" alt="seobin">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=home">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="?page=login">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="?page=logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header> <br><br><br><br><br><br>



<div class="container mt-5    ">
    <?php
    @$page = $_GET['page'];

    if (!empty($page)) {
        switch ($page) {

                // Page Home Admin
            case 'home':
                include "admin.php";
                break;
            case 'logout':
                include "logout.php";
                break;
            case 'login':
                include "login.php";
                break;


                // Page Default
            default:
                include "admin.php";
                break;
        }
    } else {
        include "admin.php";
    }
    ?>

</div>

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

</html>