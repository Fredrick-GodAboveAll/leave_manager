

<?php

require_once '../includes/config.inc.php';

$stmt = $pdo->query("SELECT * FROM   leave_categories ");
$leave_c =$stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Filters Bootstrap Table | Mantis Bootstrap 5 Admin Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/plugins/style.css" >
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





    <!-- [ Main Content ] start -->
    <section class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
              <div class="row align-items-center">
                <div class="col-md-12">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                    <li class="breadcrumb-item" aria-current="page">Leave Categories</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0"> Leave Categories</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">

          <div class="col-xl-12">
            <div class="card">
                
                <div class="card-body">
                  <div class="row g-2">
                    <div class="col-md-2">

                      <button type="button" class="btn btn-sm d-flex align-items-center btn-light-dark d-inline-flex">
                        <i class="ti ti-refresh me-1"></i>
                        Update Data
                      </button>

                        
                      </div>
                    
                    <div class="col-md-3">
                      
                        <button type="button" class="btn btn-sm d-flex align-items-center btn-light-dark d-inline-flex">
                          <i class="ti ti-tool me-1"></i>
                          leave notifications settings
                        </button>

                      </div>


                      <div class="col-md-3">
                        <button type="button" class="btn btn-sm d-flex align-items-center btn-light-success d-inline-flex">
                          <i class="ti ti-plus me-1"></i>
                          Add A Leave Category
                        </button>
                        
                        
                      </div>
                  </div>
                </div>
              </div>
          <!-- [ basic-table ] start -->
          <div class="col-md-12">
            
              <div class="card">
                  
                <div class="card-body pc-component">
                  
                  
                  
                  <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active " id="home-tab" data-bs-toggle="tab" href="#home"
                        role="tab" aria-controls="home" aria-selected="true">Pending
                      </a>

                    </li>
                    <li class="nav-item">
                      <a class="nav-link position-relative" id="profile-tab" data-bs-toggle="tab" href="#profile"
                        role="tab" aria-controls="profile" aria-selected="false">Completed
                        
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " id="contact-tab" data-bs-toggle="tab" href="#contact"
                        role="tab" aria-controls="contact" aria-selected="false">All
                        
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane align-items-center  fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                       
                      <div class=" table-border-style table-responsive">
                        <table class="table" id="pc-dt-simple">

                          <thead>
                            <tr>

                              <th  data-sortable="false" > 

                                <input type="checkbox" class="form-check-input" id="checkAll">
                            
                              </th>

                              
                              <th>Name</th>
                              <th>Code</th>
                              <th data-sortable="false">Gender</th>
                              <th>Default days</th>
                              <th data-sortable="false">Accrued</th>
                              
                              <th data-type="date" data-format="YYYY/DD/MM" data-sortable="false">Year Starts</th>
                              <th data-sortable="false">Status</th>

                            </tr>
                          </thead>

                          <tbody>
                              <?php foreach ($leave_c as $leave_categories): ?>
                              <tr>
                                  <td><input class="form-check-input" type="checkbox"></td>
                                  <td><?= htmlspecialchars($leave_categories['name']) ?></td>
                                  <td><?= htmlspecialchars($leave_categories['leave_code']) ?></td>
                                  


                                  <td>
                                    <i class="ti ti-<?= htmlspecialchars($leave_categories['gender']) ?>"></i>
                                  </td>


                                  <td><?= htmlspecialchars($leave_categories['default_days']) ?></td>
                                  <td><?= htmlspecialchars($leave_categories['accrued']) ?></td>
                                 

                                  <td><?= htmlspecialchars($leave_categories['year_starts']) ?></td>

                                  <td>
                                    <span class="badge bg-light-success">Active</span>
                                  </td>
                                  
                              </tr>
                              <?php endforeach; ?>
                          </tbody>

                        </table>
                      </div>
                        
                      </div> 
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <div class="table-responsive" id="pc-dt-filter"> </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="table-responsive" id="pc-dt-filter"> </div>
                    </div>
                  </div>
                </div>
              </div>
    
            
          </div>
          <!-- [ basic-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </section>
    <!-- [ Main Content ] end -->

        <!-- [ footer  ] start -->
        <?php
        include '../components/footer.inc.php';
    ?>
    <!-- [ footer  ] end -->
     
    
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
    <!-- [off canvas] end -->

    
 

    <!-- [Page Specific JS] start -->
    <script src="../assets/js/plugins/simple-datatables.js"></script>

    <script>

      document.ready(function(){
          // Check/Uncheck all checkboxes
          $("#checkAll").click(function() {
              $("tbody input[type='checkbox']").prop('checked', this.checked);
          });
      });
      
    </script>

    <script>
      const dtt = document.createElement('table');
      dtt.classList.add('table');
      const data = {
        headings: ['Name', 'Job', 'Company', 'Ext.', 'Start Date', 'Email', 'Phone No.'],
        data: [
          ['Hedwig F. Nguyen', 'Manager', 'Arcu Vel Foundation', '9875', '03/27/2017', 'nunc.ullamcorper@metusvitae.com', '070 8206 9605'],
          ['Genevieve U. Watts', 'Manager', 'Eget Incorporated', '9557', '07/18/2017', 'Nullam.vitae@egestas.edu', '0800 025698'],
          ['Kyra S. Baldwin', 'Manager', 'Lorem Vitae Limited', '3854', '04/14/2016', 'in@elita.org', '0800 237 8846'],
          ['Stephen V. Hill', 'Manager', 'Eget Mollis Institute', '8820', '03/03/2016', 'eu@vel.com', '0800 682 4591'],
          [
            'Vielka Q. Chapman',
            'Manager',
            'Velit Pellentesque Ultricies Institute',
            '2307',
            '06/25/2017',
            'orci.Donec.nibh@mauriserateget.edu',
            '0800 181 5795'
          ],
          ['Ocean W. Curtis', 'Manager', 'Eu Ltd', '6868', '08/24/2017', 'cursus.et@cursus.edu', '(016977) 9585'],
          ['Kato F. Tucker', 'Manager', 'Vel Lectus Limited', '4713', '11/06/2017', 'Duis@Lorem.edu', '070 0981 8503'],
          ['Robin J. Wise', 'Manager', 'Curabitur Dictum PC', '3285', '02/09/2017', 'blandit@montesnascetur.edu', '0800 259158'],
          ['Uriel H. Guerrero', 'Assistant', 'Mauris Inc.', '2294', '02/11/2018', 'vitae@Innecorci.net', '0500 948772'],
          ['Yasir W. Benson', 'Assistant', 'At Incorporated', '3897', '01/13/2017', 'ornare.elit.elit@atortor.edu', '0391 916 3600'],
          ['Shafira U. French', 'Assistant', 'Nisi Magna Incorporated', '5116', '07/23/2016', 'metus.In.nec@bibendum.ca', '(018013) 26699'],
          ['Casey E. Hood', 'Assistant', 'Lorem Vitae Odio Consulting', '7079', '05/05/2017', 'justo.Praesent@sitamet.ca', '0800 570796'],
          ['Caleb X. Finch', 'Assistant', 'Elit Associates', '3629', '09/19/2016', 'condimentum@eleifend.com', '056 1551 7431']
        ]
      };

      document.querySelector('#pc-dt-filter').appendChild(dtt);

      window.dt = new simpleDatatables.DataTable(dtt, {
        data,
        filters: {
          Job: ['Assistant', 'Manager']
        },
        columns: [
          {
            select: 4,
            type: 'date',
            format: 'MM/DD/YYYY'
          }
        ]
      });
    </script>

    <script type="module">
      import {DataTable} from "../assets/js/plugins/module.js"
      window.dt = new DataTable("#pc-dt-simple");


    </script>

    
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->
</html>
