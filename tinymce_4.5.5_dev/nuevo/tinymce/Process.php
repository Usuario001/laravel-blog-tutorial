<?php
if (isset($_POST['nombre'])) {
  print_r($_POST);
  espaciarEspacios();
  var_dump($_POST);
  espaciarEspacios();
  echo $_POST['cuznoname'];
}else {
  echo "No Submit Form";
}



function espaciarEspacios(){
  for ($i=0; $i < 20; $i++) {
    echo "<br>";
  }

}
 ?>

