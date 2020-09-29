<?php require_once('../../../private/initialize.php'); ?>
<?php require_once('../../../private/functions.php'); ?>
<?php

//php < 7.0
// $id = isset($_GET['id']) ? $_GET['id'] : '1'; 

//php > 7.0
$id = $_GET['id'] ?? '1'; 

// calls function to add htmlspecialchars to id
echo h($id);

?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?= url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">

    Subject ID: <?= h($id); ?>

  </div>

</div>