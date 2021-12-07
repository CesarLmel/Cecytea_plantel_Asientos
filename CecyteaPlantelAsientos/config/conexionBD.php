<?php
$servidor="localhost";
$BD= "cecyteaplantel_asientos";
$username="root";
$contraseña="";

$conn="mysqli_connect($servidor,$BD,$username,$contraseña)";

if(!$conn){
die("coneccion fallida")

}
echo "coneccion exitosa";
mysqli_close($conn)

?>
