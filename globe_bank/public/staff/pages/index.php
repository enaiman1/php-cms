<?php require_once('../../../private/initialize.php'); ?>

<?php

$page_set = find_all_pages();
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>


<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Subject ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($page = mysqli_fetch_assoc($page_set)) { ?>
        <tr>
          <td><?= h($page['id']); ?></td>
          <td><?= h($page['subject_id']); ?></td>
          <td><?= h($page['position']); ?></td>
          <td><?= $page['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?= h($page['menu_name']); ?></td>
          <td><a class="action" href="<?= url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php 
    // let php know Im done using this data set, to free up memory
    mysqli_free_result($page_set); 
    ?>
    

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>