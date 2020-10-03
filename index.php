<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                    <span class="blue-text"><b><strong></strong>KORAN</b></span><span>TEL-U</span>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="_blank">About Us</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="https://www.instagram.com/koran_unitel/?hl=en" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card wow fadeIn">

                <!-- Content -->
                <div class="card pt-5">
                    <form style="padding-left: 100px; padding-right: 100px;" action="proses/input.php" method="POST">
                        <h1>ABSENSI</h1>
                        <!-- Material input -->
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="inputIconEx2" class="form-control" style="text-transform: uppercase;" autocomplete="off" name="nm_tamu" autofocus="" required="">
                            <label for="inputIconEx2">Nama Lengkap</label>
                        </div>
                        <!-- Group of default radios - option 1 -->
                        <label style="padding-left: 39px;">Jenis Kelamin</label>
                        <div class="custom-control custom-radio" style="padding-left: 60px;">
                          <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="jk_tamu" value="Laki-Laki">
                          <label class="custom-control-label" for="defaultGroupExample1">Laki - Laki</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio" style="padding-left: 60px;">
                          <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="jk_tamu" value="Perempuan">
                          <label class="custom-control-label" for="defaultGroupExample2">Perempuan</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-map-marker prefix"></i>
                            <input type="text" id="inputIconEx4" class="form-control" style="text-transform: uppercase;" name="tmp_lahir" autocomplete="off" required="">
                            <label for="inputIconEx2">Tempat Lahir</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-calendar prefix"></i>
                            <input type="date" id="inputIconEx2" class="form-control" name="tglla" required="">
                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                Tanggal/Bulan/Tahun
                            </small>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-building prefix"></i>
                            <input type="text" id="inputIconEx6" class="form-control" style="text-transform: uppercase;" name="asl_sklh" autocomplete="off" required="">
                            <label for="inputIconEx2">Asal Sekolah</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-graduation-cap prefix"></i>
                            <input type="text" id="inputIconEx7" class="form-control" style="text-transform: uppercase;" name="jurusan" autocomplete="off" required="">
                            <label for="inputIconEx2">Jurusan di Telkom</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-commenting prefix"></i>
                            <input type="text" id="inputIconEx8" class="form-control" name="idline" autocomplete="off" required="">
                            <label for="inputIconEx2">Id Line</label>
                        </div>
                        <center><input type="submit" name="submitdata" class="btn btn-default" style="width: 50%; height: 50px; font-weight: 1000;"></center><br>
                    </form>
                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">
                    <div class="col-lg-4 col-md-6 mb-4">

                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">

                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <!--Grid column-->

                    <!--Grid column-->

                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Pagination-->
                <!--Pagination-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>