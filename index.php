<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<?php

$x = $_POST['x'];
$y = $_POST['y'];
$action = $_POST['action'];

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
$res = calculate($_POST['x'], $_POST['y'], $_POST['action']);

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

<script>
  $(document).ready(function) {
    $(form).on('submit', function(e) {

    })
  });
</script>