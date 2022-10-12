<div class="detail-1">
    <img class="img-fluid dr" src="<?= base_url(); ?>assets/imagenew/daun-1.png" alt="">
    <img class="img-fluid dl" src="<?= base_url(); ?>assets/imagenew/daun-2.png" alt="">
    <div class="container detail-container">
        <div class="heading text-uppercase" data-aos="fade-up" data-aos-duration="2000">
            <h2>KENAPA HARUS DISINI?</h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($fitur as $fitur) { ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="detail-cards text-center">
                    <div class="detail-img">
                        <img class="img-fluid"
                            src="https://admin103.sehat-refleksi.com/upload/fitur/<?= $fitur->image; ?>" alt="">
                    </div>
                    <div class="detail-text mt-4">
                        <p><?= $fitur->title; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>


<!-- Details 2 -->
<div class="detail-2" id="our-service">
    <img class="img-fluid bg-detail" src="<?= base_url(); ?>assets/imagenew/detail-2 img.png" alt="">
    <div class="container detail-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading">
                    <h2 data-aos="fade-down" data-aos-duration="2000">PELAYANAN KAMI</h2>
                    <h4 data-aos="fade-right" data-aos-duration="2000"><?= $pelayanan->deskripsi; ?></h4>
                    <h1 data-aos="fade-up" data-aos-duration="2000"><?= $pelayanan->price; ?>K</h1>
                    <div class="btn-green-dark mt-3" data-aos="zoom-in" data-aos-duration="2000">
                        <a href="https://wa.wizard.id/2bfa2f" class="fs-4" target="_blank">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end of details 2 -->

<div class="detail-3">
    <img class="img-fluid dl" src="<?= base_url(); ?>assets/imagenew/daun-3.png" alt="">
    <img class="img-fluid dr" src="<?= base_url(); ?>assets/imagenew/daun-4.png" alt="">
    <div class="container detail-all-container">
        <div class="heading-text text-green text-uppercase" data-aos="fade-up" data-aos-duration="2000">
            <h2>PIJAT + BEKAM</h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($pijat_bekam as $bekam) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="detail-card text-center">
                    <div class="detail-img">
                        <img class="img-fluid"
                            src="https://admin103.sehat-refleksi.com/upload/pijat/<?= $bekam->image; ?>" alt="">
                    </div>
                    <div class="detail-text mt-4 text-green">
                        <p><?= $bekam->deskripsi; ?></p>
                        <h2><?= $bekam->price; ?>K</h2>
                        <div class="btn-green-light mt-3">
                            <a href="https://wa.wizard.id/2bfa2f" target="_blank">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>

<div class="detail-4">

    <div class="container detail-all-container">
        <div class="heading-text text-white text-uppercase" data-aos="fade-up" data-aos-duration="2000">
            <h2>PIJAT LULUR</h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($pijat_lulur as $lulur) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="detail-card text-center">
                    <div class="detail-img">
                        <img class="img-fluid"
                            src="https://admin103.sehat-refleksi.com/upload/pijat/<?= $lulur->image; ?>" alt="">
                    </div>
                    <div class="detail-text mt-4 text-green">
                        <p><?= $lulur->deskripsi; ?></p>
                        <h2><?= $lulur->price; ?>K</h2>
                        <div class="btn-green-dark mt-3">
                            <a href="https://wa.wizard.id/2bfa2f" target="_blank">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="detail-5">
    <img class="img-fluid dl" src="<?= base_url(); ?>assets/imagenew/daun-5.png" alt="">
    <img class="img-fluid dr" src="<?= base_url(); ?>assets/imagenew/daun-6.png" alt="">
    <div class="container detail-all-container">
        <div class="heading-text text-green" data-aos="fade-up" data-aos-duration="2000">
            <h2>PIJAT PANGGILAN</h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($pijat_panggilan as $panggilan) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="detail-card text-center">
                    <div class="detail-img">
                        <img class="img-fluid"
                            src="https://admin103.sehat-refleksi.com/upload/pijat/<?= $panggilan->image; ?>" alt="">
                    </div>
                    <div class="detail-text mt-4 text-green">
                        <p><?= $panggilan->deskripsi; ?></p>
                        <h2><?= $panggilan->price; ?>K</h2>
                        <div class="btn-green-light mt-3">
                            <a href="https://wa.wizard.id/2bfa2f" target="_blank">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<!-- Testimonials -->
<div class="testimonial" id="testimonial">
    <div class="container testi-container">
        <div class="heading text-uppercase" data-aos="fade-up" data-aos-duration="2000">
            <h2>TESTIMONIAL</h2>
        </div>
        <div class="row px-5 mt-5">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                <div class="testi-img">
                    <img class="img-fluid" src="<?= base_url(); ?>assets/imagenew/testi-img-side.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 mt-4">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider" data-aos="fade-up" data-aos-duration="2000">
                        <div class="swiper-wrapper">
                            <?php foreach ($testimoni as $testi) { ?>
                            <div class="swiper-slide">
                                <div class="card-slide">
                                    <img class="img-fluid card-image"
                                        src="https://admin103.sehat-refleksi.com/upload/testimoni/<?= $testi->image; ?>"
                                        alt="alternative">
                                    <div class="card-testi mt-3">
                                        <h3 class="testimonial-author"><?= $testi->nama; ?></h3>
                                        <p class="testimonial-text"><?= $testi->testi; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="gallery" id="gallery">
    <div class="container">
        <div class="heading text-uppercase text-green" data-aos="fade-up" data-aos-duration="2000">
            <h2>OUR GALLERY</h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($gallery as $gallery) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="gallery-img">
                    <img class="img-fluid"
                        src="https://admin103.sehat-refleksi.com/upload/gallery/<?= $gallery->image; ?>"
                        title="<?= $gallery->name; ?>" alt="">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>