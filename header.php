<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ) ?>"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title><?php bloginfo( 'name' ) ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>"/>
	<?php wp_head() ?>
    <style>
        .header {
            background: #333333 url("<?php echo get_template_directory_uri() . '/img/bg.jpg'?>") no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
<!--Header-->
<header class="bg-light">
    <div class="container">
        <div class="float-md-left text-center my-1">
                <span>
                    <i class="fa fa-phone fa-rotate-90 fa-fw"></i>
                    <span>+5511947745838</span>
                </span>
            &ensp;
            <span>
                    <a href="https://www.facebook.com/soene.doeb">
                        <i class="fab fa-facebook-f fa-fw"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter fa-fw"></i>
                    </a>
                    <a href="https://www.instagram.com/sabeat32">
                        <i class="fab fa-instagram fa-fw"></i>
                    </a>
                </span>
        </div>
        <div class="register float-md-right text-center my-1">
            <a href="<?php echo get_site_url() ?>">
                <span>Pr</span>
            </a>
            <a href="<?php echo get_site_url() ?>/en">
                <span>En</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</header>
<!--Start NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-5 py-0 sticky-top border border-top-0">
    <a class="navbar-brand" href="<?php echo get_site_url() ?>">
<!--        <span class="text-danger">Doctor</span> NoteBook-->
        <img class="img" alt="logo"  src="<?php echo get_template_directory_uri() . '/img/logo-white.png' ?>"/>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php spark_position_custom_menu(); ?>
        </div>
</nav>
<!--End NavBar-->
