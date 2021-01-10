<html>

<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class(); ?>>
    <a name="top"></a>
    <header class="sticky-top">

        <nav class="navbar navbar-expand-lg navbar-dark" role="navigation">

            <?php wp_nav_menu(array(
                'theme_location' => 'top-left-menu',
                'container_class' => 'navigation'
            )); ?>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                <form class="form-inline my-2 my-lg-0">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top-right-menu',
                        'container_class' => 'navigation'
                    )); ?>
                </form>
            </div>



        </nav><!-- .site-navigation -->

    </header>