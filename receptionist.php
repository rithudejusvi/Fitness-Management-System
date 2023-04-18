

<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $address = $_REQUEST["address"];
	$phone = $_REQUEST["phone"];

    

    $ins = "INSERT INTO receptionist (id, name, date, address, phone) VALUES ('$id','$name','$date','$address','$phone')";
        $query1 = mysqli_query($connection, $ins);
}
?>

<!DOCTYPE html>
<html>
<head>
<body>
<h1><i>Receptionist Details have been saved to the database.</i></h1>
</head>
</body>
</html>


