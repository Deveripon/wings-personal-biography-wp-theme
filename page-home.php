<?php get_header()  ?>
<!-- Featured Post Section -->

<section class="featured-post">
    <div class="container-sm">
        <div class="row">
            <div class="col-12">

                <?php 
                $featured_post = new WP_Query([
                     'post_type' => 'post' ,
                     'posts_per_page' => 1,
                    'category_name' => 'featured', 
        
                ])
                ?>


                <?php if($featured_post->have_posts()):  ?>
                <?php while($featured_post->have_posts()):$featured_post->the_post()  ?>

                <div class="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card-img post-image">
                                <?php the_post_thumbnail()  ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="<?php the_permalink() ?>">
                                        <h4>
                                            <?php the_title() ?>
                                        </h4>
                                    </a>
                                </div>
                                <div class="post-details">
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-user" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"> <?php the_author()  ?></a></li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-calendar" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"> <?php the_time('F d, Y')  ?></a></li>
                                    </ul>
                                </div>

                                <div class="post-description">
                                    <p>
                                        <?php echo wp_trim_words(get_the_content(), 100,'...'); ?>
                                    </p>
                                    <a href="<?php the_permalink() ?>">..read more <i
                                            class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile;  ?>
                <?php endif; ?>


            </div>
        </div>
    </div>
</section>
<!-- Featured Post Section -->

<!-- covid alert section -->
<section class="covid-alert-section">
    <div class="container-sm alert-section my-5">
        <div class="row">
            <?php $social_massase =  new WP_Query([
                        'post_type' => 'massage',
                        'posts_per_page' => 1,
                    ])  ?>
            <?php if($social_massase->have_posts()):  ?>
            <?php while($social_massase->have_posts()):$social_massase->the_post()  ?>
            <div class="col-12">
                <div class="covid-alert">
                    <h4> <?php the_title()  ?></h4>
                    <h5> <?php echo get_post_meta(get_the_ID(),'heading',true)  ?></h5>

                    <p id="social-massage" style="margin-left:0px !important"> <?php the_content() ?></p>

                </div>
            </div>
            <?php endwhile;  ?>
            <?php wp_reset_query() ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- covid alert section -->
<!-- Workshop Section start form here -->

<section class="workshop">
    <div class="container-sm">
        <div class="row">
            <div class="heading">
                <h2>Workshop</h2>
            </div>
            <div class="saparator">
                <div class="saparate"></div>
            </div>

            <div class="workshop-gallery mt-5">
                <?php $workshop = new WP_Query([
                    'post_type' => 'workshop',
                    'posts_per_page' =>25,          
                ]) ?>
                <?php if($workshop->have_posts()): ?>
                <?php while($workshop->have_posts()):$workshop->the_post()  ?>
                <?php the_post_thumbnail() ?>
                <?php endwhile; 
                wp_reset_query();
                ?>

                <?php endif; ?>
            </div>

        </div>

    </div>
</section>
<!-- Workshop Section end form here -->

<!-- Mission And Vision Section -->
<section class="mission">
    <div class="container-sm">
        <div class="row">
            <div class="heading">
                <h2>Our Mission and Vision</h2>
            </div>
            <div class="saparator">
                <div class="saparate"></div>
            </div>

            <?php $mission = new WP_Query([
                'post_type' => 'mission',
                'posts_per_page' => 1,
            ]) ?>
            <?php if($mission->have_posts() ): ?>
            <?php while($mission->have_posts()):$mission->the_post() ?>


            <div class="mission-content text-start mt-5">
                <?php the_content() ?>
            </div>
            <?php endwhile;  ?>
            <?php wp_reset_query() ?>
            <?php else: ?>
            <div class="mission-content text-start mt-5">
                <p>Our mission is to make the world a better place for all to live by improving Islamic banking
                    and finance,
                    social welfare, empowering women, improving education and health, and promoting interfaith
                    harmony.
                    <br>

                    Islamic banking and finance is a system that operates in accordance with Islamic principles
                    and values. It is
                    based on the concept of profit and loss sharing, rather than the charging of interest. This
                    system has the
                    potential to promote economic development and financial inclusion, particularly in
                    underserved communities. By
                    improving Islamic banking and finance, we can help to create a more equitable and
                    sustainable financial
                    system.
                    <br>
                    Social welfare is a key aspect of our mission. We believe that everyone has the right to a
                    dignified standard
                    of living, regardless of their circumstances. By improving social welfare, we can help to
                    reduce poverty,
                    inequality, and social exclusion. This includes supporting initiatives that provide access
                    to education,
                    healthcare, and other essential services, as well as addressing the root causes of social
                    problems.
                    <br>
                    Empowering women is an important aspect of our mission. We believe that women have the right
                    to equal
                    opportunities and treatment, and that their empowerment is crucial for the development and
                    prosperity of
                    communities. By supporting initiatives that empower women, we can help to create a more
                    inclusive and
                    equitable society.
                    <br>
                    Improving education and health is another key focus of our mission. Education is a
                    fundamental right, and it
                    is essential for personal and societal development. By improving education, we can help to
                    create a more
                    knowledgeable and skilled workforce, as well as promoting critical thinking and
                    problem-solving skills.
                    Similarly, good health is essential for individuals and communities to thrive. By improving
                    healthcare systems
                    and services, we can help to ensure that everyone has access to the medical care they need.
                    <br>
                    Promoting interfaith harmony is also an important aspect of our mission. We believe that
                    everyone has the
                    right to practice their religion freely and without fear of persecution. By promoting
                    interfaith harmony, we
                    can help to create a more inclusive and tolerant society, where people of all faiths can
                    live together in
                    peace and respect.
                    <br>
                    Finally, our mission includes a commitment to reducing terrorism. Terrorism is a global
                    threat that undermines
                    peace and security, and it is important that we work together to counter this threat. This
                    includes efforts to
                    address the root causes of terrorism, as well as supporting initiatives that promote
                    dialogue and
                    understanding between different communities.
                    <br>
                    Overall, our mission is to make the world a better place for all to live by improving
                    Islamic banking and
                    finance, social welfare, empowering women, improving education and health, and promoting
                    interfaith harmony.
                    We believe that through these efforts, we can help to create a more just and equitable
                    society, where everyone
                    has the opportunity to live a fulfilling and prosperous life.
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Mission And Vision Section -->

