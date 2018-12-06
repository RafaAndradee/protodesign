<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ProtoDesign</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<?php wp_head(); ?>
  </head>

<body>


<nav class="navbar navbar-expand-md navbar-light bg-faded">
  <div class="container">
    <a class="navbar-brand" href="#"><?php the_custom_logo() ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu', //primary menu
                            'menu_class' => 'navbar-nav mr-auto',  //The class name which contain the menu
                        ));
                    ?>

    </div>
  </div>
</nav>
