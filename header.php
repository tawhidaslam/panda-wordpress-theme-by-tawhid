<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <div class="header_area p-2 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <?php the_custom_logo();?>
                </div>
                <div class="col-md-9 menu mt-1">
                   <?php
                   
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'           => 'tawhid',
                        'menu_class'       => 'menuclass',
                        'container'         => false
                    ));
                   
                   ?>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------header end -------------------->