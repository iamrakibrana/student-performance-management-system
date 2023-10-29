<?php
  include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
      body {
        background-image:url('student_gr.png');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:40% 80%;
        background-position:center;
      background-color: #edeaeb;
    }

    .nav-links {
      font-size: 11px;
      padding: 0 2px;
    }

    .nav-link {
      color: whitesmoke;
      /* font-size: 11px; */
      transition: .2s;
    }

    .nav-link:hover {
      color: whitesmoke;
      background-color: #016868;
      padding: 5px;
      border-radius: 5px;
      transform: scale(1.1);
    }
    </style>

  </head>

  <body>
    
  <div class="nav" style="background-color: #008080; margin-bottom: 50px;">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">
        SPMS 4.0
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <ul>
        <li><a class="nav-link" href="employee_dashboard.php" target="_self">Dashboard</a></li>
        <!-- <li><a class="nav-link" href="school_department_program_stats.php" target="_self">School/Department/Program-wise</a></li> -->
        <li><a class="nav-link" href="courseWisePerformance.php" target="_self">Course-wise</a></li>
        <!-- <li><a class="nav-link" href="instructorWisePerformance.php" target="_self">Instructor-wise</a></li> -->
        <!-- <li><a class="nav-link" href="instructorWiseChosenCourse.php" target="_self">Instructor-wise (Chosen Course)</a></li> -->
        <!-- <li><a class="nav-link" href="enrollmentStatistics.php" target="_self">VC/Dean/Head-wise</a></li> -->
        <li><a class="nav-link" href="logout.php" target="_self">Logout</a></li>
      </ul>
    </div>
  </div>

  </body>

</html>