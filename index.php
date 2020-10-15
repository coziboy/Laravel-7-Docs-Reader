<?php
require __DIR__ . "/components/header.php";
$dir = scandir(__DIR__ . "/docs");
$files = array_diff($dir, array('.', '..', '.git', 'readme.md'));
?>
<div class="container my-3">
  <h1>Laravel Docs Offline</h1>
  <div class="row">
    <?php foreach ($files as $key => $value): ?>
      <?php $title = str_replace(".md", "", $value); ?>
      <div class="col-md-3 my-3">
        <div class="card">
          <div class="card-body text-center">
            <a href='read.php?file=<?php echo $title ?>'><?php echo $title ?></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php
require __DIR__ . "/components/footer.php";
?>
