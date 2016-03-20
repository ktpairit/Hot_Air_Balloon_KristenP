<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>

<body>

    <div class="container">
        <!--Beginning of Header-->
        <header class="row">
            <!-- Add Menu Here -->
            <div class="twelve columns">
                <?php wp_nav_menu(array(
                    'menu' => 'Main Menu',
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                ));?>
            </div>
            <!--End of Menu-->
            <div class="row">
                <div class="twelve columns">
                    <div class="headerImg">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                    </div>
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
            </div>
        </header>
        <!-- End of Header - Begin Section Content-->

