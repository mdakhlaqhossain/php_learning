<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $age = 16;

      if ($age > 10) {
        echo "Age is above 10";
        if ($age > 20) {
          echo " and also above 20";
        } elseif ($age < 15) {
          echo " and also below 15";
        } else {
          echo " but not below 15 and above 20";
        }
      }

      echo "<br>";
      $favcolor = "red";

      switch ($favcolor) {
        case "red":
          echo "Your favorite color is red!";
          break;
        case "blue":
          echo "Your favorite color is blue!";
          break;
        case "green":
          echo "Your favorite color is green!";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
      }
    ?> 

</html>