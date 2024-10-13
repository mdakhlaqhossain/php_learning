<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      // user defined function
      function writeMsg() { //non-parameterized
        echo "Hello world!<br>";
      }
      writeMsg();
    
      function bmicalc($weight, $height = 1.7){
        $bmi = $weight / ($height * $height);
        echo "Your BMI is $bmi<br>";
        echo "Standard is between 18.5 and 24.9<br>";
      }
      bmiCalc(55, 1.64);
      bmiCalc(80, 1.80);
      bmiCalc(60);

    ?> 

</html>