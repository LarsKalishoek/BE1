<?php
// set the default timezone to use.
date_default_timezone_set('Europe/Amsterdam');
$time_check = date("h");
$time3 = date("h:i:s");
$date = date("h:i:s a");

if (preg_match('/\bpm\b/', $date)) {
  if (date("h") <= 18){
      $bg_img = "images/afternoon.png";
      $text = "Goede Middag";
  }else{ 
      $bg_img = "images/evening.png";
      $text = "Goede Avond";
  }
}else{
  if (date("h") <= 6){
      $bg_img = "images/night.png";
      $text = "Goede Nacht";
  }else{
      $bg_img = "images/morning.png";
      $text = "Goede Morgen";
  }
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Goede Dag</title>
    <!-- CSS -->
    <style>
      body{
        background-image: url(<?= $bg_img ?>);
        background-size: cover;
      }
      #time{
        font-size: 50px;
        font-weight: bold;
        width: fit-content;
        margin: 230px auto auto auto;
        text-align: center;
    }
    </style>
   <!-- HTML --> 
  </head>
  <body>
    <div id = "time">
      <?= $text, $time3 ?>
    </div>
  </body>

  <script>
  setInterval(function() {
    // This function will be executed every minute
    // Get the current time
    var now = new Date();
    // Update the content of the div with the current time
    document.getElementById("time").innerHTML = "<?= $text ?>" + "<br>" + now.toLocaleTimeString();
  }, 1); // 1000 milliseconds = 1 second*

  </script>
</html>