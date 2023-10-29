<?php
  include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="./S.png" rel="icon">
  <title>School Comparison</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Style.css">

  <style>
    body{
      margin: 0;
      padding: 0;
    }
  </style>

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="employee_dashboard.php" style="background-color: #fafafa">
        <div class="sidebar-brand-icon">
          <img src="./old/S.png">
        </div>
        <div class="sidebar-brand-text mx-3 text-dark">SPMS 4.0</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="employee_dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <!-- PLO Analysis -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>PLO Analysis</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">PLO Analysis</h6>
            <a class="collapse-item" href="ploAnalysisDepartmentProgramSchoolAverage.php">PLO Analysis (Department,<br>Program, School Average)</a>
            <a class="collapse-item" href="ploAnalysisOverall.php">PLO Analysis (Overall,<br> CO wise, Course wise)</a>
          </div>
        </div>
      </li>
      <!-- / PLO Analysis -->

      <!-- PLO Status -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStatus"
          aria-expanded="true" aria-controls="collapseStatus">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>PLO Status</span>
        </a>
        <div id="collapseStatus" class="collapse" aria-labelledby="headingStatus" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">PLO Status</h6>
            <a class="collapse-item" href="ploComparisonStudent.php">PLO Comparison (Student)</a>
            <a class="collapse-item" href="ploComparisonCourse.php">PLO Comparison (Course)</a>
            <a class="collapse-item" href="ploComparisonProgram.php">PLO Comparison (Program)</a>
            <a class="collapse-item" href="ploComparisonSchool.php">PLO Comparison (School)</a>
            <a class="collapse-item" href="ploComparisonDepartment.php">PLO Comparison (Dept)</a>
          </div>
        </div>
      </li>
      <!-- / PLO Status -->

      <!-- Spider Chart -->
      <li class="nav-item">
        <a class="nav-link" href="spiderChart.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Spider Chart</span>
        </a>
      </li>
      <!-- / Spider Chart -->

      <!-- Data Entry -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEntry"
          aria-expanded="true" aria-controls="collapseEntry">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Entry</span>
        </a>
        <div id="collapseEntry" class="collapse" aria-labelledby="headingEntry" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data</h6>
            <a class="collapse-item" href="addExam.php">Add Exam</a>
            <!-- <a class="collapse-item" href="viewExam.php">View Exam</a> -->
            <a class="collapse-item" href="viewStudentAnswerScript.php">Evaluate Exam</a>
          </div>
        </div>
      </li>
      <!-- / Data Entry -->

      <!-- Course Outline -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourse"
          aria-expanded="true" aria-controls="collapseCourse">
          <i class="fas fa-book-open"></i>
          <span>Course Outline</span>
        </a>
        <div id="collapseCourse" class="collapse" aria-labelledby="headingCourse" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">COurse Outline</h6>
            <a class="collapse-item" href="createCourseOutline.php">Create Course Outline</a>
            <a class="collapse-item" href="viewCourseOutline.php">View Course Outline</a>
          </div>
        </div>
      </li>
      <!-- / Course Outline -->

      <!-- Enrollment Status -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEnrollment"
          aria-expanded="true" aria-controls="collapseEnrollment">
          <i class="fas fa-laptop-code"></i>
          <span>Enrollment Status</span>
        </a>
        <div id="collapseEnrollment" class="collapse" aria-labelledby="headingEnrollment" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Enrollment</h6>
            <a class="collapse-item" href="enrollmentStatistics.php">Student Enrollment</a>
          </div>
        </div>
      </li>
      <!-- / Enrollment Status -->

      <!-- Student Performance -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-thumbs-up"></i>
          <span>Student Performance</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Performance</h6>
            <a class="collapse-item" href="school_department_program_stats.php">School, Department,<br> Program Wise</a>
            <a class="collapse-item" href="courseWisePerformance.php">Course Wise</a>
            <a class="collapse-item" href="instructorWisePerformance.php">Instructor Wise</a>
            <a class="collapse-item" href="instructorWiseChosenCourse.php">Instructor Wise <br>
               (Chosen)</a>
            <a class="collapse-item" href="vc-dean.php">VC, Dean, Head Wise</a>
          </div>
        </div>
      </li>

      <!-- CSV -->
      <li class="nav-item">
        <a class="nav-link" href="upload.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Upload file</span>
        </a>
      </li>
      <!-- / CSV -->

      <!-- / Student Performance -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-thumbs-up"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-palette"></i>
          <span>UI Colors</span>
        </a>
      </li> -->


      <!-- Users -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Users
      </div>
      <li class="nav-item">
        <a class="nav-link" href="support.php">
          <i class="fas fa-headphones"></i>
          <span>Support</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <!-- / Users -->

      <!-- <div class="version" id="version-ruangadmin"></div> -->
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #008080">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <!-- search -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #008080;">
                    <div class="input-group-append">
                      <button class="btn btn-info" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- / search -->

            <!-- notifications -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <!-- / notifications -->

            <!-- massages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-warning badge-counter">2</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Udin Cilok · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-default"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Jaenab · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            <!-- / massages -->

            <!-- admin user -->
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">User</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
            <!-- / admin user -->
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">PLO Comparison School-Wise</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">plo-comparison-school-wise</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Total Students Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Students</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1,58,570</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Total Students -->

            <!-- Active Students Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Active Students</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1,30,988</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-info mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Active Studets -->

            <!-- Visited Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Visited</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">2,94,115</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-map-marked-alt fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / visited card -->

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Faculty</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">485</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-info mr-2"><i class="fas fa-arrow-up"></i> 1.10%</span>
                        <span>Since yesterday</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chalkboard-teacher fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / pending request card example -->

            <!-- Data section -->
            <div class="col-lg-12">
              <div class="card mb-4" style="height: 860px">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">PLO Comparison Course</h6>
                </div><hr>
                <div class="card-body">
                  <div class="chart-area">
                    <div>
                      <center>
  <form method="POST">

  <select style="margin-left: 10px;" name="schoolID" class="select-a">
             <option disabled selected>School</option>
             <option value="SETS">SETS</option>
             <!-- <option value="EEE231">EEE231</option> -->
             <!-- <option value="EEE233">EEE233</option> -->
             <!-- <option value="ENG101">ENG101</option> -->
             <option value="SBE">SBE</option>
             <!-- <option value="MKT101">MKT101</option> -->
    </select>

    <select style="margin-left: 10px;" name="year" class="select">
      <option disabled selected>Year</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
    </select>
    <input class="submit_Button btn btn-outline-dark text-center" type="submit" name="submit" value="Submit"/>

  </form>
