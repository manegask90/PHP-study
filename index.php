<?php

// GET
// $a = [
//   'jan' => 1,
//   'feb' => 2,
//   'mar' => 3,
//   'apr' => 4,
// ];
// $code = $_GET['code'];

// echo $a[$code];

$x = $_POST['x'];
$y = $_POST['y'];

$res = $x + $y;
// var_dump($_POST);
?>

<!-- POST -->

<form action="/" method="post">
  <input type="number" name="x">
  +
  <input type="number" name="y">
  <input type="submit" value="=">

  Res: <?php echo $res; ?>
</form>