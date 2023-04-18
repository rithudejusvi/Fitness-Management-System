

<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $dob = $_REQUEST["dob"];
	$phone = $_REQUEST["phone"];
	$coach = $_REQUEST["coach"];
	

    

    $ins = "INSERT INTO member (id, name, date, dob, phone, coach) VALUES ('$id','$name','$date','$dob' , '$phone' , '$coach')";
        $query1 = mysqli_query($connection, $ins);
}
?>

<!DOCTYPE html>
<html>
<head>
<body>
<h1><i>Member Details have been saved to the database.</i></h1>
</head>
</body>
</html>

