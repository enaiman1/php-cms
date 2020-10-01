<footer>
  &copy; <?php echo date('Y'); ?> Globe Bank
</footer>

</body>
</html>

<!-- once page has finished rendering, we will disconnect the db -->
<?php
  db_disconnect($db);
?>
