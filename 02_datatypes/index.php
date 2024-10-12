<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      // PHP is case-sensitive except variable
      // variable starts with $
      // variable name start with letter or underscore
      // variable name can contain letter, number, underscore
      $food = "Pizza";//string
      $Food = 'Burger';//string
      $age = 25;//integer
      $weight = 55.6;//float
      $isMuslim = true;//boolean
      $nothing = null;//null
      $peoples = array("John", "Jane", "Jim");//array
      echo 'I Love '.$food.'<br>'; //string concat with .
      echo 'I Love '.$Food.'<br>';
    
      echo (print($Food)); //returns with 1

      echo '<br>';
      var_dump($food);
      echo '<br>';
      var_dump($age);
      echo '<br>';
      var_dump($peoples);
      
    ?> 

</html>