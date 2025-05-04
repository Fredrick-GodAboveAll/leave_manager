

<?php

require_once '../includes/config.inc.php';

$stmt = $pdo->query("SELECT * FROM   holidays ORDER BY holiday_date");
$holidays =$stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>holidays | fhris</title>
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
                    <h2 class="mb-0"> Holidays </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->

        <div class="row">

          <div class="col-sm-12">
            <div class="card table-card">
              <div class="card-body">
                <div class="text-end p-4 pb-sm-2">
                  <a href="#" class="btn btn-light-secondary d-inline-flex align-item-center" data-bs-toggle="modal" data-bs-target="#customer-edit_add-modal">
                    <i class="ti ti-plus f-18"></i> Add an holiday
                  </a>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover" id="pc-dt-simple">
                    <thead>
                      <tr>
                        
                        <th > 
                          #
                          
                        </th>

                        <th>Holiday Title</th>
                        <th>Date</th>
                        <th>Status</th>
                        
                        <th data-sortable="false" class="text-center">Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($holidays as $holiday): ?>
                      <tr>

                        <td> 
                          <?=$holiday['holiday_id']; ?>
                        </td>

                        <td>
                          <div class="row">
                            <div class="col-auto">
                              <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                class="wid-40 rounded-circle">
                            </div>
                            <div class="col">
                              <h6 class="mb-0"><?=htmlspecialchars($holiday['name']); ?></h6>
                              <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                            </div>
                          </div>
                        </td>
                          <td> 
                            <?=$holiday['holiday_date']; ?>
                          </td>
                        
                        
                        <td>
                            <?=$holiday['is_recurring'] ?
                            '<span class="badge bg-light-success rounded-pill f-12"> Active </span>' :
                            '<span class="badge bg-light-danger rounded-pill f-12"> Inactive </span>'; ?>
                          </td>

                        <td class="text-center">
                          <ul class="list-inline me-auto mb-0">
                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                              <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                data-bs-target="#customer-modal">
                                <i class="ti ti-eye f-18"></i>
                              </a>
                            </li>
                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                              <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                data-bs-target="#customer-edit_add-modal">
                                <i class="ti ti-edit-circle f-18"></i>
                              </a>
                            </li>
                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                              <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                <i class="ti ti-trash f-18"></i>
                              </a>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                      
                    </tbody>
                  </table>
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

    <div class="modal fade" id="customer-modal" data-bs-keyboard="false" tabindex="-1" 
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header border-0 pb-0">
            <h5 class="mb-0">Customer Details</h5>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
              <i class="ti ti-x f-20"></i>
            </a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body position-relative">
                    <div class="position-absolute end-0 top-0 p-3">
                      <span class="badge bg-primary">Single</span>
                    </div>
                    <div class="text-center mt-3">
                      <div class="chat-avtar d-inline-flex mx-auto">
                        <img class="rounded-circle img-fluid wid-60" src="../assets/images/user/avatar-5.jpg"
                          alt="User image">
                      </div>
                      <h5 class="mb-0"><?=htmlspecialchars($holiday['name']); ?></h5>
                      <p class="text-muted text-sm">Manufacturing Director</p>
                      <hr class="my-3 border border-secondary-subtle">
                      <div class="row g-3">
                        <div class="col-4">
                          <h5 class="mb-0">45</h5>
                          <small class="text-muted">Age</small>
                        </div>
                        <div class="col-4 border border-top-0 border-bottom-0">
                          <h5 class="mb-0">86%</h5>
                          <small class="text-muted">Progress</small>
                        </div>
                        <div class="col-4">
                          <h5 class="mb-0">7634</h5>
                          <small class="text-muted">Visits</small>
                        </div>
                      </div>
                      <hr class="my-3 border border-secondary-subtle">
                      <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                        <i class="ti ti-mail"></i>
                        <p class="mb-0">bo@gmail.com</p>
                      </div>
                      <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                        <i class="ti ti-phone"></i>
                        <p class="mb-0">+1 (247) 849-6968</p>
                      </div>
                      <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                        <i class="ti ti-map-pin"></i>
                        <p class="mb-0">Lesotho</p>
                      </div>
                      <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <i class="ti ti-link"></i>
                        <a href="#" class="link-primary">
                          <p class="mb-0">https://anshan.dh.url</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h5>Personal Details</h5>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-0 pt-0">
                        <div class="row">
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Full Name</p>
                            <h6 class="mb-0">Aaron Poole</h6>
                          </div>
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Father Name</p>
                            <h6 class="mb-0">Mr. Ralph Sabatini</h6>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0">
                        <div class="row">
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Country</p>
                            <h6 class="mb-0">Lesotho</h6>
                          </div>
                          <div class="col-md-6">
                            <p class="mb-1 text-muted">Zip Code</p>
                            <h6 class="mb-0">247 849</h6>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 pb-0">
                        <p class="mb-1 text-muted">Address</p>
                        <h6 class="mb-0">507 Sulnek Grove, Tudzovgeh, United States - 37173</h6>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h5>About me</h5>
                  </div>
                  <div class="card-body">
                    <p class="mb-0">Hello, I’m Aaron Poole Manufacturing Director based in international company, Void
                      jiidki me na fep juih ced gihhiwi launke cu mig tujum peodpo.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mb-0">Edit Customer</h5>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
              <i class="ti ti-x f-20"></i>
            </a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-3 text-center">
                <div class="chat-avtar d-inline-flex mx-auto">
                  <img class="rounded-circle img-fluid wid-70" src="../assets/images/user/avatar-5.jpg"
                    alt="User image">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <label class="form-label">Status</label>
                  <select class="form-select">
                    <option>Select Status</option>
                    <option>Complicated</option>
                    <option>Single</option>
                    <option>Relationship</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-label" >Location</label>
                  <textarea class="form-control" rows="3" placeholder="Enter Location"></textarea>
                </div>
                <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                  <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot1">Make Contact Info Public
                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Means that anyone viewing your profile will be able to see your contacts details</span>
                  </label>
                  <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox" id="customSwitchemlnot1" checked="">
                </div>
                <hr class="my-3 border border-secondary-subtle">
                <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                  <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot2">Available to hire
                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Toggling this will let your teammates know that you are available for acquiring new projects</span>
                  </label>
                  <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox" id="customSwitchemlnot2" checked="">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <ul class="list-inline me-auto mb-0">
              <li class="list-inline-item align-bottom">
                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto" data-bs-toggle="tooltip" title="Delete">
                  <i class="ti ti-trash f-18"></i>
                </a>
              </li>
            </ul>
            <div class="flex-grow-1 text-end">
              <button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>

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
      const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
        sortable: false,
        perPage: 5
      });
    </script>

    
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->
</html>
