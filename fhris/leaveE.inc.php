




<?php

require_once '../includes/config.inc.php';

$stmt = $pdo->query("SELECT * FROM employees ");
$staff =$stmt->fetchAll();

$stmt = $pdo->query("SELECT * FROM leave_categories ");
$types =$stmt->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Plug-ins | Mantis Bootstrap 5 Admin Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <!-- [Page specific CSS] start -->
    <!-- data tables css -->
    <link rel="stylesheet" href="../assets/css/plugins/dataTables.bootstrap5.min.css">
    
    <!-- [Page specific CSS] end -->
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" >
    <link rel="stylesheet" href="../assets/css/style-preset.css" >

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="dark">

<!-- [ Pre-loader ] start -->
<?php
  include '../components/loader.inc.php';
?>
<!-- [ Pre-loader ] End -->


<!-- [ Sidebar Menu ] start -->
<?php
  include '../components/side_bar.inc.php';
?>
<!-- [ Sidebar Menu ] end --> 


<!-- [ Header Topbar ] start -->
<?php
  include '../components/nav_bar.inc.php';
?>
<!-- [ Header ] end -->

<!-- [ Header ] end -->



    <section class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">DataTable</a></li>
                  <li class="breadcrumb-item" aria-current="page">Plug-ins</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Leave Entitlement</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- API plug-in methods table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-light">
                <h5><i class="ti ti-file-analytics"></i>  Employees Spreedsheet</h5>
              </div>
              <div class="card-body">
                <div class="row g-4">
                  <div class="col-md-3">
                    
                      <select class="mb-0 form-select form-select-sm">
                        <option value="">Leave Types</option>
                        <?php foreach ($types as $leave_categories): ?>
                        <option><?= htmlspecialchars($leave_categories['name']) ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <div class="col-md-3">
                    
                    <select class="mb-0 form-select form-select-sm">
                      <option>~ All Departments ~</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    
                      <select id="role-filter" class="mb-0 form-select form-select-sm">
                          <option value="">Gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                    
                      <a href="">i want to import a File</a> <br>
                      <button type="button" class="btn btn-light d-inline-flex">
                          <i class="ti ti-chart-arrows-vertical me-1"></i>
                          Update Data
                      </button>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- API plug-in methods table end -->
          
          <!-- Custom filtering - range search table start -->
          <div class="col-sm-12">
            <div class="card">
              
              <div class="card-body">
                
                <div class="dt-responsive table-responsive">
                  <table id="dt-range" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        
                        <th>P/No</th>
                        <th>Name</th>
                        <th> Gender</th>
                        
                        <th> Hire Date</th>
                        <th>Days Ent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($staff as $employees): ?>
                      <tr>

                       
                        <td><?= htmlspecialchars($employees['personal_number']) ?></td>
                        
                        <td><?= htmlentities($employees['first_name']);?>&nbsp;<?= htmlentities($employees['last_name']);?></td>
                        <td><?= htmlspecialchars($employees['gender']) ?></td>
                        
                        <td><?= htmlspecialchars($employees['hire_date']) ?></td>
                        <td>30</td>
                                    
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Custom filtering - range search table end -->
          
          <!-- Live DOM ordering table end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </section>


         <!-- [ footer  ] start -->
         <?php
        include '../components/footer.inc.php';
    ?>
    
    <!-- Required Js -->
  
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>
<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>





<script>layout_change('dark');</script>




<script>change_box_container('false');</script>



<script>layout_rtl_change('false');</script>


<script>preset_change("preset-1");</script>


<script>font_change("Public-Sans");</script>

    
      <!-- [off canvas] start -->
      <?php
          include '../components/OffCanvas.inc.php';
      ?>

    <!-- [Page Specific JS] start -->
    <!-- datatable Js -->
    
    <script src="../assets/js/plugins/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="../assets/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script>
          // [ Plugin data table ]
          $.fn.dataTable.Api.register('column().data().sum()', function () {
            return this.reduce(function (a, b) {
              var x = parseFloat(a) || 0;
              var y = parseFloat(b) || 0;
              return x + y;
            });
          });

          var table = $('#dt-plugin-method').DataTable();

          $('<button class="btn  btn-primary m-b-10">sum of age in all rows</button>')
            .prependTo('.dt-plugin-buttons')
            .on('click', function () {
              alert('Column sum is: ' + table.column(3).data().sum());
            });

          $('<button class="btn  btn-primary m-r-10 m-b-10">sum of age of visible rows</button>')
            .prependTo('.dt-plugin-buttons')
            .on('click', function () {
              alert(
                'Column sum is: ' +
                  table
                    .column(3, {
                      page: 'current'
                    })
                    .data()
                    .sum()
              );
            });

          $.fn.dataTable.ext.type.detect.unshift(function (d) {
            return d === 'Low' || d === 'Medium' || d === 'High' ? 'salary-grade' : null;
          });

          $.fn.dataTable.ext.type.order['salary-grade-pre'] = function (d) {
            switch (d) {
              case 'Low':
                return 1;
              case 'Medium':
                return 2;
              case 'High':
                return 3;
            }
            return 0;
          };

          $('#dt-ordering').DataTable();


          /* Custom filtering function which will search data in column four between two values */
          $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        var min = parseInt($('#min').val(), 10);
        var max = parseInt($('#max').val(), 10);
        var age = parseFloat(data[3]) || 0; // assuming age is column 3

        var selectedRole = $('#role-filter').val().toLowerCase();
        var role = data[2].toLowerCase(); // assuming role is in column 2

        // Age logic
        var ageValid = (isNaN(min) && isNaN(max)) ||
                      (isNaN(min) && age <= max) ||
                        (min <= age && isNaN(max)) ||
                        (min <= age && age <= max);

          // Role logic
          var roleValid = selectedRole === "" || role === selectedRole;

          return ageValid && roleValid;
      });

      var dtage = $('#dt-range').DataTable();

      // Trigger draw on filter change
      $('#min, #max, #role-filter').on('change keyup', function () {
          dtage.draw();
      });


    </script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->
</html>
