<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important;">
<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>

</head>
<body class="loader" <?php body_class( 'woocommerce' ); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến body_class( 'woocommerce' ); ?>-->
     
<?php  get_template_part('content/157', 'content');   ?>
