<?php

  add_action('admin_init', function () {
    remove_menu_page('edit-comments.php'); // Comments
    remove_menu_page('edit.php'); // Posts
    // remove_menu_page('edit.php?post_type=page'); // Pages
    // remove_menu_page('index.php'); // Dashboard
    // remove_menu_page('upload.php'); // Media
  });