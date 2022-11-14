<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Övning</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'include/header.php'; ?>
  <main> 
    <?php
      date_default_timezone_set('Europe/Stockholm');
      $timezone = explode('/', date_default_timezone_get())[1];
      $greetings = array("God morgon", "God förmiddag", "God eftermiddag", "God kväll");
      $hour = date("H");
      $image = "🫵🏼";
      
      if ($hour < 9) {
        $greeting = $greetings[0];
        $image = "🌅";
      } elseif ($hour < 12) {
        $greeting = $greetings[1];
        $image = "🌞";
      } elseif ($hour < 18) {
        $greeting = $greetings[2];
        $image = "🥐";
      } else {
        $greeting = $greetings[3];
        $image = "🌙";
      }

    ?>
    <h1 class="image"><?= $image; ?></h1>
    <h2><?= $greeting; ?></h2>
    <p>Klockan är <?= date("H:i"); ?> i <?= $timezone; ?>.</p>
  </main>
  <?php include 'include/footer.php'; ?>

  
</body>
</html>