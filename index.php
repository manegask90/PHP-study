<?php

error_reporting(E_ALL);

if (isset($x)) {
  $x = $_POST['x'];
} else {
  $x = '';
}
if (isset($y)) {
  $y = $_POST['y'];
} else {
  $y = '';
}
if (isset($action)) {
  $action = $_POST['action'];
} else {
  $action = '';
}

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
  }

  if ($y == 0) {
    $res = "Cannot be divided by zero";
  }
  return $res;
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