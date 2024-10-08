<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      echo 'Hello World';
      //this is one line comment
      /*
      this is blocked line comment
      this is blocked line comment
      */
      // PHP is partially case-sensitive.
      echo '<h1>Hello World1</h1>';
      ECHO '<h2>Hello World2</h2>';
      Echo '<h3>Hello World3</h3>';
    
    
      // PHP is case-sensitive except variable
      // variable starts with $
      // variable name start with letter or underscore
      // variable name can contain letter, number, underscore
      $food = "Pizza";
      $Food = "Burger";
      echo 'I Love '.$food.'<br>'; //string concat with .
      echo 'I Love '.$Food;
    ?> 

</html>