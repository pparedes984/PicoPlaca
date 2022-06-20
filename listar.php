<!--Paul Paredes -->
<?php
$digitoNo = [[1, 2], [3, 4], [5, 6], [7,8], [9,0]];
    
?>

<html>
    <head>
        <title>Horarios Pico y Placa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <center>
    <div class="panel panel-default" style="width:500px;margin-top:100px;">  
        <div class="panel-heading"><h3><b>Horarios Pico y Placa</b></h3></div>
            <div class="panel-body">
                <table class="table" > 
                    <tr>
                        <th>Dias</th>
                        <th>Último dígito de la placa</th>
                    </tr>
                    <?php 

                        echo "<tr>
                                    <td>Lunes</td><td>".$digitoNo[0][0].", ".$digitoNo[0][1]."</td>
                                </tr>
                                <tr>
                                    <td>Martes</td><td>".$digitoNo[1][0].", ".$digitoNo[1][1]."</td>
                                </tr>
                                <tr>
                                    <td>Miercoles</td><td>".$digitoNo[2][0].", ".$digitoNo[2][1]."</td>
                                </tr>
                                <tr>
                                    <td>Jueves</td><td>".$digitoNo[3][0].", ".$digitoNo[3][1]."</td>
                                </tr>
                                <tr>
                                    <td>Viernes</td><td>".$digitoNo[4][0].", ".$digitoNo[4][1]."</td>
                                </tr>";
                    ?>
                    <tr>
                        <td>Sabado</td>
                        <td>No hay restricción</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td>No hay restricción</td>
                    </tr>
                    <tr>
                        <td colspan="2">Los horarios en los que se aplica el pico y placa son los siguientes:
                             Hours: 6:00am - 9:30am / 16:00pm - 21:00pm de acuerdo al día</td>
                    </tr>
                </table>
                <input type="button" name="btnRegresar" value="Regresar" onClick ="javascript:location.href='index.php';">
            </div>
        </div>
    </div>
    </center>
    </body>
</html>
