<?php
	//Variable Declaretion
	$name = $_REQUEST['Full_Name'];
	$section = $_REQUEST['Section'];
	$email = $_REQUEST['Email'];
	$opinion = $_REQUEST['Opinion']; 
	
	
	//Chech
	if(empty($name)||empty($section)||empty($email))
	{
		echo"Please, Fill all the Fields";
	}
   	else
	{
		mail("akibrahman5200@gmail.com","QCSC Assaignment",$opinion,"From:$name");
		echo"<script type='text/javascript'>alert('Your Assaignment is Submitted');
		window.history.go(-1);
		</script>";
	}
?>