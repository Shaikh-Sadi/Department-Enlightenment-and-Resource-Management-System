<?php
include_once 'config.php';


?>

<!DOCTYPE html>
<html>
<body>

<?php

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$y_val)
  {
  echo "Key=" . $x . ", Vlue=" . $y_val;
  echo "<br>";
  }

?>

</body>
</html>