<?php
session_start();

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
    <link rel="stylesheet" href="questionform.css">

    <style>
        body{
            background-color:#edeaeb;
        }
        ::placeholder {
          color: rgb(154, 153, 153)
        }
        ::-ms-input-placeholder {
      color: white;
    }

    :-ms-input-placeholder {
      color: white;
    }

    .paragraph {
      display: inline-block;
      font-weight: bold;
      color: rgb(12, 12, 12);
      font-size: 20px;
    }

    label {
      font-size: 20px;
      text-transform: uppercase;
    }

    .main-container {
      border: 3px solid #017286;
      margin-top: 15px;
      margin-bottom: 15px;
      width: 75%;
    }

    .submitButton {
      background: transparent;
      color: rgb(29, 29, 29);
      border: 2px solid rgb(0, 0, 0);
      font-size: 20px;
      letter-spacing: 2px;
      padding: 5px 30px;
      text-transform: uppercase;
      letter-spacing: .3rem;
      cursor: pointer;
      display: inline-block;
      margin: 30px 30px;
      -webkit-transition: all 0.4s;
      -moz-transition: all 0.4s;
      transition: all 0.4s;
      border-radius: 13px;

    }

    input.submitButton:hover {
      background-color: black;
      color: white;
      -webkit-transition: all 0.4s;
      -moz-transition: all 0.4s;
      transition: all 0.4s;
    }

    .nav-link {
      color: whitesmoke;
      font-size: 18px;
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
        <li><a class="nav-link" href="addExam.php" target="_self">Add Exam</a></li>
        <li><a class="nav-link" href="viewExam.php" target="_self">View Exam</a></li>
        <li><a class="nav-link" href="logout.php" target="_self">Logout</a></li>
      </ul>
    </div>
  </div>

      

      <form method="post">
      <div style="display:flex;justify-content:space-evenly;margin-top:15px;">
        
        <input type="text" style="background-color:#ffffff;height:36px;cursor: auto;border-radius: 5px;
      font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
      outline:none;text-align:center;color:rgb(18, 18, 18);width:250px;margin-top:0px;" 
           placeholder="Exam Name" name="examName"/>


      <select style="width:250px;margin-left:0px;margin-top:0px;" name="courseID" class="select">
     <option disabled selected>Course</option>
     <option value="CSC101">CSC101</option>
      <option value="EEE131">EEE131</option>
      <option value="ENG101">ENG101</option>
     </select>              

    <select style="width:250px;margin-left:0px;margin-top:0px;" name="sectionNum" class="select">
    <option disabled selected>Section</option>
    <option value="1">section-1</option>
    <option value="2">section-2</option>
    <option value="3">section-3</option>
    <option value="4">section-4</option>
    </select>  

    </div>  <!-- div row-1 ends here -->

  

    <!-- div row-2 starts here -->

    <div style="display:flex;justify-content:space-evenly;margin-top:15px;">

    <input type="text" style="background-color:#ffffff;height:36px;cursor: auto;border-radius: 5px;
      font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
      outline:none;text-align:center;color:rgb(18, 18, 18);width:250px;margin-top:0px;" 
           placeholder="Student ID" name="studentID"/>

    <select style="width:250px;margin-left:0px;margin-top:0px;" name="semester" class="select">
       <option disabled selected>Semester</option>
       <option value="spring">spring</option>
       <option value="summer">summer</option>
       <option value="autumn">autumn</option>
     </select>              

     <select style="width:250px;margin-top:0px;margin-left:0px;" name="year" class="select">
       <option disabled selected>year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select>  

    </div>
<center>
    <input type="submit" style="margin-top:20px;" name="submit" value="Submit" class="submitButton">
  </center>
   </form>    

   <?php
      if(isset($_POST['submit'])){
      $_SESSION['examName']=$_POST['examName'];
      $_SESSION['courseID']=$_POST['courseID'];
      $_SESSION['sectionNum']=$_POST['sectionNum'];
      $_SESSION['studentID']=$_POST['studentID'];
      $_SESSION['semester']=$_POST['semester'];
      $_SESSION['year']=$_POST['year'];

      header('location:submitAnswerScript.php');
      } 
  ?>  

  </body>

</html>