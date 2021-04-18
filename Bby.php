<?php

    include 'actions.php';
    
    if (isset($_POST["ac"])) {
            
        session_start();

        $name= $_POST['bbyname'];
        $centre= $_POST["centre"];
        $dob= $_POST["dob"];
        $gender= $_POST["gender"];
        $m1=$_SESSION["m"];
	$tn= $_SESSION["tn"];

        if ($name != null && $centre != '' && $dob != '' && $gender != ''){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "vaccine";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO `" .$tn. "`(name, age, centre, gender) values('$name', '$dob', '$centre', '$gender')";

            if ($conn->query($sql) === TRUE) { 
                echo '<script>alert("Child Added Successfully.")</script>';
                echo "<script> location.href='Baby.html'; </script>";  
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close(); 
             
        }
        else{
            echo '<script>alert("Please Fill all the details.")</script>';
        }                       
    }        
    
    if (isset($_POST["vc"])) {
        echo "<script> location.href='ViewChild.php'; </script>";  
    }
?>