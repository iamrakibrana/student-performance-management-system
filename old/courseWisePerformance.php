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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Employee Dashboard</title>
  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript"></script>

</head>

<style>
  body {
    background-color: #edeaeb;
    letter-spacing: 1.3px;
  }

  ::placeholder {
    color: rgb(103, 101, 101);
  }

  ::-ms-input-placeholder {
    color: white;
  }

  :-ms-input-placeholder {
    color: white;
  }

  .nav-link {
    color: whitesmoke;
    /* font-size: 18px; */
    transition: .2s;
  }

  .nav-link:hover {
    color: whitesmoke;
    background-color: #016868;
    padding: 5px;
    border-radius: 5px;
    transform: scale(1.02);
  }

  .nav>.nav-links>ul li a {
  padding: 0 8px;
}
</style>

<body>

<div class="nav" style="background-color: #008080; margin-bottom: 50px; font-size: 10px;">
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
        <li><a class="nav-link" href="school_department_program_stats.php"
            target="_self">School/Department/Program-Wise</a></li>
        <li><a class="nav-link" href="courseWisePerformance.php" target="_self">Course-wise</a></li>
        <li><a class="nav-link" href="instructorWisePerformance.php" target="_self">Instructor-wise</a></li>
        <li><a class="nav-link" href="instructorWiseChosenCourse.php" target="_self">Instructor-wise (Chosen Course)</a>
        </li>
        <li><a class="nav-link" href="" target="_self">Dean/Head-wise</a></li>
        <li><a class="nav-link" href="logout.php" target="_self">Logout</a></li>
      </ul>
    </div>
  </div>



  <div class="background">

    <div class="row1">
      <form method="POST">
        <select name="year" class="select">
          <option disabled selected>Year</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
        </select>
        <input class="submitButton" type="submit" name="submitCourseCode" value="Submit" />

    </div>

    <!-- div row-2 -->

    <div style="padding-left:28%; margin-top: 20px; height:50px" class="row2">
      <input style="background-color:white;
                    height:50px;
                    border: 1px solid;
                   cursor: pointer;
                   border-radius: 5px;
                   font-size: 14px;
                   letter-spacing:2px;
                   font-weight: bold;
                    text-transform: uppercase;
                     border: none;
                    outline: none;
                   text-align: center;
                   margin-right:20px;
                    color:rgb(16, 15, 15);" type="text" placeholder="Enter course code" name="course1" />
      <input style="height: 46px;
                  width: 200px;
                      margin-right: 20px;
                     height:50px;
                 display:inline-block;
                   text-align:center;
                  border-radius: 5px;
                      border: none;
                      outline: none;
                  background: white;
                     color: rgb(16, 15, 15);
                     font-size: 14px;
                      letter-spacing:2px;
                    text-transform: uppercase;
                       cursor:pointer;
                       font-weight: bold" type="text" placeholder="Enter course code" name="course2" />
      <input style="background-color:white;
                    height:50px;
                    border: 1px solid;
                   cursor: pointer;
                   border-radius: 5px;
                   font-size: 14px;
                   letter-spacing:2px;
                   font-weight: bold;
                    text-transform: uppercase;
                     border: none;
                    outline: none;
                   text-align: center;
                   margin-right:20px;
                    color:rgb(16, 15, 15);" type="text" placeholder="Enter course code" name="course3" />
      </form>
    </div>

    <div style="height:50px;padding-left:43%;margin-top:15px;">
      <button onclick="viewCourseWise()" class="view">
        view
      </button>
    </div>

    <div class="row3" style="margin-top:5px;">
      <div id="Spring" style="width: 500px; height: 500px; display:inline-block;"></div>
      <div id="Summer" style="width: 500px; height: 500px; display:inline-block;"></div>
      <div id="Autumn" style="width: 500px; height: 500px; display:inline-block;"></div>
    </div>
  </div>

  <?php
if(isset($_POST['submitCourseCode'])){
    $year=$_POST['year'];
    $course1=$_POST['course1'];
    $course2=$_POST['course2'];
    $course3=$_POST['course3'];
  }?>


  <!-- course wise function -->

  <script>
    function viewCourseWise() {
     
    <? php
    $sql = "SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
    FROM student_course_performance_t AS scp, registration_t AS r, section_t AS sec
    WHERE scp.registrationID = r.registrationID AND r.sectionID = sec.sectionID AND
      sec.courseID IN('$course1', '$course2', '$course3') AND sec.semester = 'autumn' AND sec.year = '$year'
    GROUP BY sec.courseID";
      $result = mysqli_query($con, $sql);
    ?>

        google.charts.load('current', { 'packages': ['bar'] });
      google.charts.setOnLoadCallback(drawAutumnChart);
      google.charts.setOnLoadCallback(drawSummerChart);
      google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['course', 'GPA'],
          
          <? php
            while ($data = mysqli_fetch_array($result)) {
          $course = $data['course'];
          $GPA = $data['GPA'];
           ?>
            ['<?php echo $course;?>',<? php echo $GPA;?>],   
           <? php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Autumn',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<? php
$sql = "SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
FROM student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE scp.registrationID = r.registrationID AND r.sectionID = sec.sectionID AND sec.courseID IN('$course1', '$course2', '$course3') AND sec.semester = 'summer' AND sec.year = '$year'
GROUP BY sec.courseID";
      $result = mysqli_query($con, $sql);
?>

        function drawSummerChart() {
          var data = google.visualization.arrayToDataTable([
            ['course', 'GPA'],
          
          <? php
            while ($data = mysqli_fetch_array($result)) {
            $course = $data['course'];
            $GPA = $data['GPA'];
           ?>
              ['<?php echo $course;?>',<? php echo $GPA;?>],   
           <? php   
            }
           ?> 
        ]);

          var options = {
            chart: {
              title: 'Summer',
            },
            bars: 'vertical' // Required for Material Bar Charts.
          };

          var chart = new google.charts.Bar(document.getElementById('Summer'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        <? php
$sql = "SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
FROM student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE scp.registrationID = r.registrationID AND r.sectionID = sec.sectionID AND sec.courseID IN('$course1', '$course2', '$course3') AND sec.semester = 'spring' AND sec.year = '$year'
GROUP BY sec.courseID";
      $result = mysqli_query($con, $sql);
?>

        function drawSpringChart() {
          var data = google.visualization.arrayToDataTable([
            ['course', 'GPA'],
          
          <? php
            while ($data = mysqli_fetch_array($result)) {
            $course = $data['course'];
            $GPA = $data['GPA'];
           ?>
              ['<?php echo $course;?>',<? php echo $GPA;?>],   
           <? php   
            }
           ?> 
        ]);

          var options = {
            chart: {
              title: 'Spring',
            },
            bars: 'vertical' // Required for Material Bar Charts.
          };

          var chart = new google.charts.Bar(document.getElementById('Spring'));
          chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    }
  </script>

</body>

</html>