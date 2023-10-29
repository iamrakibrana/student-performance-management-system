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
  <title>Create Outline</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
          <img src="./S.png">
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

      <!-- PLO Status -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStatus"
          aria-expanded="true" aria-controls="collapseStatus">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Analysis</span>
        </a>
        <div id="collapseStatus" class="collapse" aria-labelledby="headingStatus" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Analysis</h6>
            <a class="collapse-item" href="ploComparisonStudent.php">PLO Analysis</a>
            <a class="collapse-item" href="ploComparisonCourse.php">PLO Analysis</a>
          </div>
        </div>
      </li>
      <!-- / PLO Status -->

      <!-- Grade  -->
      <li class="nav-item">
        <a class="nav-link" href="grade.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grade</span>
        </a>
      </li>
      <!-- / Grade  -->

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
            <a class="collapse-item" href="instructorWiseChosenCourse.php">Instructor Wise (Chosen)</a>
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
            <h1 class="h3 mb-0 text-gray-800">Create Outline</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">create-course-outline</li>
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

            <!-- select data -->
            <div class="col-lg-12">
              <div class="card mb-4" style="height: 4660px">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Create Course Outline</h6>
                </div><hr>
                <div class="card-body">
                  <div class="chart-area">
                    <div>
<center>
<form action="createCourseOutlineConfig.php" method="POST">
  <div class="course_outline_top">
