<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <!-- SEO Meta Tags -->
    <!-- <meta name="description" content="Your description">
    <meta name="author" content="Your name"> -->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <!-- <meta property="og:site_name" content="" /> website name -->
    <!-- <meta property="og:site" content="" /> website link -->
    <!-- <meta property="og:title" content="" /> title shown in the actual shared post -->
    <!-- <meta property="og:description" content="" /> description shown in the actual shared post -->
    <!-- <meta property="og:image" content="" /> image link, make sure it's jpg -->
    <!-- <meta property="og:url" content="" /> where do you want your post to link to -->
    <!-- <meta name="twitter:card" content="summary_large_image"> to have large image post format in Twitter -->

    <!-- Webpage Title -->


    <!-- Styles -->
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>


    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/animate.min.css" rel="stylesheet">


    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url(); ?>assets/imagenew/logo-url.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">



            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav  navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-service">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Our Gallery</a>
                    </li>
                </ul>
                <!-- <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.html">Log in</a>
                    </span> -->


            </div>
            <a class="navbar-brand ms-auto logo-image" href="<?= base_url(); ?>"><img
                    src="https://admin103.sehat-refleksi.com/upload/<?= $website->image; ?>" alt="alternative"></a>
        </div>
    </nav>



    <!-- Header -->
    <div class="bg-green-gradasi">
        <header id="home" class="header py-5 d-flex align-items-center">
            <img class="img-fluid img-hero" src="<?= base_url(); ?>assets/imagenew/top.png" alt="alternative">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large" data-aos="fade-down" data-aos-duration="2000">NIKMATI PIJATAN TERBAIK
                            </h1>
                            <p class="p-large" data-aos="fade-up" data-aos-duration="2000"><?= $homeweb->deskripsi; ?>
                            </p>
                            <!-- <a class="btn-solid-lg" href="sign-up.html">Sign up for free</a> -->
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->

            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <div class="sehat-refleksi">
            <img src="<?= base_url(); ?>assets/imagenew/asdasd.png" class="img-fluid img-refleksi" alt="">
            <div class="container refleksi-container">
                <div class="row position-relative">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-0">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="2000">
                        <h2 class="h2-heading"><?= $website->name; ?></h2>
                        <p><?= $website->description; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end of header -->