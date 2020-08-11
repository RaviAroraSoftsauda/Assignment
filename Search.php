<?php
//write your search statment
$search = "SELECT * FROM CSIS2440.info_form WHERE FirstName like '%$fname%' OR LastName like '%$lname%' OR Email like '%$email%'" . "Order By FirstName";

$return = $con->query($search);

if (!$return) {
    $message = "Whole query " . $search;
    echo $message;
    die('Invalid query: ' . mysqli_error($con));
}
echo "<table><th>FirstName</th>" . "<th>LastName</th>" . "<th>Email</th>" . "<th>Birthday</th>";
while ($row = $return->fetch_assoc()) {
    echo "<tr><td>" . $row['FirstName'] 
    . "</td><td>" . $row['LastName'] 
    . "</td><td>" . $row['Email']
    . "</td><td>" . $row['Birthday']        
    . "</td></tr>";
}
echo "</table>";
