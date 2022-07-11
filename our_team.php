<?php

$team = $db_object->get_team();
extract($team);
?>



<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
                <div class="heading-section ftco-animate text-center text-lg-left">
                    <span class="subheading">Team &amp; Staff</span>
                    <h2>Our Team</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    <p><a href="#" class="btn btn-secondary">View All Staff</a></p>
                </div>
            </div>
            
            
           <?php  foreach($team as $one) { ?>
                <div class="col-md-4 col-lg-3 ftco-animate d-flex">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(admin/images/<?= $one['team_image'] ?>)"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3><?= $one['name'] ?></h3>
                            <span class="position mb-2"><?= $one['domain'] ?></span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
           <?php } ?>
            

        </div>
    </div>
</section>