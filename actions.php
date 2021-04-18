<?php
      
        if (isset($_POST['submit'])) {

            session_start();
            $Father= $_POST['fname'];
            $mob1= $_POST["fmob"];
            $Mother= $_POST["mname"];
            $mob2= $_POST["mmob"];
            $add= $_POST["padd"];
            $res= $_POST["padd"];
            $_SESSION["m"]= $_POST["fmob"];
            $_SESSION["email"]= $_POST["mmob"];
	    $_SESSION["padd"]= $_POST["padd"];
	    $_SESSION["fn"]= $_POST['fname'];
            $_SESSION["tn"]= $Father.$mob1;
            $tn= $_SESSION["tn"];

            if($Father != null && $mob1 != '' && $Mother != '' && $mob2 != '' && $add != ''){

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

                $sql = "INSERT INTO parentsreg(Fname, Fmob, Mname, Mmob, Padd) values('$Father', '$mob1', '$Mother', '$mob2', '$add')";

                if ($conn->query($sql) === TRUE) {                    
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $sql1 = "CREATE TABLE `" .$tn. "` (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    age VARCHAR(30) NOT NULL,
                    centre VARCHAR(50) NOT NULL,
		            gender VARCHAR(50) NOT NULL
                )";

                if ($conn->query($sql1) === TRUE) {
                    echo "Table MyGuests created successfully";
                } else {
                    echo "Error creating table: " . $conn->error;
                }

                $conn->close();

                echo "<script> location.href='Baby.html'; </script>";            
            }
            else{
                echo '<script>alert("Please Enter all the fields.")</script>';
            }                       
        }                
?>