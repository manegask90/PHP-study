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

    try {
      $res = calculate($x, $y, $action);
    } catch (Exception $e) {
      $res = $e->getMessage();
    } catch (TypeError $ex) {
      $res = 'Please enter data';
    }
}
?>


<form action="/" method="post">
  <input type="number" name="x" value="<?php echo $x; ?>">

  <select name="action">
    <option value="plus" <?php if (ACTION_PLUS == $action) { ?> selected <?php } ?>>+</option>
    <option value="minus" <?php if (ACTION_MINUS == $action) { ?> selected <?php } ?>>-</option>
    <option value="multiplication" <?php if (ACTION_MULTIPLICATION == $action) { ?> selected <?php } ?>>*</option>
    <option value="division" <?php if (ACTION_DIVISION == $action) { ?> selected <?php } ?>>/</option>
  </select>

  <input type="number" name="y" value="<?php echo $y; ?>">
  <input type="submit" value="Go"> <?php if($res) echo 'Result : '.$res;?>
</form>
