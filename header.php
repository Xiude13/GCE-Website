<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Solar Energy, Solar Panels, South Africa">
    <meta name="description" content="South Africa Solar Panels">
    <meta name="author" content="xiude13">
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/GCE_theme/images/favicon-32x32.png">
    
    
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/dist/style.css" />

    <title><?php
            if (is_front_page()) {
                bloginfo('name');
            } elseif (is_singular()) {
                single_post_title();
            } else {
                bloginfo('name');
                wp_title('&raquo;', true, 'left');
            }
        ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
