<!--Paul Paredes!>

<!--Verificación de pico y placa -->
<?php
require('funciones.php');

if(isset($_POST["txtPlaca"]))
    $placa = $_POST["txtPlaca"];
if(isset($_POST["dia"]))
    $dia = $_POST["dia"];
if(isset($_POST['hora']))
    $hora = $_POST['hora'];
if(isset($_POST['minuto']))
    $minuto = $_POST['minuto'];

$digitoNo = [[1, 2], [3, 4], [5, 6], [7,8], [9,0]];
$diasNo = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
$array = array_combine($diasNo, $digitoNo); //Se almacena en un arreglo a la clave día el valor que no puede circular dicho día
$error = "No tiene restricciones";
$ultimodigito = substr($placa, -1);//Obtiene el ultimo dígito de la placa*/

//Para cada día se verifica cual npumero puede circular y en la hora en la que puede circular
switch ($dia){
    case 'Lunes':
        $aux = 'lunes';
        $error = verifica($array,$aux, $ultimodigito, $hora, $minuto, $placa);
        break;
       
    case 'Martes':
        $aux = 'martes';
        $error = verifica($array,$aux, $ultimodigito, $hora, $minuto, $placa);
        break;
    case 'Miercoles':
        $aux = 'miercoles';
        $error = verifica($array,$aux, $ultimodigito, $hora, $minuto, $placa);
        break;
    case 'Jueves':
        $aux = 'jueves';
        $error = verifica($array,$aux, $ultimodigito, $hora, $minuto, $placa);
        break;
    case 'Viernes':
        $aux = 'viernes';
        $error = verifica($array,$aux, $ultimodigito, $hora, $minuto, $placa);
        break;
    case 'Sabado':
        $error = "Sin restriccion, el vehículo puede transitar en el horario consultado";
        break;
    case 'Domingo':
        $error = "Sin restriccion, el vehículo puede transitar en el horario consultado";
        break;

}
$url = "location:index.php?error=" .$error;
header($url);

?>
