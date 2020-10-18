<html>

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="sticky-top">

        <?php wp_nav_menu(array(
            'theme-location' => 'top-menu',
            'container_class' => 'navigation'
        )); ?>


    </header>