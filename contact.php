<?php
require './includes/session.php';
require './includes/header.php';
require './includes/navbar.php';
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2><?php echo $lang['contact'] ?></h2>
      <ol>
        <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
        <li><?php echo $lang['contact'] ?></li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container position-relative" data-aos="fade-up">

      <div class="row gy-4 d-flex justify-content-end">

        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4><?php echo $lang['location'] ?>:</h4>
              <p><?php echo $lang['public-addr'] ?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4><?php echo $lang['email'] ?>:</h4>
              <p><?php echo $lang['support-mail'] ?></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

          <form action="requiement/mail.php" method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang['your-name'] ?>" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang['your-mail'] ?>" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $lang['subject'] ?>" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="<?php echo $lang['message'] ?>" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading"><?php echo $lang['sending'] ?></div>
              <div class="error-message"></div>
              <div class="sent-message"><?php echo $lang['message-send'] ?></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
require 'includes/footer.php';
require 'includes/scripts.php';
?>
