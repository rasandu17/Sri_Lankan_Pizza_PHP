<?php

$conn = mysqli_connect("localhost","rukiee","pizza123","pizza_shop");

if (!$conn) {
    echo 'Connection error' .mysqli_connect_error();
}

?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php')?>
<?php include('templates/footer.php')?>
    

</html>