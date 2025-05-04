<!doctype html>
<html lang="en">
    <!-- [Head] start -->
    <head>
        <title>Home | Fhris</title>
        <!-- [Meta] -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
        <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
        <meta name="author" content="CodedThemes">
        <!-- [Favicon] icon -->
        <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
        <!-- [Page specific CSS] start -->
        <link rel="stylesheet" href="../assets/css/plugins/datepicker-bs5.min.css">
        <!-- [Page specific CSS] end -->
        <!-- [Google Font] Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
        <!-- [phosphor Icons] https://phosphoricons.com/ -->
        <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">
        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="../assets/fonts/feather.css">
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="../assets/fonts/material.css">
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
        <link rel="stylesheet" href="../assets/css/style-preset.css">
    </head>
    <!-- [Head] end -->
    <!-- [Body] Start -->
    <body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="dark">

        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
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
        <div class="pc-container">
            <div class="pc-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0)">Online Courses</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h2 class="mb-0">Dashboard</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->

                <!-- [ Main Content ] start -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar bg-light-primary">
                                            <i class="ti ti-users f-24"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1">New Students</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0">400+</h4>
                                            <span class="text-success fw-medium">30.6%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar bg-light-warning">
                                            <i class="ti ti-notebook f-24"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1">Total Course</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0">520+</h4>
                                            <span class="text-warning fw-medium">30.6%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar bg-light-success">
                                            <i class="ti ti-eye f-24"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1">New Visitor</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0">800+</h4>
                                            <span class="text-success fw-medium">30.6%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar bg-light-danger">
                                            <i class="ti ti-credit-card f-24"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1">Total sale</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="mb-0">1,065</h4>
                                            <span class="text-danger fw-medium">30.6%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Courses</h5>
                                   
                                    <select class="form-select rounded-3 form-select-sm w-auto">
                                        <option>Today</option>
                                        <option>Weekly</option>
                                        <option selected="selected">Monthly</option>
                                    </select>
                                </div>
                               
                                <p class="d-inline-flex align-items-center text-success gap-1 mb-0">
                                    <i class="ti ti-arrow-narrow-up"></i>
                                    2.1%
                                </p>
                                <p class="text-muted mb-1">Sales from 1-12 Dec, 2023</p>
                                    
                                </div>
                                <div id="revenue-sales-chart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-calender" id="pc-datepicker-6"></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Invites goal</h5>
                                    <div class="dropdown">
                                        <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical f-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Weekly</a>
                                            <a class="dropdown-item" href="#">Monthly</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="invites-goal-chart"></div>
                                <div class="text-center">
                                    <span class="badge bg-light-success rounded-pill f-12 py-2 px-3">+10%</span>
                                    <p class="text-muted mb-1">You succeed earn $240 today, its higher than yesterday</p>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="text-center d-inline-block px-md-3">
                                                <p class="mb-1 text-muted">Target</p>
                                                <h5 class="d-inline-flex align-items-center gap-1 mb-0">
                                                    $20k <i class="ti ti-arrow-narrow-down text-danger"></i>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-center d-inline-block px-md-3">
                                                <p class="mb-1 text-muted">Revenue</p>
                                                <h5 class="d-inline-flex align-items-center gap-1 mb-0">
                                                    $16k <i class="ti ti-arrow-narrow-up text-success"></i>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-center d-inline-block px-md-3">
                                                <p class="mb-1 text-muted">Today</p>
                                                <h5 class="d-inline-flex align-items-center gap-1 mb-0">
                                                    $1.5k <i class="ti ti-arrow-narrow-down text-danger"></i>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-lg-4 col-md-6">
                    
                
                        <div class="card-body">
                            <h5>TASKS</h5>
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active " id="home-tab" data-bs-toggle="tab" href="#home"
                                  role="tab" aria-controls="home" aria-selected="true">Pending</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link position-relative" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                  role="tab" aria-controls="profile" aria-selected="false">Completed
                                  <span class="badge  bg-light-info"> 2 </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " id="contact-tab" data-bs-toggle="tab" href="#contact"
                                  role="tab" aria-controls="contact" aria-selected="false">All
                                  <span class="badge bg-light-info"> 1 </span>
                                </a>
                              </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane align-items-center  fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="mb-0"> No Tasks Assigned </p>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="mb-0">It </p>
                              </div>
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <p class="mb-0">There are many.</p>
                              </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="mb-0">Visitors</h5>
                                    <div class="dropdown">
                                        <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical f-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Weekly</a>
                                            <a class="dropdown-item" href="#">Monthly</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="visitors-bar-chart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Course States</h5>
                                    <button class="btn btn-sm btn-link-primary">View All</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Teacher</th>
                                                <th>Rating</th>
                                                <th>Earring</th>
                                                <th>Sale</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Web Designing Course</td>
                                                <td>Airi Satou</td>
                                                <td class="f-w-600">
                                                    <i class="fas fa-star text-warning"></i>
                                                    4.8
                                                </td>
                                                <td>$200</td>
                                                <td>
                                                    <span class="donut">5/7</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-eye f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-edit f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>UI/UX Training Course</td>
                                                <td>Ashton Cox</td>
                                                <td class="f-w-600">
                                                    <i class="fas fa-star text-warning"></i>
                                                    5.0
                                                </td>
                                                <td>$100</td>
                                                <td>
                                                    <span class="donut">4/7</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-eye f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-edit f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PHP Training Course</td>
                                                <td>Bradley Greer</td>
                                                <td class="f-w-600">
                                                    <i class="fas fa-star text-warning"></i>
                                                    4.9
                                                </td>
                                                <td>$80</td>
                                                <td>
                                                    <span class="donut">2/7</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-eye f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-edit f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bootstrap 5 Course</td>
                                                <td>Brielle Williamson</td>
                                                <td class="f-w-600">
                                                    <i class="fas fa-star text-warning"></i>
                                                    4.4
                                                </td>
                                                <td>$150</td>
                                                <td>
                                                    <span class="donut">6/7</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-eye f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-edit f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C Training Course</td>
                                                <td>Cedric Kelly</td>
                                                <td class="f-w-600">
                                                    <i class="fas fa-star text-warning"></i>
                                                    4.3
                                                </td>
                                                <td>$50</td>
                                                <td>
                                                    <span class="donut">3/7</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-eye f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-edit f-20"></i>
                                                    </a>
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
        <!-- [ Main Content ] end -->

        <?php
          include '../components/footer.inc.php';
        ?>


        <!-- Required Js -->
        <script src="../assets/js/plugins/popper.min.js"></script>
        <script src="../assets/js/plugins/simplebar.min.js"></script>
        <script src="../assets/js/plugins/bootstrap.min.js"></script>
        <script src="../assets/js/fonts/custom-font.js"></script>
        <script src="../assets/js/fonts/custom-ant-icon.js"></script>
        <script src="../assets/js/pcoded.js"></script>
        <script src="../assets/js/theme.js"></script>
        <script src="../assets/js/plugins/feather.min.js"></script>


        <script>
            layout_change('dark');
        </script>
        <script>
            change_box_container('false');
        </script>
        <script>
            layout_rtl_change('false');
        </script>
        <script>
            preset_change('preset-1');
        </script>
        <script>
            font_change('Public-Sans');
        </script>



        <!-- [Page Specific JS] start -->
        <!-- bootstrap-datepicker -->
        <script src="../assets/js/plugins/datepicker-full.min.js"></script>
        <script src="../assets/js/plugins/apexcharts.min.js"></script>
        <script src="../assets/js/plugins/peity-vanilla.min.js"></script>
        <script src="../assets/js/admin/course-dashboard.js"></script>
        <!-- [Page Specific JS] end -->


        <?php
          include '../components/OffCanvas.inc.php';
        ?>

    </body>
    <!-- [Body] end -->
</html>
