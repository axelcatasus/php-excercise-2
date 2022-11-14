<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ÄR DET JÄMNT???</title>
</head>
<body>
<?php include 'include/header.php'; ?>
  <main>
    <?php
    $months = array("Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
    $weekday = date("l");
    $day = date("d");
    $month = date("m"); 
    $url = "https://sholiday.faboul.se/dagar/v2.1/" . date("Y") . "/" . $month . "/" . $day;
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $dagar = $data["dagar"];
    $namnsdag = $dagar[0]["namnsdag"];
    $wikiUrl = 'https://sv.wikipedia.org/wiki/Lista_%C3%B6ver_namnsdagar_i_Sverige_i_datumordning#' . $months[$month-1];
    $fullDateString = "Idag är det " . strtolower(translate($weekday)) . " den " . $day . " " . strtolower($months[$month-1]) . " ";
    function isDateEven($day) {
      if ($day % 2 == 0) {
        return true;
      } else {
        return false;
      }
    }
    function translate($weekday){
        if($weekday == "Monday"){
            return "Måndag";
        }elseif($weekday == "Tuesday"){
            return "Tisdag";
        }elseif($weekday == "Wednesday"){
            return "Onsdag";
        }elseif($weekday == "Thursday"){
            return "Torsdag";
        }elseif($weekday == "Friday"){
            return "Fredag";
        }elseif($weekday == "Saturday"){
            return "Lördag";
        }elseif($weekday == "Sunday"){
            return "Söndag";
        }
    }
          ?>
        <p>
    <?php if (count($namnsdag) == 1) {
      echo "<a href='" . $wikiUrl . "'>" . $namnsdag[0] . "</a> har namnsdag idag";
    } else {
      echo  "<a href='" . $wikiUrl . "'>" . $namnsdag[0] . "</a> och <a href='" . $wikiUrl . "'>" . $namnsdag[1] . "</a> har namnsdag idag";
    }
    ?>
    <h2><?= $fullDateString; ?></h2>
    <p><?= isDateEven($day) ? "Datumet är jämnt" : "Datumet är udda"; ?></p>

    </p>
  </main>
  <?php include 'include/footer.php'; ?>

  
</body>
</html>