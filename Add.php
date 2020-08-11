<?php
//write your insert statment And  List
require_once "DataBaseConnection.php";
 $que="SELECT * FROM info_form where  FirstName = '" . $fname . "'" ;
 $res= mysqli_query($con, $que); 
   if(mysqli_num_rows($res) > 0)
	{
	echo "<script>alert('FirstName Already Exists . . . !'); window.location.href='Form-Page.php'</script>";
	}else{
		$insert = "INSERT INTO `csis2440` . `info_form` (`FirstName`, `LastName`, `Email`, `Birthday`, `Password`,`Active`) " . "VALUES ('$fname', '$lname', '$email', '$bday', '$pass','Y')";
		
	}
$success = $con->query($insert);
if ($success == FALSE) {
    $failmess = "Whole query " . $insert . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
} else {
    echo "<table><th>FirstName</th>" . "<br>" . $fname . "<th>LastName</th>" . $lname . "<th>Email</th>" . $email . "<th>Birthday</th>" . $bday . "was added";
    $sql = "SELECT * FROM info_form";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['FirstName'] 
    . "</td><td>" . $row['LastName'] 
    . "</td><td>" . $row['Email']
    . "</td><td>" . $row['Birthday']        
    . "</td></tr>";
}
echo "</table>";
}
