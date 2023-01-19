<?php get_header()  ?>

<?php if(is_post_type_archive('books')):/** to check conditionaly that custom post mached or not
                                        *books is the custom post type
                                        */ ?>
<section class="booklist-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="section-title">
                    As a writer Mr.Mukhlesur Rahman published many Books. Some of his
                    books.
                </div>
                <div class="row mt-5">

                    <?php
                     $book =  new WP_Query([
                        'post_type' => 'books',
                        'post_per_page' => 9,
                    ])  ?>

                    <?php if($book -> have_posts()): ?>
                    <?php while($book -> have_posts()):$book->the_post()  ?>
                    <div class="col-6 col-md-4">
                        <div class="book m-2">
                            <div class="card border-0" style="width: 14rem">
                                <a href=" <?php the_permalink() ?>">
                                    <img
                                        class="card-img"
                                        style="cursor: pointer"
                                        src=" <?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>"
                                        alt="" /></a>
                                <div class="card-body">
                                    <a href="./singlebook.html">
                                        <h3 class="card-title book-title"> <?php the_title()  ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile  ?>
                    <?php endif  ?>
                    <?php wp_reset_query()  ?>

                </div>
            </div>
            <div class="col-lg-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>
<?php endif;  ?>

<!-- Footer Section -->
<?php  get_footer() ?>
<!-- Footer Section -->