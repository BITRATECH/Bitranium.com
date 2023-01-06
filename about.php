<?php

require './includes/session.php';
require './includes/header.php';
require './includes/navbar.php';

?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2><?php echo $lang['about-us'] ?></h2>
      <ol>
        <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
        <li><?php echo $lang['about-us'] ?></li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4" data-aos="fade-up">
        <div class="col-lg-4">
          <img src="assets/img/logos/default.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8">
          <div class="content ps-lg-5">
            <h3><?php echo $lang['about-page-header'] ?></h3>
            <p style="text-align:justify;">
              <?php echo $lang['about-page-article'] ?>
            </p>
            <!-- <ul>
              <li><i class="bi bi-check-circle-fill"></i> <?php echo $lang['about-page-circle-1'] ?></li>
              <li><i class="bi bi-check-circle-fill"></i> <?php echo $lang['about-page-circle-2'] ?></li>
              <li><i class="bi bi-check-circle-fill"></i> <?php echo $lang['about-page-circle-3'] ?></li>
              <li><i class="bi bi-check-circle-fill"></i> <?php echo $lang['about-page-circle-4'] ?></li>
            </ul> -->
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h4><?php echo $lang['vision'] ?></h4>
            <p><?php echo $lang['vision-article1'] ?></p>
          </div>
          <div class="col">
            <h4><?php echo $lang['mission'] ?></h4>
            <p><?php echo $lang['mission-article1'] ?></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  
  <!-- ======= Why Choose Us Section ======= -->
  <!-- <section id="vision" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo $lang['vision'] ?></h2>

      </div>

      <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

        <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
        <div class="col-xl-7 slides  position-relative">

          <div class="slides-1 swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3"><?php echo $lang['itopic-h1'] ?></h3>
                  <h4 class="mb-3"><?php echo $lang['itopic-sub-h1'] ?></h4>
                  <p><?php echo $lang['itopic-article1'] ?></p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3"><?php echo $lang['itopic-h2'] ?></h3>
                  <h4 class="mb-3"><?php echo $lang['itopic-sub-h2'] ?></h4>
                  <p><?php echo $lang['itopic-article2'] ?></p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3"><?php echo $lang['itopic-h3'] ?></h3>
                  <h4 class="mb-3"><?php echo $lang['itopic-sub-h3'] ?></h4>
                  <p><?php echo $lang['itopic-article3'] ?></p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3"><?php echo $lang['itopic-h4'] ?></h3>
                  <h4 class="mb-3"><?php echo $lang['itopic-sub-h4'] ?></h4>
                  <p><?php echo $lang['itopic-article4'] ?></p>
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Why Choose Us Section -->

</main><!-- End #main -->

<?php

require 'includes/footer.php';
require 'includes/scripts.php';

?>