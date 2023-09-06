<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2a43a8">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/app/images/favicon.svg?v=2" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" integrity="sha512-okkLcBJE+U19Dpd0QdHA1wn4YY6rW3CwaxeLJT3Jmj9ZcNSbln/VYw8UdqXRIwLX7J8PmtHs0I/FPAhozFvXKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" integrity="sha512-JApjWRnfonFeGBY7t4yq8SWr1A6xVYEJgO/UMIYONxaR3C9GETKUg0LharbJncEzJF5Nmiv+Pr5QNulr81LjGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/app/styles/main.min.css">

    <?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-88GT0VJMD1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-88GT0VJMD1');
    </script>

</head>

<body <?php body_class(); ?> >

    <nav class="navMenu">
        <div class="logo" data-aos="fade-in">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/app/images/logo1.svg" class="logo1" alt="">
            </a>
        </div>
        <div class="closeNav">
            <i class="ion-android-close"></i>
        </div>
        <div class="innerProdutos">
            <ul data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="600" data-aos-delay="50">
                <li>
                    <a href="<?php bloginfo('url'); ?>/#sobre">Quem Somos</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/#solucoes">Soluções</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/#parceiros">Parceiros</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/#clientes">Clientes</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/#contato">Contato</a>
                </li>
                <li>
                    <a href="https://tote.rpe.tech/" target="_blank">Api’s para DEV</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/#midia">RPE na midia</a>
                </li>
                <!-- <li>
                    <a href="<?php bloginfo('url'); ?>/#blog">Blog</a>
                </li> -->
            </ul>
        </div>
        <div class="address">
            <div class="inner" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="600" data-aos-delay="150">
                <p><strong>RPE - Retail Payment Ecosystem ou para ficar mais simples: ecossistema de pagamentos de varejo.</strong></p>
                <p>Muito mais que uma empresa, um objetivo: potencializar negócios e dar acesso a crédito a quem mais precisa dele.</p>
                <div class="socials">
                    <a href="https://br.linkedin.com/company/rpe-retail-payment-ecosystem" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                    <!-- <a href="#"><i class="ion-ios-telephone-outline"></i></a> -->
                </div>
            </div>
        </div>
    </nav>
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 col-md-2">
                    <div class="logo" data-aos="fade-in">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/logo.svg" class="logo1" alt="">
                            <img src="<?php bloginfo('template_directory'); ?>/app/images/logo.svg" class="logo2" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-10">
                    <nav data-aos="fade-in">
                        <ul>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#sobre">Quem Somos</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#solucoes">Soluções</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#parceiros">Parceiros</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#clientes">Clientes</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#contato">Contato</a>
                            </li>
                            <li>
                                <a href="https://tote.rpe.tech/" target="_blank">Api’s para DEV</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/#midia">RPE na midia</a>
                            </li>
                            <!-- <li>
                                <a href="<?php bloginfo('url'); ?>/#blog">Blog</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
                <div class="mobilenav btopenMenu">
                    <i class="ion-navicon"></i>
                </div>
            </div>
        </div>
    </header>