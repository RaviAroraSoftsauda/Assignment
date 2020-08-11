<?php
//write your update statment 
require_once "DataBaseConnection.php";
$que="SELECT * FROM info_form where  FirstName = '" . $fname . "'" ;
$res= mysqli_query($con, $que); 
 if(mysqli_num_rows($res) > 0)
	{
		$update = "UPDATE `CSIS2440`.`info_form` SET `Active` = 'Y',`FirstName` = '$fname',`LastName` = '$lname',`Birthday` = '$bday',`Password` = '$pass',`Email` = '$email' ";
		$update .= "WHERE (rtrim(`FirstName`) = '" . $fname . "')";
		$success = $con->query($update);
		if ($success == FALSE) {
		    $failmess = "Whole query " . $update . "<br>";
		    echo $failmess;
		    die('Invalid query: ' . mysqli_error($con));
		} else {
		    // echo $fname . " was given a space station<br>";
		    echo "<script>alert('$fname Update Successfully . . . !'); window.location.href='Form-Page.php'</script>";
		}
	}else{
		echo "<script>alert('User Is Not Found . . . !'); window.location.href='Form-Page.php'</script>";
	}

