<?php

var_dump($_FILES);

if(!empty($_FILES)) {
  $upload = $_FILES['new_image'];
  if ($upload['error'] == 0) {
    move_uploaded_file(
      $upload['tmp_name'],
      __DIR__ . '/images/test.png'
    );
  }
}