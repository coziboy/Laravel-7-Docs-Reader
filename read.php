<?php
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/components/header.php";
?>
<?php if (isset($_GET["file"])): ?>
  <?php
  $file = $_GET["file"];
  $content = file_get_contents(__DIR__ . "/docs/" . $file . ".md");
  $Parsedown = new Parsedown();
  ?>
  <div class="container my-3">
    <div class="row">
      <div class="col-md-12">
        <?php echo $Parsedown->text($content); ?>
      </div>
      <div class="col-md-12">
        <a href="./" class="btn btn-primary">Kembali Ke Menu Utama</a>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php
require __DIR__ . "/components/footer.php";
?>
