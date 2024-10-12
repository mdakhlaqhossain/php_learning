<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    
      $c=2; //value changeable and not global
    
      define('a', 17); //value not changeable and global
      echo (a); 
      echo('<br>');
    
      define('A', 18); //value not changeable and global
      echo (A); 
      echo('<br>');
    
      define('cars', [ 
        'BMW', 
        'Toyota', 
        'Mazda' 
       ]); 
      echo (cars[1]); 
      echo('<br>');
    
      var_dump(cars);
      



    ?> 

</html>