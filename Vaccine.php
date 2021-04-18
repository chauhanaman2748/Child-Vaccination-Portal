<?php
	session_start();
	$CAge= $_SESSION["ChildAge"];
	$Cnm= $_SESSION["Childnm"];
    $email= $_SESSION["email"];

    if ($CAge >= 0 && $CAge < 1) {
        $m1= "This week: BCG, Hepatitis b, OPV-0";
        $m2= "Next Due(After 5 weeks): OPV-1, Pentavalent-1(DPT+Hib+Hb), PCV-1, Rota Virus Vaccine-1, FIPV 1";
    }
    else if ($CAge >= 1 && $CAge < 6) {
        $m1= "This week: None";
        $m2= "Next Due: OPV-1, Pentavalent-1(DPT+Hib+Hb), PCV-1, Rota Virus Vaccine-1, FIPV 1";
            
    }
    else if ($CAge >= 6 && $CAge < 7) {
        $m1= "This week: OPV-1, Pentavalent-1(DPT+Hib+Hb), PCV-1, Rota Virus Vaccine-1, FIPV 1";
        $m2= "Next Due(After 4 weeks): OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
           
    }
    else if ($CAge >= 7 && $CAge < 10) {
        $m1= "This week: None";
        $m2= "Next Due: OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
                
    }
    else if ($CAge >= 10 && $CAge < 11) {
        $m1= "This week: OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
        $m2= "Next Due(After 5 weeks): OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
                
    }
    else if ($CAge >= 11 && $CAge < 14) {
        $m1= "This week: OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
        $m2= "Next Due: OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
                  
    }
    else if ($CAge >= 14 && $CAge < 15) {
        $m1= "This week: OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
        $m2= "Next Due(between 9-12 months): Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
                   
    }
    else if ($CAge >= 15 && $CAge < 39) {
        $m1= "This week: None";
        $m2= "Next Due(between 9-12 months): Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
                   
    }
    else if ($CAge >= 39 && $CAge <= 52) {
        $m1= "This Month: Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        $m2= "Next Due: None";
                    
    }
    else if ($CAge > 52) {
        $m1= "";
        $m2= "Next Due: None";
            
    }
    $s= "Reminder: Child Vaccination Portal";
    $CS= "Vaccination Due for: ".$Cnm." are :-";

    $m= $s."\n".$CS."\n"."\n".$m1."\n"."\n".$m2;
?>

<html>
<head>
<title>Child Vaccine Registration</title>
    <link rel="stylesheet" type="text/css" href="Vaccine.css">
<body>
	<div >
        <h6 id="initial">By -Aman Chauhan</h6>
    </div>
    <div class="loginbox">
        <div class="card__inner">
			<div class="card__face card__face--front">
				<div id="myimgdivshowhide">
					<img src="avatar.jpg" class="avatar">
				</div>
				<h1>Child Vaccine Registration Portal</h1>
				<form method="POST">
					<div class="card__header">	
						<input type="text" class="form-control" id="result" disabled>
						<div class ="vcc">
							<h1>Vaccines to be given to <?php echo $Cnm; ?> :</h1>
						</div>
						<div class ="vc1">
							<h6 id="h1"></h6>
							<p id="demo1"></p>
							<br>
						</div>
						<div class ="vc2">
							<h3 id="h-m"></h3>
							<h6 id="h2"></h6>
							<p id="demo2"></p>
							<br>
						</div>
						<div class ="vc3">
							<h6 id="h3"></h6>
							<p id="demo3"></p>
							<br>
						</div>
						<div class ="vc4">
							<h6 id="h4"></h6>
							<p id="demo4"></p>
							<br>
						</div>
						<div class ="vc5">
							<h6 id="h5"></h6>
							<p id="demo5"></p>
						</div>
						<div class ="vc6">
							<h6 id="h6"></h6>
							<p id="demo6"></p>
						</div>
					</div>
						<input type="submit" name="Vbt" id="o1" value="Send Mail">
				</form>			
			</div>
		</div>
	</div>

	<script>

        var age = '<?php echo $CAge; ?>';

		if (age >= 0 && age < 1) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "BCG, Hepatitis b, OPV-0";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given in week 6 :";
            document.getElementById("demo2").innerHTML = "OPV-1, Pentavalent-1(DPT+Hib+Hb), PCV-1, Rota Virus Vaccine-1, FIPV 1";
            document.getElementById("h3").innerHTML = "Vaccines to be given in week 10 :";
            document.getElementById("demo3").innerHTML = "OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
            document.getElementById("h4").innerHTML = "Vaccines to be given in week 14 :";
            document.getElementById("demo4").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h5").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo5").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 1 && age < 6) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "none";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given in week 6 :";
            document.getElementById("demo2").innerHTML = "OPV-1, Pentavalent-1(DPT+Hib+Hb), PCV-1, Rota Virus Vaccine-1, FIPV 1";
            document.getElementById("h3").innerHTML = "Vaccines to be given in week 10 :";
            document.getElementById("demo3").innerHTML = "OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
            document.getElementById("h4").innerHTML = "Vaccines to be given in week 14 :";
            document.getElementById("demo4").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h5").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo5").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 6 && age < 7) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "OPV-1, Pentavalent-1(DPT+Hib+Hb), PCV-1, Rota Virus Vaccine-1, FIPV 1";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given in week 10 :";
            document.getElementById("demo2").innerHTML = "OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
            document.getElementById("h3").innerHTML = "Vaccines to be given in week 14 :";
            document.getElementById("demo3").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h4").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo4").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 7 && age < 10) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "none";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given in week 10 :";
            document.getElementById("demo2").innerHTML = "OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
            document.getElementById("h3").innerHTML = "Vaccines to be given in week 14 :";
            document.getElementById("demo3").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h4").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo4").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 10 && age < 11) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given in week 14 :";
            document.getElementById("demo2").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h3").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo3").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 11 && age < 14) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "OPV-2, Pentavalent-2(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-2";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given in week 14 :";
            document.getElementById("demo2").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h3").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo3").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 14 && age < 15) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "OPV 3, Pentavalent-3(DPT+Hib+Hb), PCV-2, Rota Virus Vaccine-3, FIPV 2";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo2").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 15 && age < 39) {
            document.getElementById("h1").innerHTML = "Vaccines for this week are :";
            document.getElementById("demo1").innerHTML = "none";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo2").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
        }
        else if (age >= 39 && age <= 52) {
            document.getElementById("h1").innerHTML = "Vaccines to be given between 9-12 months :";
            document.getElementById("demo1").innerHTML = "Measles/Rubella -1, Japanese Encephalitis, PCV Booster, Vitamin A";
            document.getElementById("h-m").innerHTML = "Vaccines to be given in later weeks :";
            document.getElementById("h2").innerHTML = "After 1 year of age :";
            document.getElementById("demo2").innerHTML = "No Vaccines are due";
        }
        else if (age > 52) {
            document.getElementById("h1").innerHTML = "After 1 year of age :";
            document.getElementById("demo1").innerHTML = "No Vaccines are due";
        }
    </script>
    
    <?php

        if(isset($_POST['Vbt'])){            
            $to_email = $email;
            $subject = "Vaccines Due for your child :";
            $body = $m;
            $headers = "From: spyman2748@gmail.com";

            if (mail($to_email, $subject, $body, $headers)) {
                echo "<script> alert('Email successfully sent to $to_email ...') </script>";
            } else {
                echo "<script>alert('Email sending failed...')</script>";
            }
        }
    ?>
    
</body>
</head>
</html>