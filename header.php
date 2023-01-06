<?php 
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: log");
  exit;
}
      include'database.php';
      
function my_simple_crypt( $string, $action = 'e' ) {
  // you may change these values to your own
  $secret_key = 'mwa_encyption';
  $secret_iv = '9886162566';

  $output = false;
  $encrypt_method = "AES-256-CBC";
  $key = hash( 'sha256', $secret_key );
  $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

  if( $action == 'e' ) {
      $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
  }
  else if( $action == 'd' ){
      $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
  }

  return $output;
}
$table_header="SVK ACADEMY CHINTAMANI";
$logo='<img src="skl.png" width="200" height="100" alt="College Logo"/>';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Smashing Knight | SK</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="skl.png" />
  </head>
  <body>
    <div class="container-scroller" >
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu" >
        <nav class="navbar top-navbar col-lg-12 col-12 p-0" style="background-color: black;">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index">
                <img src="sk.png" alt="logo" >
                
              </a>
              <a class="navbar-brand brand-logo-mini" href="index">SMASHING KNIGHT</a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"  >
              <ul class="navbar-nav mr-lg-2" >
                
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown" >
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false" >
                    <div class="nav-profile-img">
                      <img src="skl.png" alt="image" />
                    </div>
                    <div class="nav-profile-text" >
                      <p class="text-white font-weight-semibold m-0"> <?php echo $_SESSION['username']?></p>
                      <span class="font-15 online-color " style="color:white"> Logged In <br>
                      </span>
                      <small style="font-size:x-small;"><?php  echo "LOGIN IP:". $clientIPAddress=$_SERVER['REMOTE_ADDR']; ?></small>

                    </div>
                  </a>
                  
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle" style="color: white;">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar" style="background-color: black;">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-file-document menu-icon"></i>
                  <span class="menu-title">Student Data</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                  <li class="nav-item">
                      <a class="nav-link" href="AddStudents">Add Students</a>
                    </li> 
                     <li class="nav-item">
                      <a class="nav-link" href="UpdateStudent">Update Students</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="DeleteStudent">Delete Student</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="StudentData">Students Data & Export</a>
                    </li>
               
                   
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-contact-mail menu-icon"></i>
                  <span class="menu-title">Student Attendance</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="StudentAttendance">Mark Attendance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="AttendanceReportGeneral">Attendance Report[General]</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="AttendanceReportClass">Attendance Report[Class]</a>
                    </li>
                   
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-content-paste menu-icon"></i>
                  <span class="menu-title">Academics</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                  <li class="nav-item">
                      <a class="nav-link" href="AddExamTimeTable">Add Exam Time Table</a>
                    </li> 
                  <li class="nav-item">
                      <a class="nav-link" href="MarksEntryMain">Students Marks Entry</a>
                    </li> 
                     <li class="nav-item">
                      <a class="nav-link" href="MarksReport">Marks List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="MarksReportCet">Marks List[CET]</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-cloud-print menu-icon"></i>
                  <span class="menu-title">Printing</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                  <li class="nav-item">
                      <a class="nav-link" href="AdmitCardSinglePrintMain">Admit Card Print [Single]</a>
                    </li> 
                  <li class="nav-item">
                      <a class="nav-link" href="AdmitCardBulkPrintMain">Admit Card Print [BULK]</a>
                    </li> 
                  <li class="nav-item">
                      <a class="nav-link" href="PrintMarksListMain">Students Marks Card Print</a>
                    </li> 
                     <li class="nav-item">
                      <a class="nav-link" href="StudyCertificateMain">Study Certificate</a>
                    </li>
                  </ul>
                </div>
              </li>
            
             
             
              <li class="nav-item">
                <div class="nav-link d-flex">
                  <button class="btn btn-sm bg-danger text-white " onclick="Logout()"> Logout </button>
                  &nbsp;
                  &nbsp;
                  <a class="text-white" href="index"><i class="mdi mdi-home-circle"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <script>
                  function Logout(){
                    window.location.href="Logout";
                  }
      </script>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">