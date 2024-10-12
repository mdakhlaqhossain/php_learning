<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      
      $food = "I Love Pizza";//string
    
      echo $food;
      echo '<br>';
      echo strlen($food);//string length
      echo '<br>';
      echo str_word_count($food);//count words
      echo '<br>';
      echo strrev($food);//string reverse
      echo '<br>';
      echo strpos($food,'i');//search position
      echo '<br>';
      echo str_replace('Love', 'Like', $food);//replace string

    ?> 

</html>