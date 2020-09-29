<?php require_once('../../../private/initialize.php'); ?>
<?php require_once('../../../private/functions.php'); ?>

<?php

//php > 7.0
$id = $_GET['id'] ?? '1'; 

// calls function to add htmlspecialchars to id
echo h($id);

?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?= url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page show">

    Page ID: <?= h($id); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>