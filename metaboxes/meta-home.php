<div class="my_meta_control">
 
	<label>Additional Home Page Information</label>

 
<div class="my_meta_control">
 
	<label>Home Page Mission Title</label>

 
	<p>
		<?php $mb->the_field('pbk-home-title'); ?>
		<textarea rows="1" cols="50" type="text" name="<?php $mb->the_name(); ?>" /><?php $mb->the_value(); ?></textarea>
	</p>
</div>

<div class="my_meta_control">
 


<label>Home Page - Events Title</label>
<p>
    <?php 
        $content = html_entity_decode($metabox->get_the_value('pbk-home-events-title')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('pbk-home-events-title'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
    ?>   
   
</p>


<label>Home Page - Events Intro</label>
<p>
    <?php 
        $content = html_entity_decode($metabox->get_the_value('pbk-home-events-intro')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('pbk-home-events-intro'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
    ?>   
    
</p>







</div>