<?php
if (!isset($page_title)) {
  $page_title = 'Staff Area';
}
?>

<!doctype html>

<html lang="en">

<head>
  <title>GBI - <?= $page_title; ?> </title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="all" type="text/css" href="<?= url_for('/stylesheets/staff.css'); ?>" />

</head>

<body>
  <header>
    <h1>GBI Staff Area</h1>
  </header>

  <navigation>
    <ul>
    <li>User: <?= $_SESSION['username'] ?? ''; ?></li>
      <li><a href="<?= url_for('/staff/index.php'); ?>">Menu</a></li>
      <li><a href="<?= url_for('/staff/logout.php'); ?>">Logout</a></li>
      
    </ul>
  </navigation>