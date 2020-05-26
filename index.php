<?php

error_reporting(E_ALL);

require __DIR__ . '/helpers/functions.php';

$post = $_POST;

$x      = '';
$y      = '';
$action = '';
$res    = '';

if ($post) {

    $x = $post['x'];
    $y = $post['y'];
    $action = $post['action'];

    $res = calculate($x, $y, $action);
}

?>


<form action="/" method="post">
  <input type="number" name="x" value="">

  <div>
    <input type="radio" name="action" value="plus">
     <label for="plus">+</label>

    <input type="radio" name="action" value="minus">
     <label for="minus">-</label>

    <input type="radio" name="action" value="multiplication">
     <label for="multiplication">*</label>
    
    <input type="radio" id="division" name="action" value="division">
     <label for="division">/</label>
  </div>

  <input type="number" name="y" value="">
  <input type="submit" value="Go"> <?php if($res) echo 'Result : '.$res;?>
</form>
