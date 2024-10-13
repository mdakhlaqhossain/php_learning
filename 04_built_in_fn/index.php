<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

      $food = "I Love Pizza";//string

      $a = 10;
      $b = 20;
      echo(pi());
      echo('<br>');
      echo(min(0, 150, 30, 20, -8, -200));
      echo('<br>');
      echo(max(0, 150, 30, 20, -8, -200));
      echo('<br>');
      echo(abs(-200));
      echo('<br>');
      echo(sqrt(9));
      echo('<br>');
      echo(round(9.545));
      echo('<br>');
      echo(rand());
      echo('<br>');
      echo(rand(10,30));//random number between 10 and 30
      echo('<br>');

      //date functions
      date_default_timezone_set("Asia/Dhaka");
      echo "Today is " . date("Y/m/d") . "<br>";
      echo "Today is " . date("d/m/Y") . "<br>";
      echo "Today is " . date("Y.m.d") . "<br>";
      echo "Today is " . date("Y-m-d") . "<br>";
      echo "Today is " . date("d-m-Y") . "<br>";
      echo "Today is " . date("l") . "<br>";
      echo "The time is " . date("h:i:sa") . "<br>";
      echo "The time is " . date("H:i:s") . "<br>";
      echo "The time is " . date("g:i a") . "<br>";
      echo "The time is " . date("g:i A") . "<br>";
    

      

    ?> 

</html>