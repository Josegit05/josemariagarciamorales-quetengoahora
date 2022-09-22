<?php
date_default_timezone_set("Europe/London");


$array["Lunes"][1]["modulo"] = "EMR";
$array["Lunes"][1]["profesor"] = "MARIA DEL SOL";
$array["Lunes"][1]["taller"] = "201"."<br>";

$array["Lunes"][2]["modulo"] = "DSW";
$array["Lunes"][2]["profesor"] = "SERGIO RAMOS";
$array["Lunes"][2]["taller"] = "201"."<br>";

$array["Lunes"][3]["modulo"] = "DSW";
$array["Lunes"][3]["profesor"] = "SERGIO RAMOS";
$array["Lunes"][3]["taller"] = "201"."<br>";

$array["Lunes"][4]["modulo"] = "DEW";
$array["Lunes"][4]["profesor"] = "MARIA DEL CARMEN";
$array["Lunes"][4]["taller"] = "201"."<br>";

$array["Lunes"][5]["modulo"] = "DEW";
$array["Lunes"][5]["profesor"] = "MARIA DEL CARMEN";
$array["Lunes"][5]["taller"] = "201"."<br>";

$array["Lunes"][6]["modulo"] = "DEW";
$array["Lunes"][6]["profesor"] = "MARIA DEL CARMEN";
$array["Lunes"][6]["taller"] = "201"."<br>";

$array["Martes"][1]["modulo"] = "DPL";
$array["Martes"][1]["profesor"] = "MARIA ANTONIA";
$array["Martes"][1]["taller"] = "201"."<br>";

$array["Martes"][2]["modulo"] = "DPL";
$array["Martes"][2]["profesor"] = "MARIA ANTONIA";
$array["Martes"][2]["taller"] = "201"."<br>";

$array["Martes"][3]["modulo"] = "DSW";
$array["Martes"][3]["profesor"] = "SERGIO RAMOS";
$array["Martes"][3]["taller"] = "201"."<br>";

$array["Martes"][4]["modulo"] = "DSW";
$array["Martes"][4]["profesor"] = "SERGIO RAMOS";
$array["Martes"][4]["taller"] = "201"."<br>";

$array["Martes"][5]["modulo"] = "DOR";
$array["Martes"][5]["profesor"] = "MARIA DEL CARMEN";
$array["Martes"][5]["taller"] = "201"."<br>";

$array["Martes"][6]["modulo"] = "DOR";
$array["Martes"][6]["profesor"] = "ERMIS BAEZ";
$array["Martes"][6]["taller"] = "201"."<br>";

$array["Miércoles"][1]["modulo"] = "DEW";
$array["Miércoles"][1]["profesor"] = "MARIA DEL CARMEN";
$array["Miércoles"][1]["taller"] = "201"."<br>";

$array["Miércoles"][2]["modulo"] = "DEW";
$array["Miércoles"][2]["profesor"] = "MARIA DEL CARMEN";
$array["Miércoles"][2]["taller"] = "201"."<br>";

$array["Miércoles"][3]["modulo"] = "DSW";
$array["Miércoles"][3]["profesor"] = "SERGIO RAMOS";
$array["Miércoles"][3]["taller"] = "201"."<br>";

$array["Miércoles"][4]["modulo"] = "DSW";
$array["Miércoles"][4]["profesor"] = "SERGIO RAMOS";
$array["Miércoles"][4]["taller"] = "201"."<br>";

$array["Miércoles"][5]["modulo"] = "DOR";
$array["Miércoles"][5]["profesor"] = "ERMIS BAEZ";
$array["Miércoles"][5]["taller"] = "201"."<br>";

$array["Miércoles"][6]["modulo"] = "DOR";
$array["Miércoles"][6]["profesor"] = "ERMIS BAEZ";
$array["Miércoles"][6]["taller"] = "201"."<br>";

$array["Jueves"][1]["modulo"] = "DPL";
$array["Jueves"][1]["profesor"] = "MARIA ANTONIA";
$array["Jueves"][1]["taller"] = "201"."<br>";

$array["Jueves"][2]["modulo"] = "DPL";
$array["Jueves"][2]["profesor"] = "MARIA ANTONIA";
$array["Jueves"][2]["taller"] = "201"."<br>";

$array["Jueves"][3]["modulo"] = "DPL";
$array["Jueves"][3]["profesor"] = "MARIA ANTONIA";
$array["Jueves"][3]["taller"] = "201"."<br>";

$array["Jueves"][4]["modulo"] = "DEW";
$array["Jueves"][4]["profesor"] = "MARIA DEL CARMEN";
$array["Jueves"][4]["taller"] = "201"."<br>";

