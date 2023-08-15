<!DOCTYPE html>
<html>
<body>

<?php
class Student {
  // Properties
  public $name;
  public $rollNo;

  // Methods
  function __construct($name, $rollNo) {
    $this->name = $name; 
    $this->rollNo = $rollNo; 
  }
//   function set_name($name) {
//     $this->name = $name;
//   }
  function get_name() {
    return $this->name;
  }
//   function set_rollNo($rollNo) {
//     $this->rollNo = $rollNo;
//   }
  function get_rollNo() {
    return $this->rollNo;
  }
}

$Anna= new Student("Anna", "R005");


echo $Anna->get_name();
echo "<br>";
echo $Anna->get_rollNo();
?>
 
</body>
</html>
