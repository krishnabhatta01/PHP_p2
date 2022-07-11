 <?php

    $datass = $db_object->get_blog();
    

    ?>


 <section class="ftco-section">
     <div class="container">
         <div class="row justify-content-center pb-5 mb-3">
             <div class="col-md-7 heading-section text-center ftco-animate">
                 <span class="subheading">News &amp; Blog</span>
                 <h2>Latest News</h2>
             </div>
         </div>
         <div class="row d-flex">
             <?php foreach($datass as $one) { ?>
             <div class="col-md-6 col-lg-4 d-flex ftco-animate">

                     <div class="blog-entry align-self-stretch">
                         <a href="blog-single.html" class="block-20 rounded" style="background-image: url('admin/images/<?= $one['blog_image'] ?>');">
                         </a>
                         <div class="text mt-3 px-4">
                             <div class="posted mb-3">
                                 <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
                                 <div class="desc pl-3 d-flex">
                                     <span>Posted by Admin</span>
                                     <span>04 March 2020</span>
                                 </div>
                             </div>
                             <h3 class="heading"><a href="#"><?= $one['blog_title'] ?></a></h3>
                             <p><?= $one['blog_description'] ?></p>
                         </div>
                     </div>

                    </div>
                    <?php } ?>

         </div>
     </div>
 </section>