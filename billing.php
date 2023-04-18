


<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $amount = $_REQUEST["amount"];

    

    $ins = "INSERT INTO billing (id,name, date,amount) VALUES ('$id','$name','$date','$amount')";
        $query1 = mysqli_query($connection, $ins);
}
?>


<!DOCTYPE html>
<html>
<head>
<body>
<h1><i>Billing Details have been saved to the database.</i></h1>
</head>
</body>
</html>

 