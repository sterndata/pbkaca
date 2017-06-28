<?php   get_header();

/* Template Name: Past Events */ ?>






<div id="primary-content-wrapper">

<div id="primary-content">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>










<ul class="events">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_events', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1, 'taxonomy'=>'pbk_event-types', 'term' => 'Past');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_mb_eventspage_form->get_the_id(), TRUE);

$wcCount++;

echo ("<li id=\"upcoming-event-$wcCount\">");	

the_post_thumbnail('full', array('class' => 'events-pic'));

echo ("<div class=\"event-content\"><h3>");	

the_title();

echo ("</h3><span>");	

echo $meta['events-month'];
echo (" ");	
echo $meta['events-day'];

echo ("</span>");	

the_content();

echo ("</div></li>");

endwhile;

?>

</ul>




</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->












<?php get_footer(); ?>