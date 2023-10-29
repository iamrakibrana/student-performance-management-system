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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  

    <style>
      body {
      background-color: #edeaeb;
      letter-spacing: 1px;
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

    .nav>.nav-links>ul li a {
      padding: 0 10px;
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
        <li><a class="nav-link" href="school_department_program_stats.php"
            target="_self">School/Department/Program-wise</a></li>
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
             <input class="submitButton"
              
             type="submit" name="submit" value="Submit"/>
         </form>
      </div>

      <div class="row2">
        <button onclick="schoolWiseGpa()" class="School-wise">School-wise GPA Trend</button>
        <button onclick="departmentWiseGpa()" class="Department-wise">Department-wise GPA Trend</button>
        <button onclick="programWiseGpa()" class="Program-wise">Program-wise GPA Trend</button>
      </div>
    
     <div class="row3" style="margin-top:20px;"> 
       <div id="Spring" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Summer" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Autumn" style="width: 500px; height: 500px; display:inline-block;"></div>
       
     </div>
</div>    

<?php
if(isset($_POST['submit'])){
  $year=$_POST['year'];
}
?>

<!-- department wise function -->
<script>
    function departmentWiseGpa(){
    <?php
    $sql="SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
    FROM student_t AS s,student_course_performance_t AS scp, 
    registration_t AS r, section_t AS sec
    WHERE r.registrationID=scp.registrationID 
    AND r.studentID=s.studentID AND r.sectionID=sec.sectionID 
    AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY s.departmentID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $department=$data['department'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $department;?>',<?php echo $GPA;?>],   
           <?php   
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


<?php
$sql="SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
FROM student_t AS s,student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE r.registrationID=scp.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND sec.semester='summer' AND sec.year='$year'
GROUP BY s.departmentID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $department=$data['department'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $department;?>',<?php echo $GPA;?>],   
           <?php   
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
<?php
$sql="SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
FROM student_t AS s,student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE r.registrationID=scp.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID 
AND sec.semester='spring' AND sec.year='$year'
GROUP BY s.departmentID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $department=$data['department'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $department;?>',<?php echo $GPA;?>],   
           <?php   
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


<!-- program wise function -->
<script>
function programWiseGpa(){
    <?php
    $sql="SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
    FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
    WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY p.programID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['Program','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $programName=$data['program'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $programName;?>',<?php echo $GPA;?>],   
           <?php   
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


<?php
$sql="SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='summer' AND sec.year='$year'
GROUP BY p.programID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['Program','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $programName=$data['program'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $programName;?>',<?php echo $GPA;?>],   
           <?php   
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
<?php
$sql="SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='spring' AND sec.year='$year'
GROUP BY p.programID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['Program','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $programName=$data['program'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $programName;?>',<?php echo $GPA;?>],   
           <?php   
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

<!-- school wise function -->
<script>
function schoolWiseGpa(){
    <?php
    $sql="SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
    FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
    WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY sch.schoolID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['School','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $school=$data['school'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $school;?>',<?php echo $GPA;?>],   
           <?php   
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


<?php
$sql="SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='summer' AND sec.year='$year'
GROUP BY sch.schoolID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['School','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $school=$data['school'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $school;?>',<?php echo $GPA;?>],   
           <?php   
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
<?php
$sql="SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='spring' AND sec.year='$year'
GROUP BY sch.schoolID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['School','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $school=$data['school'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $school;?>',<?php echo $GPA;?>],   
           <?php   
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