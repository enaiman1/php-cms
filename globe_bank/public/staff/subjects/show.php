<?php require_once('../../../private/initialize.php'); ?>
<?php require_once('../../../private/functions.php'); ?>
<?php

//php < 7.0
// $id = isset($_GET['id']) ? $_GET['id'] : '1'; 

//php > 7.0
$id = $_GET['id'] ?? '1'; 

$subject = find_subject_by_id($id);

?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">

    <h1>Subject: <?= h($subject['menu_name']); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Menu Name</dt>
        <dd><?= h($subject['menu_name']); ?></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd><?= h($subject['position']); ?></dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd><?= $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
      </dl>
    </div>

  </div>

</div>