

<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $experience = $_REQUEST["experience"];

    

    $ins = "INSERT INTO coach (id,name, date, experience) VALUES ('$id','$name','$date','$experience')";
        $query1 = mysqli_query($connection, $ins);
}
?>


<!DOCTYPE html>
<html>
<head>
<body>
<h1><i>Trainer Details have been saved to the database.</i></h1>
</head>
</body>
</html>