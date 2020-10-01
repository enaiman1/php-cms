<?php require_once('../../../private/initialize.php'); ?>
<?php require_once('../../../private/functions.php'); ?>

<?php

//php > 7.0
$id = $_GET['id'] ?? '1'; 

// calls function to add htmlspecialchars to id
// echo h($id);
$page = find_page_by_id($id);
?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?= url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page show">

    <h1>Page: <?= h($page['menu_name']); ?></h1>

    <div class="attributes">
      <?php $subject = find_subject_by_id($page['subject_id']); ?>
      <dl>
        <dt>Subject</dt>
        <dd><?= h($subject['menu_name']); ?></dd>
      </dl>
      <dl>
        <dt>Menu Name</dt>
        <dd><?= h($page['menu_name']); ?></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd><?= h($page['position']); ?></dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd><?= $page['visible'] == '1' ? 'true' : 'false'; ?></dd>
      </dl>
      <dl>
        <dt>Content</dt>
        <dd><?= h($page['content']); ?></dd>
      </dl>
    </div>


  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>