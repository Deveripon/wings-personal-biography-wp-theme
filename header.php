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

        <?php if(is_front_page()):  ?>

        <!-- main-slider-section -->
        <section class="main-slider">
            <div class="slider owl-carousel">
                <?php
                     $slider =  new WP_Query([
                        'post_type' => 'slider',
                        'post_per_page' => 7,
                    ])  ?>
                <?php if($slider->have_posts()):  ?>
                <?php while($slider->have_posts()):$slider->the_post() ?>
                <div class="slides">
                    <div class="slide-img">
                        <img
                            src="<?php the_post_thumbnail_url()  ?>"
                            alt="" />
                    </div>
                    <div class="overlay">
                        <!-- <div class="slide-content">
							<div class="title">
								<h4>Life is either a daring adventure or nothing at all.</h4>
							</div>
							<div class="sub-title">-Helen Keller</div>
							<div class="links">
								<a href="#">About Us <i class="fa-solid fa-arrow-down"></i></a>
							</div>
						</div> -->
                    </div>
                </div>
                <?php endwhile  ?>
                <?php wp_reset_query()  ?>
                <?php endif;  ?>



            </div>
        </section>
        <!-- main-slider-section -->

        <!-- Main Navigation Section -->
        <?php get_template_part( 'template-parts/navigation/navigation' );  ?>
        <!-- Main Navigation Section -->
        <?php else:  ?>
        <!-- Main Navigation Section -->
        <?php get_template_part( 'template-parts/navigation/navigation' );  ?>
        <!-- Main Navigation Section -->
        <!-- page bredcrumbs -->

        <?php get_template_part( 'template-parts/breadcrumbs/breadcrumbs' );  ?>
        <!-- page bredcrumbs -->
        <?php endif;  ?>