<!-- Blog Post Section -->
<section class="blog-post-section my-5">
    <div class="container-sm">
        <div class="row justify-content-between">


            <?php $post_item = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 4,
                    'orderby' => 'rand',
                    'order' => 'DESC',
                    'offset'    => 0,
                    
            ])  ?>

            <?php if($post_item->have_posts()):  ?>
            <?php while($post_item->have_posts()):$post_item->the_post()  ?>
            <!-- blog-post -->
            <?php if(has_post_thumbnail()): ?>
            <div class="col-12 col-lg-6 mb-3">
                <div class="blogpost card shadow-lg">
                    <!-- 	blog-post overlay -->
                    <div class="post-overlay">
                        <div class="description">
                            <a href="<?php the_permalink()?>">
                                <h4>
                                    <?php the_title() ?><span>...</span>
                                </h4>
                            </a>
                            <div class="post-details">
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-user" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"> <?php the_author() ?></a></li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-calendar" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"> <?php the_time('F d, Y ') ?></a></li>
                                </ul>
                            </div>
                            <a class="read-more mt-3" href="<?php the_permalink() ?>">
                                <i class="fa-solid fa-caret-right"></i>Read More</a>
                        </div>
                    </div>
                    <!-- 	blog-post overlay -->
                    <div class="row">
                        <div class="col-6 post-media">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <div class="col-6 post-content">
                            <h2>
                                <?php the_title()  ?>
                            </h2>
                            <div class="post-details">
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-user" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"> <?php the_author() ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;  ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata() ?>
            <?php endif;  ?>
        </div>
        <div class="all-link-btn text-center">
            <a href="<?php home_url() ?>" class="all-blog-link all-link">Read All Blogs</a>
        </div>
    </div>
</section>
<!-- Blog Post Section -->

<!-- Qoutes from the author -->
<section class="qoutes">
    <div class="container-sm">
        <div class="row">
            <div class="heading">
                <h2>Speech from Mukhlesur Rahman</h2>
            </div>
            <div class="saparator">
                <div class="saparate"></div>
            </div>
            <div class="col-12 author-qoutes owl-carousel">

                <?php  $qoutes = new WP_Query([
                'post_type' => 'qoutes',
                'posts_per_page' => 10,
            ])?>
                <?php if($qoutes->have_posts()):  ?>
                <?php while($qoutes->have_posts()):$qoutes->the_post() ?>
                <div class="qoutes-item">
                    <h4>
                        <i class="fa-solid fa-quote-left"></i> <?php the_title()  ?><i
                            class="fa-solid fa-quote-right"></i>
                    </h4>
                </div>
                <?php endwhile;  ?>
                <?php endif; ?>


            </div>
        </div>
        <!-- <div class="all-link-btn text-center">
					<a class="all-blog-link all-link">Read All Speech</a>
				</div> -->
    </div>
</section>
<!-- Qoutes from the author -->

