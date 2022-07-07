  <?php
    require('header.php');
    require('navbar.php');
    require('DB.php');

    $data = $db_object->get_user_data();


    ?>
  <main id="main" class="main">
      <section class="section">
          <div class="row align-items-top">
              <div class="col-lg-6">

                  <!-- Card with an image on left -->

                  <div class="card mb-3">
                      <div class="row g-0">
                          <div class="col-md-4">
                              <img src="images/<?= $data['about_image'] ?>" class="img-fluid rounded-start" alt="..." width=100%>
                          </div>
                          <div class="col-md-8">
                              <div class="card-body">
                                  <h5 class="card-title"><?= $data['about_title'] ?></h5>
                                  <p class="card-text"><?= $data['about_description'] ?></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Card with an image on left -->

              </div>

              <div class="col-lg-3">
              </div>
      </section>
  </main>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>