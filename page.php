<?php get_header(); ?>



<div id="primary-content-wrapper">

<div id="primary-content">





<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_post_thumbnail('full', array('class' => 'single-pic')); ?>
					
<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php $terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'pbk_event-types', '', ', ', '' ) );?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>



</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->







<?php get_footer(); ?>