<!-- award display section -->
<section class="awards-achivement">
    <div class="container-sm">
        <div class="row">
            <div class="heading">
                <h2>Awards & Achivements</h2>
            </div>
            <div class="saparator">
                <div class="saparate"></div>
            </div>
        </div>
    </div>
    <div class=" container-fluid">
        <div class="award_slider owl-carousel">

            <?php $award = new WP_Query([
                'post_type' => 'award',
                'post_per_page' =>10
            ])  ?>
            <?php if($award->have_posts()):  ?>
            <?php while($award->have_posts()):$award->the_post() ?>
            <div class="slide">
                <div class="row">
                    <div class="col-7">
                        <div class="slide-image">
                            <?php the_post_thumbnail() ?>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="slide-content" style="padding: 20px">
                            <h4> <?php the_title()  ?></h4>
                            <p> <?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query() ?>
            <?php endif; ?>

        </div>
</section>
<!-- award display section -->
<!-- about us section -->
<section
    class="about-section"
    style="
				background-image: url(<?php  echo get_template_directory_uri();?>/assets/img/backgrounds/rm222batch5-kul-03.jpg)
			">
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>About US</h2>
                </div>
                <div class="saparator">
                    <div class="saparate"></div>
                </div>
                <div class="row about-items">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="card text-start shadow-lg">
                            <div class="card-body">
                                <h4 class="card-title">Who we are</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Optio, illo? Quos aspernatur perferendis optio Lorem
                                    ipsum, dolor sit amet consectetur adipisicing elit.
                                    Eligendi, facere. illum dolorem ipsam quod officiis alias!
                                </p>
                            </div>
                            <hr />
                            <a class="read-more" href="./about.html">Read more <i
                                    class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-3 uk-animation-fade">
                        <div class="card text-start shadow-lg">
                            <div class="card-body">
                                <h4 class="card-title">What we do</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Optio, illo? Quos aspernatur perferendis optio Lorem
                                    ipsum, dolor sit amet consectetur adipisicing elit.
                                    Eligendi, facere. illum dolorem ipsam quod officiis alias!
                                </p>
                            </div>
                            <hr />
                            <a class="read-more" href="./about.html">Read more <i
                                    class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us section -->
<!-- news and highlights section -->
<section class="highlights-section">
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>NEWS & HIGHLIGHTS</h2>
                </div>
                <div class="saparator">
                    <div class="saparate"></div>
                </div>
                <div class="row news-area d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-card">
                            <div class="card text-left">
                                <div class="card-image">
                                    <img
                                        src="<?php  echo get_template_directory_uri();?>/assets/img/87UfrpSPgR2fnZiVdrFTNO9r0EDCyirImLh7k5TtMBk=_plaintext_638056009392642373-min.jpg"
                                        alt=""
                                        class="card-img-top" />
                                </div>
                                <div class="card-body">
                                    <div class="details d-flex gap-sm-3">
                                        <div class="category d-flex gap-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                            <p>News</p>
                                        </div>
                                        <div class="time d-flex gap-2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <p>12 December 2022</p>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic ad saepe incidunt temporibus non nihil sed illum in
                                        tempora beatae?
                                    </p>
                                    <a class="read-more" href="./single_blog.html">Read more <i
                                            class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-card">
                            <div class="card text-left">
                                <div class="card-image">
                                    <img
                                        src="<?php  echo get_template_directory_uri();?>/assets/img/img2.jpg"
                                        alt=""
                                        class="card-img-top" />
                                </div>
                                <div class="card-body">
                                    <div class="details d-flex gap-sm-3">
                                        <div class="category d-flex gap-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                            <p>News</p>
                                        </div>
                                        <div class="time d-flex gap-2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <p>12 December 2022</p>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic ad saepe incidunt temporibus non nihil sed illum in
                                        tempora beatae?
                                    </p>
                                    <a class="read-more" href="./single_blog.html">Read more <i
                                            class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-card">
                            <div class="card text-left">
                                <div class="card-image">
                                    <img
                                        src="<?php  echo get_template_directory_uri();?>/assets/img/new.jpg"
                                        alt=""
                                        class="card-img-top" />
                                </div>
                                <div class="card-body">
                                    <div class="details d-flex gap-sm-3">
                                        <div class="category d-flex gap-2">
                                            <i class="fa-solid fa-folder-open"></i>
                                            <p>News</p>
                                        </div>
                                        <div class="time d-flex gap-2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <p>12 December 2022</p>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic ad saepe incidunt temporibus non nihil sed illum in
                                        tempora beatae?
                                    </p>
                                    <a class="read-more" href="/single_blog.html">Read more <i
                                            class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-link-btn text-center" style="margin-bottom: 0px">
            <a href="./blog.html" class="all-blog-link all-link">Read All News</a>
        </div>
    </div>
