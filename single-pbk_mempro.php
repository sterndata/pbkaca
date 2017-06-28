<?php get_header();

/* Template Name: Main Profile */ ?>






<div id="primary-content-wrapper">

<div id="primary-content">


<ul class="profiles">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_mempro', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$wcCount++;

echo ("<li id=\"wildcard-$wcCount\"><h2>");	

the_post_thumbnail('full', array('class' => 'mempro-pic'));


the_title();

echo ("</h2>");	

the_content();



endwhile;

?>

</ul>








</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->












<?php get_footer(); ?>