<div style="margin-top:10px;" class="course_outline_head">
    <div class="rectangle"><p class=text_of_headers>Course Outline</p></div>
    <table>
        <tr>
            <th>Course Code</th>
            <td><input type="text" class="course-title" placeholder="Enter Course Code" name="courseCode"></td>
            <th>Course Title</th>
            <td><input type="text" class="course-title" placeholder="Enter Course Title" name="courseTitle"></td>
        </tr>
        <tr>
            <th>Section</th>
            <td><input type="text" class="course-title" placeholder="Enter Section" name="secNum"></td>
            <th>Prerequisite(if any)</th>
            <td><input type="text" class="course-title" placeholder="Enter Prerequisite" name="prerequisite"></td>
        </tr>
        <tr>
            <th>Credit Value</th>
            <td><input type="text" class="course-title" placeholder="Enter Credit Value" name="creditValue"></td>
            <th>Semester</th>
            <td><input type="text" class="course-title" placeholder="Enter Semester" name="semesterName"></td>
        </tr>
      </table>
  </div>

  <div class="course_description">
    <div class="rectangle"><p class=text_of_headers>Course Description</p></div>
    <textarea name="courseDescription" class="text-area" cols="30" rows="10" placeholder="Enter Course Description"></textarea>
    </div>

  <div class="course_objective">
    <div class="rectangle"><p class=text_of_headers>Course Objective</p></div>
    <textarea name="courseObjective" class="text-area" cols="30" rows="10" placeholder="Enter Course Objective"></textarea>
  </div>
  
  <div class="course_policy">
    <div class="rectangle"><p class=text_of_headers>Course Policy</p></div>
    <p>a. It is the student’s responsibility to gather information about the assignments/project and cover topics 
        during the lectures missed. Regular class attendance is mandatory. Points will be taken off for missing 
        classes. Without 70% of attendance, sitting for the final exam is NOT allowed. Students should come on 
        time to get the attendance. In the event of failing 70% of attendance, a student will receive a W grade 
        automatically. 
        <br>
        b. Same project work is assigned to all sections. Students should work in groups for the project. They are 
        required to prepare a final report on the project which will be incrementally developed through 
        assignments. 
        <br>
        c. The date and syllabus of class tests, Mid-Term and Final-Term will be announced in the class. There is NO 
        provision for make-up. 
        <br>
        d. Both the Mid-Term and Final-Term exams will be coordinated exams and will be held on a specific date 
        for all the sections. 
        <br>
        e. The reading materials for each class will be given prior to that class so that students may have a cursory 
        look into the materials. 
        <br>
        f. Class participation is vital for a better understanding of the topics of this course. Students are invited to 
        raise questions.
        <br>
        g. Students should take tutorials with the instructor during office hours. Prior appointment is required.
        <br>
        h. Students must maintain the IUB code of conduct and ethical guidelines offered by the school of computer 
        science and engineering.
        <br>
        i. No working mobile phones are allowed in class. Using one for any purpose will result in serious 
        consequences.
    </p>
  </div>

  <div class="academic_dishonesty">
    <div class="rectangle"><p class=text_of_headers>ACADEMIC DISHONESTY</p></div>
    <p> a. A student who cheats, plagiarizes, or furnishes false, misleading information in the course is subject to 
        disciplinary action up to and including an F grade in the course and/or suspension/expulsion from the 
        University.
        <br>
        b. Students must maintain the code of IUB.
        <br>
        c. The goal of homework is to give you practice in mastering the course material. Consequently, you are 
        encouraged to collaborate on problem sets. In fact, students who form study groups generally do better on 
        exams than do students who work alone. If you do work in a study group, however, you owe it to yourself 
        and your group to be prepared for your study group meeting. Specifically, you should spend at least 30-45 
        minutes trying to solve each problem beforehand by yourself. If your group is unable to solve a problem, 
        talk to other groups or ask your recitation instructor or teaching assistant assigned to your class.
        <br>
        d. You must write up each problem solution by yourself without assistance. It is a violation of this policy to 
        submit a problem solution that you cannot orally explain to a member of the course staff.
        <br>
        e. No collaboration whatsoever is permitted during examination.
        <br>
        f. Plagiarism and other anti-intellectual behavior cannot be tolerated in any academic environment that 
        prides itself on individual accomplishment. If you have any questions about the collaboration policy, or if 
        you feel that you may have violated the policy, please talk to one of the course staff. Although the course 
        staff is obligated to deal with cheating appropriately, we are more understanding and lenient if we find out 
        from the transgressor himself or herself rather than from a third party or by ourselves.
    </p>

  </div>

  <div class="student_with_disability_and_stress">
    <div class="rectangle"><p class=text_of_headers>STUDENT WITH DISABILITIES AND STRESS</p></div>
    <p>Students with disabilities are required to inform the Department of Computer Science & Engineering of any 
        specific requirement for classes or examination as soon as possible. Additionally, if you experience significant 
        stress or worry, changes in mood, or problems eating or sleeping this semester, whether because of this or 
        any other courses or factors, please do not hesitate to reach out immediately, at any hour, to any of the 
        course’s heads to discuss.
        </p>
  </div>

  <div class="non_discremination_policy">
    <div class="rectangle"><p class=text_of_headers>NON DISCREMINATION POLICY</p></div>
    <p>The course and University policy prohibit discrimination based on race, color, religion, sex, marital or parental 
        status, national origin or ancestry, age, mental or physical disability, sexual orientation, military status. If you 
        see either by course instructor or any other person related to course showing any form of discrimination, 
        please inform the proctors office of the wrongdoing.
        </p>
  </div>

  <div class="course_content">
    <div class="rectangle"><p class=text_of_headers>COURSE CONTENT</p></div>
    <textarea name="courseContent" class="text-area" cols="30" rows="10" placeholder="Enter Course Content"></textarea>
  </div>

  <select style="width:200px; margin-top:15px; margin-bottom:15px;" name="cloCount" class="select">
            <option disabled selected>No. of CLOs</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
         </select>

  <div class="course_learning_outcome_matrix">
    <div class="rectangle"><p class=text_of_headers>COURSE LEARNING OUTCOME (CLO) MATRIX</p></div>
    <table>
        <tr >
            <th rowspan="2">CLOs</th>
            <th rowspan="2">CO Description</th>
            <th colspan="4">Blooms Taxonomy</th>
            <th rowspan="2">PLO Assessed</th>
            <th rowspan="2">CLO – PLO Correlation **</th>
        </tr>
        <tr >
          <th>C</th>
          <th>P</th>
          <th>A</th>
          <th>S</th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum1"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a1"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s1"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo1"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation1"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum2"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a2"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s2"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo2"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation2"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum3"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a3"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s3"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo3"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation3"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum4"> </th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a4"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s4"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo4"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation4"></th>
        </tr>
        <tr >
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum5"> </th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a5"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s5"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo5"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation5"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum6"> </th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a6"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s6"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo6"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation6"></th>
        </tr>
        <tr >
          <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum7"></th>
          <th><input type="text" class="course-title" placeholder="Enter Description" name="clo7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="c7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="p7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="a7"></th>
          <th><input type="text" class="course-title" placeholder="Enter" name="s7"></th>
          <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo7"></th>
          <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation7"></th>
        </tr>
          <th colspan="8">*Bloom's Learning Level: Numbers signifies the Level of Bloom's skills.<br> **CLO – PLO Correlation: 3 – high, 2 – medium, 1- low</th>
        </tr>
    
    </table>
  </div>

  
    <select style="width:200px; margin-top:15px; margin-bottom:15px;" name="topicNum" class="select">
            <option disabled selected>No. of Topic</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
         </select>
    

  <div class="lesson_planning_with_mapping_of_CLO">
    <div class="rectangle"><p class=text_of_headers>LESSON PLANNING WITH MAPPING OF CLO,TEACHING AND ASSESSMENT STRATEGIES</p></div>
    <table>
        <tr>
            <th>Week</th>
            <th>Topic</th>
            <th>Teaching-Learning Strategy</th>
            <th>Assessment Stetragy</th>
            <th>Corresponding CLOs</th>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic1"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy1"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy1"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo1"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic2"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy2"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy2"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo2"></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic3"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy3"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy3"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo3"></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic4"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy4"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy4"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo4"></td>
        </tr>
        <tr>
            <td>5</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic5"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy5"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy5"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo5"></td>
        </tr>
        <tr>
        <td>6</td>
        <td><input type="text" class="course-title" placeholder="Enter" name="topic6"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy6"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy6"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo6"></td>
        </tr>
        <tr>
            <td>7</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic7"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy7"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy7"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo7"></td>
        </tr>
        <tr>
            <td>8</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic8"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy8"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy8"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo8"></td>
        </tr>
        <tr>
            <td>9</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic9"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy9"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy9"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo9"></td>
        </tr>
        <tr>
            <td>10</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic10"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy10"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy10"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo10"></td>
        </tr>
        <tr>
            <td>11</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic11"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy11"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy11"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo11"></td>
        </tr>
        <tr>
            <td>12</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic12"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy12"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy12"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo12"></td>
        </tr>
        <tr>
            <td>13</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic13"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy13"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy13"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo13"></td>
        </tr>
        <tr>
            <td>14</td>
            <td><input type="text" class="course-title" placeholder="Enter" name="topic14"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy14"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy14"></td>
            <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo14"></td>
        </tr>
      </table>

  </div>

  <select style="width:220px; margin-top:15px; margin-bottom:15px;" name="assessmentCount" class="select">
            <option disabled selected>No. of Assessments</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
         </select>

  <div class="assessment_and_evaluation">
    <div class="rectangle"><p class=text_of_headers>ASSESSMENT AND EVALUATION</p></div>
    <table>
    <tr>
      <th>Assessment Type</th>
      <th>Assessment Tools</th>
      <th>Marks Distribution</th>
      <th>Blooms Category</th>
      <th>Sub Total</th>
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType1"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool1"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution1"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory1"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal1"></td>
    </tr>
    <tr>
      
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool2"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution2"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory2"></td>
    </tr>
    <tr>
      
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool3"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution3"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory3"></td>
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType2"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool4"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution4"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory4"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal2"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool5"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution5"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory5"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool6"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution6"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory6"></td>
      
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType3"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool7"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution7"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory7"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal3"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool8"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution8"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory8"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool9"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution9"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory9"></td>
      
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType4"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool10"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution10"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory10"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal4"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool11"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution11"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory11"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool12"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution12"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory12"></td>
      
    </tr>
    <tr>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType5"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool13"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution13"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory13"></td>
      <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal5"></td></td>
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool14"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution14"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory14"></td>
      
    </tr>
    <tr>
      <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool15"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution15"></td>
      <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory15"></td>
      
    </tr>
    <tr>
      <td td colspan="4" style="text-align:right;font-weight:bolder;"></td>
      <td style="font-weight:bolder;text-align:center;">Total : 100%</td>
    </tr>
    
    </table>

  </div>

  

    <p class="text-center font-weight-bold">The following chart will be followed for grading. Please note that for each category.<br>
        * Numbers are inclusive<br></p>

 

  <div style="margin-bottom:15px;" class="grades">
    <table>
        <tr>
            <th>A</th>
            <th>A-</th>
            <th>B+</th>
            <th>B</th>
            <th>B-</th>
            <th>C+</th>
            <th>C</th>
            <th>C-</th>
            <th>D+</th>
            <th>D</th>
            <th>F</th>
        </tr>
        <tr>
            <td>90-100</td>
            <td>85-89</td>
            <td>80-84</td>
            <td>75-79</td>
            <td>70-74</td>
            <td>65-69</td>
            <td>60-64</td>
            <td>55-59</td>
            <td>50-54</td>
            <td>45-49</td>
            <td>0-44</td>
            
            
        </tr>
      </table>
  </div>

  <div class="referance_book">
    <div class="rectangle"><p class=text_of_headers>REFERENCE BOOK AND ADDITIONAL MATERIALS</p></div>
    <textarea name="refMaterials" class="text-area" cols="30" rows="10" placeholder="Enter Reference Materials"></textarea>
  </div>
   <input class="submit_Button btn btn-outline-dark text-center" style="margin-left: 0" type="submit" name="submit" value="Submit"/>
</form>  
</div>   
                  </div>
                </div>
              </div>
            </div>
</dev>
            <!-- / select data -->


          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>


  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>  
</body>

</html>