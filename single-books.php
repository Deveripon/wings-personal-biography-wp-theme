 <?php get_header()  ?>
 <!-- blogpost section -->
 <?php if(is_single()): ?>
 <section class="blog-post-section mt-5">
     <div class="container">
         <div class="row">
             <div class="col-12 col-lg-8">
                 <div class="row book-wrapper">
                     <div class="col-12 col-md-6 mb-4">
                         <div class="book-image">
                             <img width="100%"
                                 src="<?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>"
                                 alt="" />
                         </div>
                     </div>
                     <div class="col-12 col-md-6 mb-4">
                         <div class="book-content">
                             <h2 class="book-title text-start">
                                 <?php the_title()  ?>
                             </h2>
                             <p class="book-description">
                                 <?php echo get_post_meta(get_the_ID(),'book_desc',true) ;  ?>
                             </p>
                             <table class="table table-borderless table-responsive">
                                 <tr>
                                     <td><strong>Publisher</strong></td>
                                     <td> <?php echo get_post_meta(get_the_ID(),'publisher_name',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>First Publish</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'published_date',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>ISBN</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'isbn_number',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>Language</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'language',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>Pages</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'page_quantity',true);  ?></td>
                                 </tr>
                             </table>
                             <a class="book-download-link"
                                 target="_blank" download=""
                                 href="<?php echo get_post_meta(get_the_ID(),'book_download_link',true) ?>">Download
                                 As
                                 Pdf</a>
                         </div>
                     </div>
                     <div class="col-12 my-5">
                         <div class="section-title book-releted-news">Releted News</div>
                         <div class="news-box">
                             <div class="news-title">
                                 <h3>
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Ad voluptatem cum non. Voluptate et veritatis, molestiae
                                     quis illo rem labore?
                                 </h3>
                             </div>

                             <div class="news-description">
                                 Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                 Quos enim eos dignissimos eius praesentium, rem explicabo
                                 voluptate sunt culpa perferendis ut dolorum aliquid eaque
                                 optio non eum facere! Quisquam, perferendis exercitationem.
                                 Id mollitia quidem dolorem, quia ea porro placeat ut commodi
                                 totam iusto libero veritatis sapiente explicabo repudiandae
                                 quaerat repellendus!
                                 <img
                                     style="width: 600px; display: block"
                                     src="./assets/img/news.jpg"
                                     alt="" />
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Cumque incidunt similique quas accusamus impedit cum
                                 mollitia tempore veritatis doloribus doloremque est sed,
                                 nihil et explicabo natus. Vel, repellendus nobis tempore,
                                 enim delectus porro minus magni excepturi, voluptatem
                                 distinctio optio aperiam nihil velit deleniti quos autem
                                 vero animi exercitationem consequuntur. Nulla accusamus
                                 soluta, magnam pariatur voluptas consequatur quaerat
                                 voluptates accusantium ea quasi dolorem, repudiandae eveniet
                                 incidunt doloremque, illo vero quae assumenda!
                                 <img
                                     style="width: 600px; display: block"
                                     src="./assets/img/news1.jpg"
                                     alt="" />
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Voluptatem nam debitis ipsam nihil nisi fuga,
                                 necessitatibus, optio ipsum voluptate alias sed quasi
                                 eligendi eveniet quaerat suscipit! Saepe adipisci voluptates
                                 ab itaque id qui quos veritatis aliquid illo repudiandae sed
                                 vero doloribus earum aliquam, quaerat sapiente praesentium
                                 debitis placeat? Sed, corporis! Lorem ipsum dolor sit amet,
                                 consectetur adipisicing elit. In perferendis culpa
                                 perspiciatis ipsum officiis quibusdam ullam, velit ipsa
                                 accusantium magni natus dolores aut blanditiis esse deserunt
                                 voluptatum aperiam odit fugit harum. Repudiandae molestiae
                                 quas repellat necessitatibus quam culpa accusantium rerum,
                                 earum laborum ab eum? Impedit rem incidunt architecto
                                 officiis omnis nemo temporibus. Perferendis, cum earum!
                                 Asperiores officia in, eius possimus deserunt dignissimos,
                                 unde voluptates facere sunt earum minima! Dolorem, facere?
                                 Consectetur, nihil iusto in hic expedita sed beatae
                                 voluptatem eaque doloremque minima reiciendis atque libero
                                 officiis consequatur quam cumque aliquam natus iure
                                 dignissimos eveniet ut facilis optio sequi delectus? Vitae,
                                 maxime ex. Quisquam eaque, odio, assumenda sapiente fugiat
                                 labore autem quod voluptatibus perspiciatis, nostrum
                                 pariatur impedit! Architecto nesciunt vel minima impedit
                                 deleniti voluptatibus qui, molestias laborum illum! Eligendi
                                 praesentium ullam nulla facilis mollitia, nisi maxime
                                 architecto voluptatum! Consequatur labore natus odio esse
                                 aut quos, assumenda error ratione deleniti animi excepturi
                                 eum, voluptates iste. Rerum autem consequuntur, consectetur
                                 veniam eligendi labore fuga! Magnam mollitia officiis iure
                                 maxime perferendis. Excepturi tenetur suscipit odit officia
                                 quo blanditiis quam quasi vel laboriosam architecto hic
                                 magnam, earum non dolores dolor et necessitatibus incidunt
                                 asperiores debitis vero quis reprehenderit! Alias
                                 reprehenderit sapiente fugit molestiae ut velit.
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <?php get_sidebar() ?>
             </div>
             <!-- pagination section -->
             <?php the_posts_pagination()  ?>
             <!-- pagination section -->
             <br>
             <br>
         </div>

     </div>

 </section>
 <?php endif; ?>
 <!-- blogpost section -->



 <!-- Footer Section -->
 <?php  get_footer() ?>
 <!-- Footer Section -->