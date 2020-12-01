<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_belanja = $_GET['id_belanja'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM pembelian WHERE id_belanja='$id_belanja'");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:rincian.php");
?>
