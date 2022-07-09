 <?php
    require('header.php');
    require('navbar.php');
    require('DB.php');

    $data = $db_object->get_team();
    extract($data);
    ?>


 <main id="main" class="main">

     <div class="pagetitle">
         <h1>Data Tables</h1>
         <nav>
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                 <li class="breadcrumb-item">Team</li>
                 <li class="breadcrumb-item active">Data</li>
             </ol>
         </nav>
     </div><!-- End Page Title -->

     <section class="section">
         <div class="row">
             <div class="col-lg-12">

                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title">Employee Datatables</h5>

                         <!-- Table with stripped rows -->
                         <table class="table datatable text-center">
                             <thead class="text-center">
                                 <tr>
                                     <th scope="col">Sn.no</th>
                                     <th scope="col">Name</th>
                                     <th scope="col">Image</th>
                                     <th scope="col">Domain</th>
                                     <th scope="col">Action</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    foreach ($data as $one) {  ?>
                                     <tr>
                                         <th scope="row">
                                             <?= $one['id']  ?>
                                         </th>
                                         <td><?= $one['name'] ?></td>
                                         <td><img src="images/<?= $one['team_image'] ?>" alt="..." width=20% class="rounded"> </td>
                                         <td><?= $one['domain'] ?></td>
                                         <td><a  onclick="deleteteam(<?= $one['id'] ?>)" type="button" class="btn btn-danger">
                                                 <i class="bi bi-exclamation-octagon">

                                                 </i>
                                             </a>
                                         </td>
                                     </tr>

                                 <?php } ?>

                             </tbody>
                         </table>
                         <!-- End Table with stripped rows -->

                     </div>
                 </div>


             </div>
         </div>
     </section>

 </main><!-- End #main -->
 <script>
    function deleteteam(id){
        if(confirm("Are you sure you want to delete?")){
            document.location='delete_team.php?id='+ id;
        }else{
            return false;
        }
    }
 </script>

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