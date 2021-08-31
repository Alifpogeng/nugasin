<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/anu.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/card.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/footer.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/news.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
        .checked {
            color: #0275d8;
        }

        .fa-whatsapp {
            position: fixed;
            z-index: 9999;
            font-size: 48px;
            color: white;
            background-color: #25D366;
            border-radius: 50%;
            padding: 5px;
        }

        .waclas {
            position: fixed;
            z-index: 9999;
            top: 90%;
        }

        @media (max-width: 575.98px) {
            .waclas {
                position: fixed;
                z-index: 9999;
                top: 90%;
                left: 70%;
            }
        }
    </style>
</head>

<body class="">
    <!-- Chat Whatsapp -->
    <!-- <div class="container d-flex justify-content-left justify-content-md-end claswa">
        <div class="row">
            <div class="col-12 waclas">
                <a href="https://api.whatsapp.com/send?phone=08222222222"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </div> -->
    <!-- End Whatshapp -->

    <div id="myanvbar" class="relative-top">

        <div class="container d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded mt-5">
                <a class="navbar-brand" href="#"><img class="logoku" src="assets/img/logo.png" alt="nugasin Logo" loading="lazy" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center">
                        <a href="login.html" class="button button-border button-circle button-dark">
                            <div class="d-flex align-items-center">Masuk <i class="fas fa-sign-in-alt mr-0 ml-1"></i></div>
                        </a>
                        <a href="register.html" class="button button-circle button-primary">
                            <div class="d-flex align-items-center"><i class="fas fa-users mr-1"></i> Daftar</div>
                        </a>
                    </div>

                </div>
            </nav>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="container-text">
                        <div class="container">
                            <div class="row">

                                <div class="order-1 col-md-6 col-lg-6 align-items-start">
                                    <h1 class="font-weight-bold">Cashback 50%</h1>
                                    <h3>Hingga 31 Juli 2021</h3>
                                    <br>
                                    <p class="mytext">Para pemilik bisnis menggunakan Nugasin.com untuk mewujudkan ide mereka.</p>
                                </div>

                                <div class="order-4 col-md-4 col-lg-4 align-items-end" style="width: 100%;">
                                    <img class="vector" src="assets/img/sliders/9814.png">
                                </div>

                                <div class="order-12 col-md-2 col-lg-2 align-items-center">
                                    <!-- start count stats -->

                                    <section id="counter-stats" class="pos wow" data-wow-duration="1.4s">
                                        <div class="row displayq">
                                            <div class="col jark">
                                                <div class="counting stats" data-count="10">0</div>
                                                <p class="mytexta">Pekerjaan diposting</p>
                                            </div>

                                            <div class="col jark">
                                                <div class="counting stats" data-count="173">0</div>
                                                <p>Freelancer</p>
                                            </div>

                                            <div class="col jark">
                                                <div class="counting stats" data-count="10">0</div>
                                                <p>Tugas diposting</p>
                                            </div>
                                        </div>

                                    </section>

                                    <!-- end cont stats -->
                                </div>
                            </div>
                        </div>

                    </div>


                    <img class="d-block w-100 h-100" src="<?= base_url() ?>assets/img/sliders/imagq.png" alt="First slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="align-self-end">
            <div class="wrap">
                <div class="bordercontain">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>