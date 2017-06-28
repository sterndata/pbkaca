<div class="my_meta_control">
 
	<label>Event Month</label>

 
	<p>
		<?php $mb->the_field('events-month'); ?>
		<textarea rows="1" cols="50" type="text" name="<?php $mb->the_name(); ?>" /><?php $mb->the_value(); ?></textarea>
	</p>



 
	<label>Event Day</label>

 
	<p>
		<?php $mb->the_field('events-day'); ?>
		<textarea rows="1" cols="50" type="text" name="<?php $mb->the_name(); ?>" /><?php $mb->the_value(); ?></textarea>
	</p>



	


<label>Event Home Page Intro </label>
<p>
    <?php 
        $content = html_entity_decode($metabox->get_the_value('events-intro')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('events-intro'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
    ?>   
   
</p>



</div>