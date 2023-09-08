<?php
include 'database.php';
print_r($_POST);
echo $_POST['identification'];
$query = $con->prepare("SELECT name, email FROM crud WHERE id=?"); // prepate a query
$query->bind_param('s', $_POST['identification']); // binding parameters via a safer way than via direct insertion into the query. 'i' tells mysql that it should expect an integer.
$query->execute(); // actually perform the query
$result = $query->get_result(); // retrieve the result so it can be used inside PHP
$r = $result->fetch_array(MYSQLI_ASSOC); // bind the data from the first result row to $r
echo $r['name']; // will return the price
?>