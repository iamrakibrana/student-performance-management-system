<?php
// Load the database configuration file
include_once 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $stdID  = $line[0];
                $fname  = $line[1];
                $lname  = $line[2];
                $dob    = $line[3];
                $gender = $line[4];
                $email  = $line[5];
                $phone  = $line[6];
                $address= $line[7];
                $dept   = $line[8];
                $prog   = $line[9];
                $pass   = $line[10];
                $ensem  = $line[11];
                $enyear = $line[12];
                $courseID = $line[13];
                $mark = $line[14];
                
                
                // $prevQuery = "SELECT studentID FROM student_t, grade_t WHERE studentID != '".$line[0]."'";
                // $prevResult = $db->query($prevQuery);

                $insert = "INSERT INTO student_t (studentID, firstName, lastName, dateOfBirth, gender, email, phone, address, departmentID, programID, password, enrollmentSemester, enrollmentYear) VALUES ('".$stdID."', '".$fname."', '".$lname."', '".$dob."', '".$gender."', '".$email."', '".$phone."', '".$address."', '".$dept."', '".$prog."', '".$pass."', '".$ensem."', '".$enyear."')";

                $query = mysqli_query($db, $insert) or die(mysali_error($db));
                
                if($query==1)
                // {
                //     // Update member data in the database
                //     $db->query("SQL command according to table info");
                // }
                {
                    // Insert member data in the database
                     $insert2 = "INSERT INTO grade_t (studentID, courseID, marks) VALUES ('".$stdID."', '".$courseID."', '".$mark."')";
                     $quey = mysqli_query($db, $insert2);
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: upload.php".$qstring);