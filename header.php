<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

    <head>
        <meta charset=" <?php bloginfo('charset')?> " />
        <meta http-equiv=" X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/m.png"
            type="image/x-icon" />

        <?php wp_head() ?>
    </head <?php body_class() ?>>

    <body>
        <!-- Main Navigation Section -->
        <?php get_template_part( 'template-parts/navigation/navigation' );  ?>
        <!-- Main Navigation Section -->
        <!-- page bredcrumbs -->

        <?php get_template_part( 'template-parts/breadcrumbs/breadcrumbs' );  ?>
        <!-- page bredcrumbs -->