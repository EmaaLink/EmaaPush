<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bonoroadmin.web.app/vertical-light/app-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 10:49:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bonoro - Responsive Admin Dashboard Template">
        <meta name="author" content="Belostemas">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <title>Bonoro - Responsive Admin Dashboard Template</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho">

        <!--calendar css-->
        <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
    </head>

    <body class="fixed-left"><div id="droba-loader">
        <div class="loader"></div>
    </div>
        <!-- Begin page -->
        <div id="wrapper">

          <!-- Top Bar Start -->
          <div class="topbar">
              <!-- LOGO -->
              <div class="topbar-left">
                  <a href="index-2.html" class="logo">
                        <img class="flgo" src="assets/images/logoc.png" alt="Logo">
                    <img class="slgo" src="assets/images/slogo.png" alt="Logo">
                  </a>
              </div>
              <!-- Button mobile view to collapse sidebar menu -->
              <div class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                      <!-- Page title -->
                      <ul class="nav navbar-nav list-inline navbar-left">
                          <li class="list-inline-item">
                              <button class="button-menu-mobile open-left">
                                  <i class="ti-layout-grid2"></i>
                              </button>
                          </li>
                          <li class="list-inline-item">
                              <h4 class="page-title">Calendar</h4>
                          </li>
                      </ul>
                      <nav class="navbar-custom">
                          <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="hide-phone">
                                <form class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                              <li>
                                  <!-- Notification -->
                                  <div class="notification-box">
                                      <ul class="list-inline mb-0">
                                          <li>
                                              <a href="javascript:void(0);" class="right-bar-toggle">
                                                  <i class="mdi mdi-bell-outline"></i>
                                                  <div class="noti-dot">
                                                      <span class="pulse"></span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                                  <!-- End Notification bar -->
                              </li>
                              <li class="dropdown dropslide">
                                    <a class="nav-link" href="calendar.html#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/images/profile.jpg" alt="user-img" class="rounded-circle img-thumbnail img-responsive">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="calendar.html#"><i class="mdi mdi-account"></i> Profile</a>
                                        <a class="dropdown-item" href="calendar.html#"><i class="mdi mdi-settings"></i> Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="calendar.html#"><i class="mdi mdi-power"></i> Logout</a>
                                    </div>
                                </li>
                          </ul>
                      </nav>
                  </div><!-- end container -->
              </div><!-- end navbar -->
          </div>
          <!-- Top Bar End -->


      
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        
                        <li class="has_sub">
                            <a class="waves-effect"><i class="mdi mdi-view-grid"></i> <span> Dashboard
                                </span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="index-2.html">Dashboard1</a></li>
                                <li><a href="dashboard2.html">Dashboard2</a></li>
                                <li><a href="dashboard3.html">Dashboard3</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi  mdi-web"></i><span>
                                    Widgets</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="widgets.html">Widgets Basic</a></li>
                                <li><a href="widgets-charts.html">Widgets Charts</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-color-fill"></i>
                                <span> UI Elements</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-range-slider.html">Range Slider</a></li>
                                <li><a href="ui-components.html">Components</a></li>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="ui-treeview.html">Tree view</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-google-analytics"></i><span> Charts</span> <i
                                    class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="chart-apex.html">Apexcharts</a></li>
                                <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                <li><a href="chart-other.html">Other Chart</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-emoticon"></i> <span>
                                    Icons</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="icons-material-design.html">Material Design Icons</a></li>
                                <li><a href="icons-font-awesome.html">Font Awesome</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-format-float-left"></i><span> Forms</span> <i
                                    class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-fileupload.html">Form Uploads</a></li>
                                <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-grid-large"></i> <span>
                                    Tables</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                            </ul>
                        </li>
                       
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-cloud"></i> <span> Apps
                                </span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="app-email.html">Email</a></li>
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-typography.html">Typography</a></li>
                                <li><a href="app-profile.html">Profile</a></li>
                                <li><a href="app-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-monitor-multiple"></i><span> Pages</span> <i
                                    class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                            
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-projects.html">Projects</a></li>
                                <li><a href="page-taskboard.html">Taskboard</a></li>
                                <li><a href="page-tour.html">Tour</a></li>
                                <li><a href="page-maps.html">Maps</a></li>
                                <li><a href="page-contact.html">Contact list</a></li>
                                <li><a href="page-invoice.html">Invoice</a></li>
                                <li><a href="page-faq.html">FAQ</a></li>
                                <li><a href="page-gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-lock"></i><span>
                                    Authentication</span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="extra-login.html">Login</a></li>
                                <li><a href="extra-register.html">Register</a></li>
                                <li><a href="extra-recoverpw.html">Recover Password</a></li>
                                <li><a href="extra-lock-screen.html">Lock Screen</a></li>
                                <li><a href="extra-confirm-mail.html">Confirm Mail</a></li>
                                <li><a href="extra-maintenance.html">Maintenance</a></li>
                                <li><a href="extra-comingsoon.html">Coming soon</a></li>
                            
                            </ul>
                        </li>
                 
                          
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-power"></i> <span>Error
                                </span> <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="error-500.html">Error 500</a></li>
                                <li><a href="error-403.html">Error 403</a></li>
                                <li><a href="error-505.html">Error 505</a></li>

                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <div id="calendar"></div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>  <!-- end row -->

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title mt-0"><strong>Add New Event</strong></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title mt-0"><strong>Add a category </strong></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="pink">Pink</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                                <option value="inverse">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   2020 - Bonoro At Belostemas                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <h4 class="mt-3">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="calendar.html#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="calendar.html#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="calendar.html#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="calendar.html#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="calendar.html#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="calendar.html#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
              <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/lang-all.js"></script>

    </body>


</html>
