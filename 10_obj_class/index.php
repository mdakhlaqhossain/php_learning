<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      
    class Fruit { //class name
      // Properties
      public $name;
      public $color;

      // Methods
      function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }
    }

    $apple = new Fruit(); // create an object
    $banana = new Fruit(); // create an object
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";

    ?> 

</html>