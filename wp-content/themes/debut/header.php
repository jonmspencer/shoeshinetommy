<!DOCTYPE html>
<html>
  <head itemscope itemtype="http://schema.org/WebSite">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <link rel="canonical" href="<?php echo home_url(); ?>" itemprop="url" />
    <title itemprop='name'><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(get_post_type($post)); ?>>
    <div class="curtain" data-structure="curtain"></div>
    <?php get_template_part('shared/svg-sprite'); ?>
    <video autoplay id="video_background" preload="auto" loop="loop" muted="muted">
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/SSTWebsite.mp4" type="video/mp4">
      <!-- <source src="//s3.amazonaws.com/production.reserve123/videos/san-francisco.mp4" type="video/mp4"> -->
      <!-- <source src="//s3.amazonaws.com/production.reserve123/videos/san-francisco.webmhd.webm" type="video/webm"/>
      <source src="//s3.amazonaws.com/production.reserve123/videos/san-francisco.oggtheora.ogv" type="video/ogg"/> -->
    </video>
    <?php
      // Header structure shouldn't be here, but rather in the header template part.
      get_template_part('shared/header');
    ?>
