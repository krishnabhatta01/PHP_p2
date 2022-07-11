<?php
$data = $db_object->get_gallary();
extract($data);
?>


<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section  text-center ftco-animate">
                <span class="subheading">Our Project</span>
                <h2>We have done many latest cleaning project</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data as $one) { ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(admin/images/<?= $one['gallary_image'] ?>);">

                        <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="#"><?= $one['gallary_title'] ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>