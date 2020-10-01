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
function find_all_pages(){
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}


function find_subject_by_id($id){
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

function insert_subject($menu_name, $position, $visible){
    global $db;
      
        $sql =  "INSERT INTO subjects ";
        $sql .= "(menu_name, position, visible) ";
        $sql .= "VALUES (";
        $sql .= "'" . $menu_name . "',";
        $sql .= "'" . $position . "',";
        $sql .= "'" . $visible . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);
        //For INSERT statments, $result is ture/false
        if($result){
      return true;
      
        }else {
          //Insert failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }

}
