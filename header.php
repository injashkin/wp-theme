<?php ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
    <title><?php the_title(); ?></title>
  </head>
  <body>
    <header>
      <p>Это шапка сайта, которая находится в файле header.php</p>
    </header>
