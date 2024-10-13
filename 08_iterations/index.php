<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      //for loop
      for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }
    
      //while loop
      $i = 1;
      while ($i < 6) {
        echo "$i <br>";
        $i++;
      }

      //do while loop
      $j = 8;
      do {
        echo "$j <br>";
        $j++;
      } while ($j < 6); // run at least one time

      //foreach loop
      $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  
      foreach ($members as $p => $q) {
        echo "$p : $q <br>";
      }
    ?> 

</html>