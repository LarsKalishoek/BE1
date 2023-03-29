<?php
// set the default timezone to use.
date_default_timezone_set('Europe/Amsterdam');
$time_check = date("h");
$time3 = date("h:i:s");
$time = date("h:i:s A");
$findme = 'a';
$pos = strpos($time, $findme);

if ($pos === false) {
  if ($time_check >= 6){
    $text = "Goede Morgen! <br>";
    $bg_img = "images/morning.png";
  }else{
    $text = "Goede Nacht! <br>";
    $bg_img = "images/night.png";
  }
if ($pos === true){
  if ($time_check >= 6){
    $text = "Goede Avond!";
    $bg_img = "images/evening.png";
  }else{
    $text = "Goede Middag!";
    $bg_img = "images/afternoon.png";
  }
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
    document.getElementById("time").innerHTML = "<?= $text?>"+ now.toLocaleTimeString();
  }, 1000); // 1000 milliseconds = 1 second*

  </script>
</html>