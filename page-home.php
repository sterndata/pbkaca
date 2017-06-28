<?php   get_header();

/* Template Name: Home */ ?>






<div id="primary-content-wrapper">

<div id="primary-content">




<div id="home-splash">

<div class="slideshow" data-transition="crossfade" data-loop="true" >

<ul class="carousel">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_home_slide', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();


$wcCount++;

echo ("<li class=\"slide\">");	


the_post_thumbnail('full', array('class' => 'wcard'));

the_content();

echo ("</li>");

endwhile;

?>

</ul>

</div> <!-- slideshow-->


</div> <!-- home-splash-->














<div id="home-mission">
<?php 

$args = array( 'post_type' => 'pbk_home_extras', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_mb_events_form->get_the_id(), TRUE);

echo ("<h1>");

echo $meta['pbk-home-title'];

echo ("</h1>");

endwhile;

?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>


</div> <!-- home-mission-->

</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->











<div id="secondary-content-wrapper">

<div id="secondary-content">

<div id="event-feed">

<?php 

$args = array( 'post_type' => 'pbk_home_extras', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_mb_events_form->get_the_id(), TRUE);

echo ("<h2>");

echo ("<a href=\"/?page_id=115\">");	

echo $meta['pbk-home-events-title'];

echo ("</a></h2>");

echo ("<p>");

echo $meta['pbk-home-events-intro'];

echo ("</p>");


endwhile;

?>

<ul class="events">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_events', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1, 'taxonomy'=>'pbk_event-types', 'term' => 'Featured');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_mb_eventspage_form->get_the_id(), TRUE);

$wcCount++;

echo ("<li id=\"wildcard-$wcCount\"><h3>");	

the_title();

echo ("</h3><em>");	

echo $meta['events-month'];
echo (" ");	
echo $meta['events-day'];

echo ("</em><p>");	

echo $meta['events-intro'];

echo ("</em><p>");	

echo ("<a href=\"/?page_id=115#");	
echo the_id();
echo ("\">View Details</a>");	


echo ("</li>");



endwhile;

?>

</ul>

<a id="home-event-feed" href="/?page_id=115">View Upcoming Events</a>


</div> <!--event-feed  -->


<div id="secondary-wildcard">

<?php 

$args = array( 'post_type' => 'pbk_wildcard', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1, 'taxonomy'=>'pbk_wildcard-types', 'term' => 'Secondary');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_mb_wildcard_form->get_the_id(), TRUE);

echo ("<div><h2><a href=\"");	

echo $meta['wc-destination-url'];

echo ("\">");	

the_title();

echo ("</a></h2>");	

the_post_thumbnail('full', array('class' => 'pbk_wildcard-secondary'));

the_content();

echo ("</div>");

endwhile;

?>

</div> <!-- secondary-wildcard -->



</div> <!-- secondary-content -->

</div> <!-- secondary-content-wrapper -->




<div id="tertiary-content-wrapper">

<div id="tertiary-content">

<ul id="tertiary-wildcards">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_wildcard', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1, 'taxonomy'=>'pbk_wildcard-types', 'term' => 'Tertiary');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_mb_wildcard_form->get_the_id(), TRUE);

$wcCount++;

echo ("<li id=\"wildcard-$wcCount\"><h3><a href=\"");	

echo $meta['wc-destination-url'];

echo ("\">");	

the_title();

echo ("</a></h3>");	

the_post_thumbnail('full', array('class' => 'tertiary-wildcard'));

the_content();

echo ("</li>");

endwhile;

?>

</ul>


</div> <!-- tertiary-content -->

</div> <!-- tertiary-content-wrapper -->



<?php get_footer(); ?>