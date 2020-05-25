<?php

error_reporting(E_ALL);

function calculate($x, $y, $action)
{
  switch ($action) {
    case "+":
      $res = $x + $y;
      break;
    case "-":
      $res = $x - $y;
      break;
    case "*":
      $res = $x * $y;
      break;
    case "/":
      $res = $x / $y;
      break;
    default:
      $res = null;
  }

  if ($y == 0) {
    $res = "Cannot be divided by zero";
  }
  return $res;
}


if (isset($_POST['x'])) {
  $x = (int)$_POST['x'];
} else {
  $x = null;
}
if (isset($_POST['y'])) {
  $y = (int)$_POST['y'];
} else {
  $y = null;
}
if (isset($_POST['action'])) {
  $action = $_POST['action'];
} else {
  $action = null;
}

$res = calculate($x, $y, $action);
?>

<!-- POST -->

<form action="/" method="post">
  <input type="number" name="x">
  <div>
    <input type="radio" id="plus"
     name="action" value="+">
     <label for="plus">+</label>

    <input type="radio" id="minus"
     name="action" value="-">
     <label for="minus">-</label>

    <input type="radio" id="multiplication"
     name="action" value="*">
     <label for="multiplication">*</label>
    
    <input type="radio" id="division"
     name="action" value="/">
     <label for="division">/</label>
  </div>
  <input type="number" name="y">
  <input type="submit" value="=">

  Res: <?php echo $res; ?>
</form>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script>
  $(document).ready(function() {
    $('form').on('submit', function(e) {

    });
  });
</script>