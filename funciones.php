<!--Paul Paredes -->
<?php
//Funciones para generar el html que presentan los días de la semana en un combobox
function generarDia(){
    $dia = ['Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'] ;
    $html = '<select id="cbDia" name="dia">';

        for($i=0; $i<sizeof($dia); $i++){
            $html = $html.'<option value="'.$dia[$i].'">'.$dia[$i].'</option>';
        }
        $html = $html.'</select>';
        
        return $html;
    }
//Genera el html para presentar la hora en un combobox    
function generarHora(){

        $html = '<select id="cbHora" name="hora">';
    
            for($i=1; $i<=24; $i++){
                if($i<13)
                    $html = $html.'<option value="'.$i.'">'.$i.' am</option>';
                elseif($i>=13)
                    $html = $html.'<option value="'.$i.'">'.$i.' pm</option>';
            }
            $html = $html.'</select>';
        
            return $html;
        }
//Genera el html para presentar los minutos en un combobox
function generarMinuto(){
    $html = '<select id="cbMinuto" name="minuto">';

        for($i=0; $i<60; $i++){
            if($i<10)
                $html = $html.'<option value="'.$i.'">0'.$i.'</option>';
            elseif($i>=10)
                $html = $html.'<option value="'.$i.'">'.$i.'</option>';
        }
        $html = $html.'</select>';
    
        return $html;
}

function verifica($array, $aux, $ultimodigito, $hora, $minuto, $placa){
    for($i=0; $i<sizeof($array[$aux]);$i++){
        if($ultimodigito==$array[$aux][$i]){
            if($hora >= 7 && $hora <= 9 )
                if($hora == 9 && $minuto<=30 || $hora >= 7 && $hora<9){
                    $error = "Prohibido utilizar carro con placa (".$placa. ") Termina en : ".$ultimodigito;
                    return $error;
                }
            if($hora >= 16 && $hora <= 19)
                if($hora == 19 && $minuto<=30 || $hora >= 16 && $hora<19){
                    $error = "Prohibido utilizar carro con placa (".$placa. ") Termina en : ".$ultimodigito;
                    return $error;
                }
        }
    }
    return $error = "El vehículo puede transitar en el horario consultado";
}
?>            
