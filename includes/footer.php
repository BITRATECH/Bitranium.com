
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="/" class="logo d-flex align-items-center">
                        <span><?php echo $lang['title'] ?></span>
                    </a>
                    <p><?php echo $lang['company-article'] ?></p>
                    <div class="social-links d-flex  mt-3">
                        <a href="https://t.me/bitraniumcoin" class="telegram" target="_blank"><i class="bi bi-telegram"></i></a>
                        <a href="https://discord.com/invite/zGbSj5mnra" class="discord" target="_blank"><i class="bi bi-discord"></i></a>
                        <a href="https://twitter.com/bitranium" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCUHxL4yMZo7_RpZCoknFZ2w" class="youtube" target="_blank"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.github.com/BITRATECH/" class="github" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4><?php echo $lang['nav'] ?></h4>
                    <ul>
                        <li><i class="bi bi-dash"></i> <a href="/"><?php echo $lang['home'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="about.php"><?php echo $lang['about'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="/#projects"><?php echo $lang['projects'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="#" data-toggle="modal" data-target="#termsModal" ><?php echo $lang['term-nav'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="#" data-toggle="modal" data-target="#cookieModal"><?php echo $lang['cookie-nav'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="#" data-toggle="modal" data-target="#priModal"><?php echo $lang['pri-policy'] ?></a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4><?php echo $lang['our-projects'] ?></h4>
                    <ul>
                        <li><i class="bi bi-dash"></i> <a href="https://bitracoin.com"><?php echo $lang['bitracoin'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="https://bugspace.io"><?php echo $lang['bugspace'] ?></a></li>
                        <li><i class="bi bi-dash"></i> <a href="/#app"><?php echo $lang['my-app'] ?></a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4><?php echo $lang['contact-us'] ?></h4>
                    <p>
                        <?php echo $lang['public-addr'] ?> <br>
                        <?php echo $lang['tax-number'] ?> <br> <br>
                        <?php echo $lang['support-mail'] ?><br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">
            <div class="copyright">
                <?php echo $lang['copy-right'] ?>
                <!-- &copy; Copyright <strong><span>Nova</span></strong>. All Rights Reserved -->
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"><?php require 'modal.php'; ?></div>
