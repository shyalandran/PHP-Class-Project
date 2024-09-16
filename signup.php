<?php
  include "libs/load.php";

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?php load_template("head") ?>
  <body>
    <header data-bs-theme="dark">
      <?php load_template("header") ?>
    </header>
    <main>
      <?php load_template("signup") ?>
    </main>
    <?php load_template("footer") ?>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>