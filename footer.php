<?php

$data = $db_object->get_blog();
extract($data);
?>

<footer class="footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Cleaning Company</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Latest News</h2>
                <div class="block-21 mb-4 d-flex">
                    <a class="img mr-4 rounded" style="background-image: url('admin/images/<?= $one['blog_image'] ?>')"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#"><?= $one['blog_title'] ?></a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> Mar. 04, 2020</a></div>
                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-1 d-block">Home</a></li>
                    <li><a href="#" class="py-1 d-block">About</a></li>
                    <li><a href="#" class="py-1 d-block">Services</a></li>
                    <li><a href="#" class="py-1 d-block">Works</a></li>
                    <li><a href="#" class="py-1 d-block">Blog</a></li>
                    <li><a href="#" class="py-1 d-block">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Have a Questions?</h2>
                <div class="block-23 mb-3">
                    <ul>
                        <li><span class="icon fa fa-map-marker"></span><span class="text">Nayabazar, Khusiun-16, Kathmandu , Nepal</span></li>
                        <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+977 1234567890</span></a></li>
                        <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">

                <p class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="">KrishnaBhatta</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>