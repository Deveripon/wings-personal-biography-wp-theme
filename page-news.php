<?php get_header()  ?>


<section class="news-portal mt-5">
    <div class="container">
        <div class="row">
            <?php 
                $news_post = new WP_Query([
                     'post_type' => 'post' ,
                     'posts_per_page' => 12,
                    'category_name' => 'News', 
        
                ])
                ?>
            <?php if($news_post->have_posts()):  ?>
            <?php while($news_post->have_posts()):$news_post->the_post() ?>
            <div class="col-lg-3 col-md-6 ">
                <div class="news-box">
                    <a href="<?php the_permalink() ?>"> <img style="border-radius: 5px;"
                            src="<?php echo the_post_thumbnail_url()?>"
                            alt=""></a>
                    <div class="title">
                        <a href="<?php the_permalink() ?>">
                            <h4> <?php the_title()  ?>
                            </h4>
                        </a>
                    </div>
                    <div class="content">
                        <p>
                            <?php echo wp_trim_words(get_the_content(),15,'..') ?>
                        </p>
                    </div>
                    <div class="time"><span> <?php the_time('F j, Y') ?></span></div>
                    <hr>
                </div>
            </div>
            <?php endwhile;
     wp_reset_query();
 ?>
            <?php endif;  ?>

        </div>
    </div>
</section>

<br>
<br>
<?php the_posts_pagination()  ?>
<br>
<br>
<!-- Footer Section -->
<?php  get_footer() ?>
<!-- Footer Section -->