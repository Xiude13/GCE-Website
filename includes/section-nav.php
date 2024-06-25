<header class="header">
    <div class="overlay has-fade"></div>

    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
    <a href="/" class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
    </a>

    <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
        <span></span>
        <span></span>
        <span></span>
    </a>

    <div class="header__links hide-for-mobile">
        <a href="<?php echo site_url('/catalogue'); ?>">Catalogue</a><a href="<?php echo site_url('/'); ?>">Home</a><a href="#about">About</a><a href="#services">Services</a
        ><a href="#contact">Contact</a>
    </div>

    </nav>

    <div class="header__menu has-fade">
    <a href="<?php echo site_url('/catalogue'); ?>">Catalogue</a>
    <a href="<?php echo site_url('/'); ?>">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
    </div>
</header>