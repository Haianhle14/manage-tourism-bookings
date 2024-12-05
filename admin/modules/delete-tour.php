<?php 
$id = $_GET['sid'];

require_once('../includes/config.php');

$delete_sql = "DELETE FROM tbltour WHERE Idtour=$id";

mysqli_query($mysqli, $delete_sql);
header("location: ../manage-tour.php");

?>