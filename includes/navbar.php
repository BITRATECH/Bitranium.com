<?php 
// Start a Session, You might start this somewhere else already.
@session_start();
?>

<nav id="navbar" class="navbar">
    <ul>
        <li><a href="/"><?php echo $lang['home'] ?></a></li>
        <li><a href="about.php"><?php echo $lang['about'] ?></a></li>
        <!-- <li><a href=""><?php echo $lang['services'] ?></a></li> -->
        <li><a href="/#vision"><?php echo $lang['ecosystem'] ?></a></li>
        <li><a href="/#projects"><?php echo $lang['projects'] ?></a></li>
        <li><a href="/#app"><?php echo $lang['mobile-app'] ?></a></li>
        <li><a href="contact.php"><?php echo $lang['contact'] ?></a></li>
        <li class="dropdown"><a href="#"><span><?php echo $lang['choose_lang'] ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><img style="position: relative; width: 20px; float: left; margin-top: 12px; margin-left: 8px;" src="./assets/img/flags/en.png" alt=""><a href="?lang=en"><?php echo $lang['english'] ?></a></li>
                <li><img style="position: relative; width: 20px; float: left; margin-top: 12px; margin-left: 8px;" src="./assets/img/flags/tr.png" alt=""><a href="?lang=tr"><?php echo $lang['turkish'] ?></a></li>
            </ul>
        </li>
        <!-- <li>
            <form action="" method="POST">
                <select name="language" onchange="this.form.submit();">
                    <option value="tr">Türkçe</option>
                    <option value="en">English</option>
                </select>
            </form>
        </li> -->
        <!-- <li>
            <form method="post" id="language-form">
                <label for="language-select">  </label>
                <select name="language" id="language-select">
                    <option value="en"><input type="submit" value="english" id="language-submit"></option>
                    <option value="tr"><input type="submit" value="turkish" id="language-submit"></option>
                </select>
            </form>
        </li> -->
    </ul>
</nav><!-- .navbar -->

</div>
</header><!-- End Header -->
