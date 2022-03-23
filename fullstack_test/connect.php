<?php
	$caseNumber = $_POST["caseNumber"];
	$import = $_POST['import'];
	$caseOwner = $_POST['caseOwner'];
	$Project = $_POST['Project'];
	$data1 = $_POST['data1'];
	$data2 = $_POST['data2'];
	$data3 = $_POST['data3'];
	$variable1 = $_POST['variable1'];

	// Database connection
	// && !empty($_POST["variable1"] && !empty($_POST["caseOwner"]) && !empty($_POST["Project"]))
	$conn = mysqli_connect('localhost','root','','test');

	if(isset($_POST['submit'])){

		if (!empty($_POST["caseNumber"]){
			$query= "insert into addcase(caseNumber, import, caseOwner, Project, data1, data2, data3, variable1) 
			values($caseNumber,$import,$caseOwner, $Project, $data1, $data2, $data3, $variable1)"

			$run = mysqli_query($conn, $query) or die(mysqli_error());

			if($run){
				echo "submitted succesfully"
			}
			else{
				echo "form not submitted"
			}
		}	
	}
	else{
		echo "check the input";
	}
?>