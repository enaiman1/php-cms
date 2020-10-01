<?php

// This function create a query to get all subjects from the DB
function find_all_subjects()
{
  global $db;

  $sql = "SELECT * FROM subjects ";
  $sql .= "ORDER BY position ASC";
  // echo $sql;
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}


// This function create a query to get all pages from the DB
function find_all_pages()
{
  global $db;

  $sql = "SELECT * FROM pages ";
  $sql .= "ORDER BY subject_id ASC, position ASC";
  // echo $sql;
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

// find a subject by id
function find_subject_by_id($id)
{
  global $db;

  $sql = "SELECT * FROM subjects ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $subject = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  // return an assocate array
  return $subject;
}
// This creates a new subject
function insert_subject($subject) {
  global $db;

  $sql = "INSERT INTO subjects ";
  $sql .= "(menu_name, position, visible) ";
  $sql .= "VALUES (";
  $sql .= "'" . $subject['menu_name'] . "',";
  $sql .= "'" . $subject['position'] . "',";
  $sql .= "'" . $subject['visible'] . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result is true/false
  if($result) {
    return true;
  } else {
    // INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

// Makes a query to update a subject by id
function update_subject($subject)
{
  global $db;

  $sql = "UPDATE subjects SET ";
  $sql .= "menu_name='" . $subject['menu_name'] . "', ";
  $sql .= "position='" . $subject['position'] . "', ";
  $sql .= "visible='" . $subject['visible'] . "' ";
  $sql .= "WHERE id='" . $subject['id'] . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);
  // For UPDATE statements, $result is true/false
  if ($result) {
    return true;
  } else {
    // UPDATE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function delete_subject($id)
{
  global $db;
  // if its not a post request we will dispaly a form
  
    $sql = "DELETE FROM subjects ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    // For delete statments, $result is true/false
    if ($result) {
      return true;
    } else {
      // Delete failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  
}
