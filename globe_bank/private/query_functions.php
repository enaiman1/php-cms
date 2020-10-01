<?php

// This function create a query to get all subjects from the DB
function find_all_subjects(){
global $db;

$sql = "SELECT * FROM subjects ";
$sql .= "ORDER BY position ASC";
// echo $sql;
$result = mysqli_query($db, $sql);
confirm_result_set($result);
return $result;
}


// This function create a query to get all pages from the DB
function find_all_pages(){
global $db;

$sql = "SELECT * FROM pages ";
$sql .= "ORDER BY subject_id ASC, position ASC";
// echo $sql;
$result = mysqli_query($db, $sql);
confirm_result_set($result);
return $result;
}


?>