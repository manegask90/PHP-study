<?php
include __DIR__ . '/header.php';

error_reporting(E_ALL);

require __DIR__ . '/helpers/functions.php';

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
<div class="container">
  <div class="row">
    <form action="/" method="post">
      <input type="number" name="x" value="<?php echo $x; ?>">
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
      <input type="number" name="y" value="<?php echo $y; ?>">
      <input type="submit" value="=">

    <?php 
      if ($res) {
        echo "Res: $res";
      }
    ?>
    </form>
  </div>
</div>

<?php
include __DIR__ . '/footer.php';