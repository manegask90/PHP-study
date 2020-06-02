<?php
include __DIR__ . '/header.php';
require __DIR__ . '/helpers/functions.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 users">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 users-form">
      <form action="/users.php" method="post">
        <input type="text" name="new_user" placeholder="New User">
        <input type="submit" value="Add">
      </form>
    </div>
  </div>
</div>

<?php
include __DIR__ . '/footer.php';