$array["Jueves"][5]["modulo"] = "DEW";
$array["Jueves"][5]["profesor"] = "MARIA DEL CARMEN";
$array["Jueves"][5]["taller"] = "201"."<br>";

$array["Jueves"][6]["modulo"] = "EMR";
$array["Jueves"][6]["profesor"] = "MARIA DEL SOL";
$array["Jueves"][6]["taller"] = "201"."<br>";

$array["Viernes"][1]["modulo"] = "DOR";
$array["Viernes"][1]["profesor"] = "ERMIS BAEZ";
$array["Viernes"][1]["taller"] = "201"."<br>";

$array["Viernes"][2]["modulo"] = "DOR";
$array["Viernes"][2]["profesor"] = "ERMIS BAEZ";
$array["Viernes"][2]["taller"] = "201"."<br>";

$array["Viernes"][3]["modulo"] = "DPL";
$array["Viernes"][3]["profesor"] = "MARIA ANTONIA";
$array["Viernes"][3]["taller"] = "201"."<br>";

$array["Viernes"][4]["modulo"] = "EMR";
$array["Viernes"][4]["profesor"] = "MARIA DEL SOL";
$array["Viernes"][4]["taller"] = "201"."<br>";

$array["Viernes"][5]["modulo"] = "DSW";
$array["Viernes"][5]["profesor"] = "SERGIO RAMOS";
$array["Viernes"][5]["taller"] = "201"."<br>";

$array["Viernes"][6]["modulo"] = "DSW";
$array["Viernes"][6]["profesor"] = "SERGIO RAMOS";
$array["Viernes"][6]["taller"] = "201"."<br>";
  

function uno(){
  global $array;
  foreach($array as $dia=>$valor){
    echo "<br>".$dia.":"."<br>";
    foreach($valor as $hora=>$valor2){
      "<br>";
      foreach($valor2 as $modulo=>$valor3){
       echo $hora.":".$modulo.": ".$valor3."<br>";
        }
        "<br>"."<br>"."<br>"; 
      }
      
    }
    
  }
  uno();


  $horaactual=date("G");
  $minutosactuales=date("i");
  $diaactual=date("l");
  function dos($dia,$hora,$minutos){
    global $array;
    global $diaactual;
    global $minutosactuales;
      switch ($diaactual) {
        case "Monday":
            $diaEspanol  = "Lunes";
            break;
        case "Tuesday":
            $diaEspanol  = "Martes";
            break;
        case "Wednesday":
            $diaEspanol  = "Miércoles";
            break;
        case "Thursday":
            $diaEspanol  = "Jueves";
            break;
        case "Friday":
            $diaEspanol  = "Viernes";
            break;
        case "Saturday":
            $diaEspanol  = "Sábado";
            break;
        case "Sunday":
            $diaEspanol  = "Domingo";
            break;
    }

    if ($hora == 8 and $minutosactuales>=0 and $minutos <=55){ 
    $QUEHORA=1;
    }
    elseif($hora == 8 and $minutos > 55 or $hora == 9 and $minutos <= 50){
      $QUEHORA=2;
    }
    elseif($hora == 9 and $minutos > 50 or $hora == 10 and $minutos <= 45){
      $QUEHORA=3;
    }
    elseif($hora == 11 and $minutos > 15 or $hora == 12 and $minutos <= 10){
      $QUEHORA=4;
    }
    elseif($hora == 12 and $minutos > 10 or $hora == 13 and $minutos <= 05){
      $QUEHORA=5;
    }
    elseif($hora == 13 and $minutos > 05 or $hora == 13 and $minutos <= 50){
      $QUEHORA=6;
    }
    elseif($hora == 10 and $minutos > 45 or $hora == 11 and $minutos <= 15){
      $QUEHORA=7;
    }
    else{
      $QUEHORA=8;
    }

      foreach($array as $dia=>$valor){

        if ($diaEspanol == $dia){ 
          
          foreach($valor as $hora=>$valor2){
            if($hora==$QUEHORA){
              $horaguardada=$hora;
              $diaguardado=$dia;
            }
          }
        } 
      }
      if($QUEHORA==8){
        echo "No estamos en clase";
      }
      elseif($QUEHORA==7){
        echo "Estamos en el recreo";
      }
      else{ 
        echo "Ahora toca ".$array[$diaguardado][$horaguardada]["modulo"]." con el profesor ".$array[$diaguardado][$horaguardada]["profesor"]."
        en el aula ".$array[$diaguardado][$horaguardada]["taller"];
      }
  }

   dos($diaactual,$horaactual,$minutosactuales);