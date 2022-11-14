<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VISA MIG</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'include/header.php'; ?>
  <main>
      <?php
      $colors = array("red", "green", "blue", "hotpink", "purple", "orange", "pink", "brown", "black", "peru");
      $num = date("i");
      echo "<h2>Minutens tabell är " . $num . "</h2>";
      for ($i=1; $i <= 10; $i++) { 
        echo "<p style='color: " . $colors[$i-1] . "'>" . $num . " x " . $i . " = " . $num * $i . "</p>";
      }
    ?>
</main>
<?php include 'include/footer.php'; ?>
</body>
</html>