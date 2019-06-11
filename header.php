<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title><?php bloginfo('name') ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url')?>" />
    <?php wp_head() ?>
</head>
<body>
    <nav class="second-navbar">

    </nav>
    <!--Start NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-5">
        <a class="navbar-brand" href="#">NoteBook <span class="text-danger">Doctor</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php spark_position_custom_menu(); ?>
        </div>
    </nav>
    <!--End NavBar-->