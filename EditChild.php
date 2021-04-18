<html>
<head>
<title>Child Vaccine Registration</title>
    <link rel="stylesheet" type="text/css" href="Bbycss.css">
<body>
    <div class="loginbox">
			<div class="card__face card__face--front">
				<div id="myimgdivshowhide">
					<img src="avatar.jpg" class="avatar">
				</div>
				<h1>Child Vaccine Registration Portal</h1>
				<h4>Enter Details of child</h4>
				<form method="POST">
					<input type="text" id="name" name="bbyname" placeholder="Enter child's name">

					<p>Enter the gender of child:</p><br>
						<p>Male</p><input type="radio" name="gender" value="Male">
					<p>Female</p><input type="radio" name="gender" value="Female">
						<p>Other</p><input type="radio" name="gender" value="Other">      

						<h6> Place of Vaccination :</h6>
					<select id="dd" name="centre">
					<option value = "Sub centre"> Sub centre 
					</option>
					<option value = "Primary Health Care Centre"> Primary Health Care Centre 
      					</option>
					<option value = "Community Health Centre"> Community Health Centre
					</option>
					<option value = "Private Hospital"> Private Hospital
					</option>
					</select>
					<br><br>	    

					<h6> Enter child's DOB :</h6>
					<input type="date" id="date_birth" name="dob">
        
					<div id="childopt">
						<input type="submit" id="done" name="ac" value="Done">
					</div>
				</form>
			</div>
	</div>			
	<div >
        <h6 id="initial">By -Aman Chauhan</h6>
    </div>

	<?php

		if (isset($_POST[ 'ac' ])) {
			session_start();
			$Cid= $_SESSION["ChildId"];
			$tn= $_SESSION["tn"];

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


			$up = "UPDATE `".$tn."` SET `name`='".$_POST['bbyname']."', `age`='".$_POST['dob']."',`centre`='".$_POST['centre']."' ,`gender`='".$_POST['gender']."' WHERE `id`='".$Cid."'";
			$result = mysqli_query($conn, $up);
			
			echo "<script> location.href='ViewChild.php'; </script>"; 

		}
	?>


</body>
</head>
</html>