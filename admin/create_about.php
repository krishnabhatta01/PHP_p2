<?php
require('header.php');
require('navbar.php');
require('DB.php');

if (isset($_POST['submit'])) {
    if ($db_object->save($_POST)) {
        $message = "About Page published";
        $data = $db_object->get_user_data();
        extract($data);
    } else {
        $message = "About Page failed to publish";
    }
} else {
    if ($db_object->get_user_data() == false) { //if true (record found in db)

        //initialize the variable
        $data['about_title'] = '';
        $data['about_description'] = '';
        $data['about_image'] = '';
    } else {
        //fetching data from db
        $data = $db_object->get_user_data();
        extract($data);
    }
}

?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php isset($message) ?></h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item">About</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card p-4">
                    <div class="card-body">
                        <h5 class="card-title">About Us Form</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="post" action="" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="<?= $data['about_title'] ?>" required>
                                    <label for="floatingName">Title</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="floatingName" name="image"  required>
                                    <label for=" floatingName">Image</label>
                                    <img src="images/<?= $data['about_image'] ?>" width=100%>
                                </div>
                            </div>


                            <!-- End floating Labels Form -->
                    </div>
                </div>



            </div>



            <!-- editior section -->
            <div class=" col-lg-6">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <div class="m-3">
                                <label for="description"></label>
                                <textarea name="description" id="" cols="30" rows="10" required>
                                <?= $data['about_description'] ?>
                               </textarea>
                            </div>
                        </div>

                    </div>

                </section>
            </div>
            <div class=" text-center">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">

            </div>
            </form>

        </div>
    </section>

</main><!-- End #main -->

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