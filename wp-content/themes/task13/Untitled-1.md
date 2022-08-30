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
