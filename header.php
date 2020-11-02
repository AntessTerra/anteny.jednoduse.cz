<html>

<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>

<body <?php body_class(); ?>>
    <a name="top"></a>
    <header class="sticky-top">

        <nav class="navbar navbar-default" role="navigation">

            <div class="fullWidth">

                <div class="leftClass">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top-left-menu',
                        'container_class' => 'navigation'
                    )); ?>
                </div> <!-- end leftClass -->

                <div class="rightClass">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top-right-menu',
                        'container_class' => 'navigation'
                    )); ?>
                </div><!-- end rightClass -->
                <div style="clear:both;"></div><!-- clear both left and right -->
            </div><!-- end fullWidth -->

        </nav><!-- .site-navigation -->

    </header>