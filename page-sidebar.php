<?php   get_header();

/* Template Name: Page with Sidebar */ ?>



<div id="primary-content-wrapper">

<div id="primary-content">


<div id="content-sidebar-present">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_post_thumbnail('full'); ?>
					
<h1><?php the_title(); ?></h1>

<?php the_content(); ?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>

</div> <!--content-sidebar-present  -->



<ul id="sidebar">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_sidebar', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$meta = get_post_meta(get_the_ID(), $simple_sb_wildcard_form->get_the_id(), TRUE);

$wcCount++;

echo ("<li id=\"sidebar-$wcCount\">");	

echo ("<h2><a href=\"");	

echo $meta['sb-destination-url'];

echo ("\">");	

the_title();

echo ("</a></h2><a class=\"side-img-link\" href=\"");	

echo $meta['sb-destination-url'];

echo ("\">");	

the_post_thumbnail('full', array('class' => 'sidebar-graphic'));

echo ("</a>");	

the_content();

echo ("</li>");

endwhile;

?>





</ul> <!--sidebar -->


</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->







<?php get_footer(); ?>