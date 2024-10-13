<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

      $a=2;
      $b=4;
    
      echo "a = ".$a;
      echo "<br>";
      echo "b = ".$b;
      echo "<br>";
    
      //arithmatic operators
      echo $a+$b;
      echo "<br>";
      echo $a-$b;
      echo "<br>";
      echo $a*$b;
      echo "<br>";
      echo $a/$b;
      echo "<br>";
      echo $a%$b;
      echo "<br>";
      echo $a**$b;
      echo "<br>";
      echo "<br>";

      //assignment operators
      $x = 10;
      $y = 30;
      echo "x = ".$x;
      echo "<br>";
      echo "y = ".$y;
      echo "<br>";
      echo $x+=$y;
      echo "<br>";
      echo $x-=$y;
      echo "<br>";
      echo $x*=$y;
      echo "<br>";
      echo $x/=$y;
      echo "<br>";
      echo $x%=$y;
      echo "<br>";
      echo $x=$y;
      echo "<br>";
      echo "<br>";

      //comparison operators
      $p = 35;
      $q = '35';
      echo "p = ".$p;
      echo "<br>";
      echo "q = ".$q;
      echo "<br>";
      var_dump($p==$q); //is equal (to look like)
      echo "<br>";
      var_dump($p===$q); //is identical
      echo "<br>";
      var_dump($p!=$q); //is not equal (to look like)
      echo "<br>";
      var_dump($p!==$q); //is not identical
      echo "<br>";
      var_dump($p<$q); 
      echo "<br>";
      var_dump($p>$q); 
      echo "<br>";
      var_dump($p<=$q); 
      echo "<br>";
      var_dump($p>=$q); 
      echo "<br>";


    ?> 

</html>