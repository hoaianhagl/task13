POST:

- type: post, slug: ''

  - archive.php
  - single.php

- type: topic, slug: 'topic'

  - archive-topic.php
  - single-topic.php

- co 2 cach:
  1. dung code php trong file functions.php
  2. dung plugin

<?php
function add_css()
{
    wp_register_style('reset', get_template_directory_uri().'/css/reset.css', false,'1.1','all');
    wp_register_style('style', get_template_directory_uri().'/css/style.css', false,'1.1','all');
    wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', false,'1.1','all');
    wp_register_style('slider', get_template_directory_uri().'/css/jquery.bxslider.css', false,'1.1','all');
    wp_enqueue_style( 'reset');
    wp_enqueue_style( 'style');
    wp_enqueue_style( 'font-awesome');
    wp_enqueue_style( 'slider');
}
add_action('wp_enqueue_scripts', 'add_css');

<?php while ( have_posts() ) : the_post(); ?>

    	<div class="c-access">
    		<div class="c-access__info">
    			<h3 class="c-title c-title--sub"><?php the_field('title_map'); ?></h3>
    			<p class="address"><?php the_field('add'); ?></p>
    			<p class="time"><?php the_field('time'); ?></p>
    			<br/>
    			<p>
    				<span class="tel">tel : <?php the_field('tel'); ?></span>
    				<span class="fax">fax : <?php the_field('fax'); ?></span>
    				<br/>
    				<span class="email">mail : <?php the_field('email'); ?></span>
    			</p>
    		</div>
    		<div class="c-access__img">
    			<img src="<?php echo get_stylesheet_directory_uri(); ?><?php echo get_field('image'); ?>" alt="">
    		</div>
    	</div>
    	<?php endwhile; ?>
