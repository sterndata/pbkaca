<?php get_header();

/* Template Name: Events */ ?>






<div id="primary-content-wrapper">

<div id="primary-content">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>


</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->












<?php get_footer(); ?>