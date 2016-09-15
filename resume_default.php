<?php

require __DIR__ . '/includes/application_top.php';

/** @var Resume[] $resumes */
$resumes = [];

require __DIR__ . '/includes/resumes.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Resume - FirstName LastName</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="//prismjs.com/themes/prism.css">
</head>
<body>
<div class="container">
  <?php
  foreach ($resumes as $resume) {
    echo $resume->render();
  }
  ?>
</div>
</body>
</html>