</section>
<!-- news and highlights section -->

<!-- books and publications section -->
<section
    class="books-publication"
    uk-parallax="bgy: -1200"
    style="
				background-image: url(<?php  echo get_template_directory_uri();?>/assets/img/backgrounds/64994452421978.jpg)
			">
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2 class="animate__animated animate__fadeInUp">
                        BOOKS & PUBLICATIONS
                    </h2>
                </div>
                <div class="saparator">
                    <div class="saparate"></div>
                </div>
                <div class="books-list">
                    <div class="row">
                        <?php $books = new WP_Query([
                            'post_type' => 'books',
                            'posts_per_page' =>10
                        ]) ?>
                        <?php if($books->have_posts()): ?>
                        <?php while($books->have_posts()):$books->the_post() ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <div class="book shadow-lg">
                                <div class="book-title">
                                    <a href="#">
                                        <h4> <?php the_title()  ?></h4>
                                    </a>
                                </div>
                                <div class="book-image">
                                    <img height="150px"
                                        src="<?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>"
                                        alt="" />
                                </div>
                                <hr />
                                <a class="see-details" href="<?php the_permalink()?>"><i
                                        class="fa-solid fa-caret-right"></i>See Details</a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query() ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="all-link-btn text-center">
                    <a class="all-blog-link all-link">See All Books</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- books and publications section -->
<!-- gallery section -->
<section class="gallery-section">
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>GALLERY & MEDIA</h2>
                </div>
                <div class="saparator">
                    <div class="saparate"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="gallery d-flex justify-content-center">
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img
                                            src="<?php  echo get_template_directory_uri();?>/assets/img/11DfLInF6NZhKtoHlqU8xKWXNu7q5Gdd69-p3QFA1uI=_plaintext_638056009530862934-min.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/11DfLInF6NZhKtoHlqU8xKWXNu7q5Gdd69-p3QFA1uI=_plaintext_638056009530862934-min.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img
                                            src="<?php  echo get_template_directory_uri();?>/assets/img/87UfrpSPgR2fnZiVdrFTNO9r0EDCyirImLh7k5TtMBk=_plaintext_638056009392642373-min.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/87UfrpSPgR2fnZiVdrFTNO9r0EDCyirImLh7k5TtMBk=_plaintext_638056009392642373-min.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img
                                            src="<?php  echo get_template_directory_uri();?>/assets/img/CgEalP7X3KXLH82E6TitJTNEXEDNZhRzXp7dY7jgTKw=_plaintext_638056009393002385-min.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/CgEalP7X3KXLH82E6TitJTNEXEDNZhRzXp7dY7jgTKw=_plaintext_638056009393002385-min.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/s1.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a href="<?php  echo get_template_directory_uri();?>/assets/img/s1.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/IMG-20221203-WA0003-min.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/IMG-20221203-WA0003-min.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/s2.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a href="<?php  echo get_template_directory_uri();?>/assets/img/s2.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/s3.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a href="<?php  echo get_template_directory_uri();?>/assets/img/s3.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/IMG-20221203-WA0002-min.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/IMG-20221203-WA0002-min.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/IMG-20221203-WA0001-min.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/IMG-20221203-WA0001-min.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="gal-item shadow-lg">
                                        <img src="<?php  echo get_template_directory_uri();?>/assets/img/awards/4.jpg"
                                            alt="" />
                                        <div class="overlay">
                                            <div class="links">
                                                <a
                                                    href="<?php  echo get_template_directory_uri();?>/assets/img/awards/4.jpg"
                                                    data-lightbox="gallery"><i class="fa-solid fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-link-btn text-center">
                    <a class="all-blog-link all-link">View All Gallery</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery section -->
<!-- social media section -->
<section class="social-media">
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>FOLLOW US ON SOCIAL MEDIA</h2>
                </div>
                <div class="saparator">
                    <div class="saparate"></div>
                </div>
            </div>
            <div class="social-section">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="facebook-like-box">
                            <h4>Facebook</h4>
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063784711268&tabs=timeline&width=340&height=250px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="340"
                                height="250px"
                                style="border: none; overflow: hidden"
                                scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <h4>Linkedin</h4>
                        <div class="linkedin-profile">
                            <iframe
                                src="https://www.linkedin.com/in/mukhlesur-rahman-161b0a92"
                                width="340"
                                height="250px"
                                style="border: none; overflow: hidden"
                                scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <h4>Connect With Us</h4>
                        <div class="social-box d-flex gap-2">
                            <div class="facebook">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </div>
                            <div class="twitter">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <div class="linkedin">
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <div class="instagram">
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- social media section -->
<!-- Footer Section -->
<?php get_footer() ?>