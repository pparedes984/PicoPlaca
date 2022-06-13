<!--Paul Paredes-->
<!--Página de inicio -->
<?php
include('funciones.php');

if(isset($_GET['error']))
    $error = $_GET['error'];
else
    $error = " ";
?>
<html lang="es">
    <head>
        <title>Pico y Placa Predictor</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    	
    <body>
        <header>
            <?php 
            require_once('header.php');
            ?>
        </header>
    
        <center>
        
            <form action="verificar.php" method="POST" name="frm">
            <div class="panel panel-default" style="width:500px;margin-top:100px;">  
                <div class="panel-heading"><h3><b>Pico y Placa Predictor</b></h3></div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>Número de placa:</td>
                                <td><input type="text" name="txtPlaca" id="txtPlaca" required placeholder="Ej: ABC-123 o ABC-1234" pattern="[A-Z]{3}[-]\d{3,4}"></td>
                            </tr>
                            <tr>
                                <td>Dia:</td>
                                <td><?php echo (generarDia()); ?>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2">Tiempo:</td>
                                <td>Hora: <?php echo(generarHora()); ?> </td>
                            </tr>
                            <tr>
                                <td>Minuto: <?php echo(generarMinuto()); ?> </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center;">				
                                    <input type="submit" value="Verificar" id="verificar">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            </form>

            <div>
                <p>
                    <h3><font color="darkblue">
                    <?php echo $error?>
                    </font></h3>
                </p>
            </div>

            <div>
                <p>
                    Verifique horario de pico y placa en la pestaña superior izquiera (Disponibilidad)
                </p>
            </div>
            
            
        </center>
        
        <footer>
            <?php 
                include_once('footer.php');
            ?>
        </footer>
    </body>
</html>
