<?php
$number = 0;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie3</title>
</head>
<body>
    <?php while($number <= 10){ ?>
      <p><?= $number++ ?></p>
    <?php } ?>
</body>
</html>
