<?php wp_footer(); ?>



<div class="footer">

    <div class="leftClass">
        <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'item_sep' => '&middot;',

        )); ?>
    </div> <!-- end leftClass -->

    <div class="rightClass buttonUp" id="buttonUp">
        <a href="#top"><i class="fas fa-chevron-up" style="color: white"></i></a>
    </div><!-- end rightClass -->
    <div style="clear:both;"></div><!-- clear both left and right -->
</div><!-- end fullWidth -->


</body>

</html>