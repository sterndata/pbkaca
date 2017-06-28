<div id="footer-wrapper">


<div id="utility-nav">

<h4>Quicklinks</h4>

<?php wp_nav_menu( array('theme_location' => 'footer_one' )); ?>

<?php wp_nav_menu( array('theme_location' => 'footer_two' )); ?>


</div> <!--utility-nav -->



<div id="footer-content">

<h4>Connect With Us</h4>

<?php wp_reset_query(); ?>

<?php 

$args = array( 'post_type' => 'pbk_footer', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

the_content();

endwhile;

?>




<div id="copyright">

©<?php	
	echo gmDate("Y "); 
    $options = get_option('sample_theme_options');
    echo $options['copyright-statement'];
?>


<h3><a href="http://www.swartwerk.com/custom-wordpress-theme-development-chicago.php">Custom WordPress Themes Designs by Swartwerk Media Design, Inc. - Chicago</a><br>Updated by <a href="https://www.sterndata.com">Stern Data Solutions</a></h3>


</div> <!-- copyright -->


	
</div> <!-- contact-form-->		

</div> <!-- footer-content -->



</div> <!-- footer -->

<?php wp_footer(); ?>

</body>

</html>