</div>

<div style="height:50px;padding-left:43%;margin-top:15px;">
  <button onclick="view()" class="view">
    view
  </button>
</div>

<div class="row3" style="margin-top:5px;"> 
       <div id="Spring"></div>
       <div id="Summer"></div>
       <div id="Autumn"></div>
</div>
</div>



<!-- PHP -->
<?php
    if(isset($_POST['submit'])){
    $year=$_POST['year'];
    $schoolID=$_POST['schoolID'];
  }?>

<script>
    function view(){
     
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM section_t AS sec, plo_t AS plo, answer_t AS ans, question_t AS q, 
    registration_t AS r, co_t AS co, student_t AS s, department_t AS d
    WHERE r.sectionID=sec.sectionID AND r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND sec.year='$year' AND r.studentID=s.studentID AND sec.semester='spring'
     AND s.departmentID=d.departmentID AND d.schoolID='$schoolID'
    GROUP BY plo.ploNum
    ORDER BY plo.ploNum";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['PLO','Achieved','Expected'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
           ?>
           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo '70';?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Semester Wise PLO Achievement Comparison for School (Autumn)',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<?php
$sql="SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM section_t AS sec, plo_t AS plo, answer_t AS ans, question_t AS q, 
registration_t AS r, co_t AS co, student_t AS s, department_t AS d
WHERE r.sectionID=sec.sectionID AND r.registrationID=ans.registrationID 
AND ans.examID=q.examID
AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND sec.year='$year' AND r.studentID=s.studentID AND sec.semester='summer' 
AND s.departmentID=d.departmentID AND d.schoolID='$schoolID'
GROUP BY plo.ploNum
ORDER BY plo.ploNum";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['PLO','Achieved','Expected'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
            $ploNum="PLO".$data['ploNum'];
            $percent=$data['percent'];
           ?>
           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo '70';?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Semester Wise PLO Achievement Comparison for School (Summer)',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Summer'));

        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
<?php
$sql="SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM section_t AS sec, plo_t AS plo, answer_t AS ans, question_t AS q, 
registration_t AS r, co_t AS co, student_t AS s, department_t AS d
WHERE r.sectionID=sec.sectionID AND r.registrationID=ans.registrationID 
AND ans.examID=q.examID
AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND sec.year='$year' AND r.studentID=s.studentID AND sec.semester='autumn' 
AND s.departmentID=d.departmentID AND d.schoolID='$schoolID'
GROUP BY plo.ploNum
ORDER BY plo.ploNum";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['PLO','Achieved','Expected'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
           ?>
           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo '70';?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Semester Wise PLO Achievement Comparison for School (Spring)',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Spring'));
        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }

  }

</script>
            <!-- / Data Section -->


  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>