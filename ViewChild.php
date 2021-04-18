<?php

	session_start();
	$m1=$_SESSION["m"];
	$email=$_SESSION["email"];
	$res= $_SESSION["padd"];
	$n=$_SESSION["fn"];
	$_SESSION["ChildId"];
	$_SESSION["Childnm"];
	$_SESSION["ChildAge"];
	$tn= $_SESSION["tn"];

	$age=[];
	$nm=[];
	$cid=[];

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

	$sql = "SELECT * from `" .$tn. "`";

	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result); 
	$childinfo=[];
 

	if($count == 0){  
	?>
	  <script>
		alert('Please Add a Child');
		location.href='Baby.html';
	  </script>
	<?php
	}  
	else {
	  while($row = mysqli_fetch_row($result)){
		$cinfo=[];
		$bday_arr=explode('-',$row[2]);
		$birthdate=$bday_arr[2].".".$bday_arr[1].".".$bday_arr[0];
		$bday = new DateTime($birthdate); // Your date of birth
		$today = new Datetime(date('m.d.y'));
		$diff = $today->diff($bday);
		if($diff->y > 0){
		  $weeks=-1;
		}else{
		  $weeks=floor(((($diff->m)*30)+$diff->d)/7);
		}
		array_push($cinfo,"$row[0]");
		array_push($cinfo,"$row[1]");
		array_push($cinfo,"$row[2]");
		array_push($cinfo,"$row[3]");
		array_push($cinfo,"$row[4]");
		array_push($cinfo,"$weeks");
		array_push($childinfo,$cinfo);
	  }
	}
?>

<html>
<head>
<title>Child Vaccine Registration</title>
    <link rel="stylesheet" type="text/css" href="View.css">
<body>
<div >
	<h6 id="initial">By -Aman Chauhan</h6>
</div>
    <div class="loginbox">
		<div class="card__inner">
			<div class="card__face card__face--front">
				<form method="POST">
					<div id="myimgdivshowhide">
						<img src="avatar.jpg" class="avatar">
					</div>
					<h1>Children detail of Mr. <?php echo $n; ?></h1>
					<h6>Mob No: <?php echo $m1; ?></h6>
					<h6>Address: <?php echo $res; ?></h6>
					<h6>Email: <?php echo $email; ?></h6>
					<div id="dt">
						<table border="1" id="table">
						<tr>
						<th> Child Id </th>
						<th> Name </th>
						<th> Date Of Birth </th>
						<th> Centre </th>
						<th> Gender </th>
						<th> Age (in weeks) </th>
						<th> Vaccines to be Given </th></tr>
						<?php
							$r=count($childinfo);
					
							for($i=0;$i<$r;$i=$i+1){
							?>
							<tr><?php
							  for($j=0;$j<6;$j=$j+1){
								?>
								<td><?php echo $childinfo[$i][$j]; ?></td>
								<?php
							  }	?>
							  <td><input type="radio" id="o2" name="id123" value='<?php echo $childinfo[$i][0]; ?>'>  </td> </tr><?php

							  array_push($cid, $childinfo[$i][0]);
							  array_push($nm, $childinfo[$i][1]);
							  array_push($age, $childinfo[$i][5]);
							}
						?>
					</div>
						<input type="submit" name="Ubt" id="o3" value="Update Info">
						<input type="submit" name="Vbt" id="o1" value="View Vaccine">
				</form>
			</div>
		</div>
	</div>	
	
	<?php  	
		if (isset($_POST[ 'Vbt' ])) {
			$r=count($childinfo);
					
			for($i=0;$i<$r;$i=$i+1){
				if($cid[$i] == $_POST['id123']){
					$_SESSION["ChildId"]= $cid[$i];
					$_SESSION["Childnm"]= $nm[$i];
					$_SESSION["ChildAge"]= $age[$i];
				}
			}
			?>
				<script>
					const card = document.querySelector(".card__inner");
    
					card.classList.toggle('is-flipped');
					location.href='Vaccine.php';

				</script>    
			<?php
		}  	
		
		if (isset($_POST[ 'Ubt' ])) {

			$r=count($childinfo);
					
			for($i=0;$i<$r;$i=$i+1){
				if($cid[$i] == $_POST['id123']){
					$_SESSION["ChildId"]= $cid[$i];
				}
			}
			?>
				<script>
					const card = document.querySelector(".card__inner");
    
					card.classList.toggle('is-flipped');
					location.href='EditChild.php';

				</script>    
			<?php
		}
	?>

</body>
</head>
</html>