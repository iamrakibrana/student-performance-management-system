<?php
    include 'dbConfig.php';

    // Check if the data is submitted or not, isset() will check if the data exists.
if (!isset($_POST['fName'], $_POST['lName'] $_POST['password'], $_POST['ID'])) {
	// Could not get the data that should have been sent.
	exit('Please complete your registration');
}
// Data are not empty.
if (empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['password']) || empty($_POST['ID'])) {

	exit('Please complete your registration');
}

// Check if the account with that ID exists.
if ($stmt = $con->prepare('SELECT * FROM student_t WHERE studentID = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['ID']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'User exists, please choose another!';
	} else {
		// Insert new account
	}
	$stmt->close();
} else {
	echo 'Could not prepare statement!';
}
$con->close();

// New Account
if ($stmt = $con->prepare('INSERT INTO student_t (studentID, firstName, lastName, password) VALUES (?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['ID'], $password,);
	$stmt->execute();
	echo 'You have successfully registered! You can now login!';
} else {
	echo 'Could not prepare statement!';
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <title>Registration</title>

    <style>
      body {
            background-color: #ededeb;
        }

        .selectNew {
            height: 46px;
            width: 280px;
            display: inline-block;
            border-radius: 7px;
            border: none;
            outline: none;
            background: #007171;
            color: #fff;
            font-size: 14px;
            letter-spacing: 2px;
            cursor: pointer;
            font-weight: bold;
            margin-left: 1%;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        /* ------------- */
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #008080;
            background-color: #008080;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        button:hover {
            cursor: pointer;
            background-color: #333;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #005d5d;
            background: -webkit-linear-gradient(to right, #009090, #007171);
            background: linear-gradient(to right, #009090, #007171);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

    </style>


  </head>
  <body>

 <?php
 if($invalid==1){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong></strong> Invalid credentials!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>

<div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="register.php" method="post">
                <h1 style="padding-top: 25px">Sign Up</h1>
                <br>
                <br>
                <div>
                    <!-- <label>
                        User Type
                    </label> -->
                    <select name="userType" class="select selectNew" style="text-align: center;">
                        <option disabled selected style="color: whitesmoke;">User Type</option>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                        <option value="department head">Department Head</option>
                        <option value="dean">Dean</option>
                    </select>
                </div>
                <input type="text" name="fName" placeholder="First Name" />
                <input type="text" name="lName" placeholder="Last Name" />
                <input type="text" name="ID" placeholder="Enter ID" />
                <input type="password" name="password" placeholder="Password" />
                <button style="margin-bottom: 2px;">register</button>
                <br>
                <div class="text-center">
                    <a class="font-weight-bold small" href="login.php">Already have an account!</a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img src="./student.png" alt="student" width="200px">
                    <br>
                    <h1>Hello,</h1>
                    <p>Please enter your personal details and start your journey.</p>
                </div>
            </div>
        </div>
    </div>


</body>
</html> 