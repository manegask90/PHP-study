<?php
include __DIR__ . '/header.php';
require __DIR__ . '/helpers/functions.php';
?>

<div class="container">
  <div class="row">
    <div class="photo">
      <?php foreach ($images as $image) { ?>
        <a href="/image.php?file=<?php echo $image; ?>">
          <img src="/images/<?php echo $image; ?>" alt="">
        </a>
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <form action="/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="new_image">
        <input type="submit">
    </form>
  </div>
</div>

<?php
include __DIR__ . '/footer.php';