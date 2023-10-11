<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case studies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/theme.css">
    <link rel="stylesheet" href="./style/style.css"> -->
    <?php
	
        wp_head();
    ?>

</head> 

<body>
    <!-- Header section -->
    <div class="hero">
    <section class="site-padding">
        <nav class="navbar">
            <div class="logo">
                <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img src="<?php echo $logo[0]; ?>" alt="logo">
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        <div class="nav-menu">
            <ul class="menu-list">
                <li class="font-menu">Product <i><img src="http://localhost/wp-content/uploads/2023/10/arrow_down.svg" alt="arrow_down"></i></li>
                <li class="font-menu">Solutions <i><img src="http://localhost/wp-content/uploads/2023/10/arrow_down.svg" alt="arrow_down"></i></li>
                <li class="font-menu">Resources <i><img src="http://localhost/wp-content/uploads/2023/10/arrow_down.svg" alt="arrow_down"></i></li>
                <li class="font-menu">Pricing</li>
                <li class="font-menu">Company <i><img src="http://localhost/wp-content/uploads/2023/10/arrow_down.svg" alt="arrow_down"></i></li>
                <li class="font-menu">Free Setup</li>
            </ul>
            <div class="nav-action">
                <a href="#" class="btn btn-blank font-menu">Login</a>
                <a href="#" class="btn btn-primary-inner-blank font-btn-secondary font-uppercase center-no-p">Book a demo</a>
                <a href="#" class="btn btn-primary font-btn-primary font-uppercase">free signup</a>
            </div>
        </div>
    </nav>
        </section>
            <section class="site-padding">
                    <div class="hero-section">
                        <h1 class="font-heading p-10"> <?php the_title(); ?></h1>
                        <p class="font-heading-secondary p-10">Discover how companies use Databox to grow their performance.</p>
                        <div class="hero-action">
                            <a href="#" class="btn btn-link btn-primary font-btn-primary btn-p-31">View all stories</a>
                        </div>
                    </div>
                    <div class="hero-companies">
                        <img src="http://localhost/wp-content/uploads/2023/10/EBay_logo-2.svg" alt="Working with company Ebay"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/pwc.svg" alt="Working with company Pwc"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/Samsonite_Logo-1.svg" alt="Working with company Samsonite"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/sumup.svg" alt="Working with company sumup"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/SmartBug.svg" alt="Working with company SmartBug"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/taost.svg" alt="Working with company toast"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/Valuetainment-logo-1-1.svg" alt="Working with company VALUENTAINMENT"/>
                        <img src="http://localhost/wp-content/uploads/2023/10/synctera.svg" alt="Working with company synctera"/>
                    </div>
            </section>
    </div>