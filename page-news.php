<?php get_header();

/* Template Name: News */ ?>






<div id="primary-content-wrapper">

<div id="primary-content">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>
	
<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
<?php endwhile; ?>




<ul class="news">

<?php 

$wcCount = 0;

$args = array( 'post_type' => 'pbk_news', 'orderby' => 'menu_order', 'order' => 'DESC', 'posts_per_page' => -1, 'taxonomy'=>'pbk_news-types', 'term' => 'Feature');

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$wcCount++;

echo ("<li class=\"nobull\" id=\"newsitem-$wcCount\">");	

the_post_thumbnail('full', array('class' => 'newspic'));

echo ("<h2>");	

the_title();

echo ("</h2>");	

the_content();

echo ("</li>");

endwhile;

?>

</ul>








</div> <!--primary-content -->

</div> <!--primary-content-wrapper -->












<?php get_footer(); ?>