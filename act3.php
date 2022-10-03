<?php
date_default_timezone_set("Europe/London");
include("Formulario.html");
if($_POST['grupo']=='DAW')
{ 
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

        

    foreach($array as $dia=>$valor)
    {
        
        echo "<table style='display: inline'>";
        echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
        echo "<th style='border-collapse:collapse; border: 1px solid black'>HORA</th>";
        echo "<th colspan='3' style='border-collapse:collapse; border: 1px solid black;background-color:rgb(28, 255, 228)'>".$dia."</th>";
        
        foreach($valor as $hora=>$valor2){
        foreach($valor2 as $modulo=>$valor3){
            echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
            echo "<td style='border-collapse:collapse; border: 1px solid black'>".$hora." hora.</td>";
            echo "<td style='border-collapse:collapse; border: 1px solid black'>".$valor3."</td>";
            
            echo "</tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
    echo "<br><br>";

    
}

if($_POST['grupo']=='DAM')
{ 
  $array["Lunes"][1]["modulo"] = "DEW";
  $array["Lunes"][1]["profesor"] = "ANA DEL SOL";
  $array["Lunes"][1]["taller"] = "101"."<br>";

  $array["Lunes"][2]["modulo"] = "DPL";
  $array["Lunes"][2]["profesor"] = "SONIA RAMOS";
  $array["Lunes"][2]["taller"] = "101"."<br>";

  $array["Lunes"][3]["modulo"] = "DPL";
  $array["Lunes"][3]["profesor"] = "SONIA RAMOS";
  $array["Lunes"][3]["taller"] = "101"."<br>";

  $array["Lunes"][4]["modulo"] = "DOR";
  $array["Lunes"][4]["profesor"] = "MARI MENDEZ";
  $array["Lunes"][4]["taller"] = "101"."<br>";

  $array["Lunes"][5]["modulo"] = "DOR";
  $array["Lunes"][5]["profesor"] = "MARI MENDEZ";
  $array["Lunes"][5]["taller"] = "101"."<br>";

  $array["Lunes"][6]["modulo"] = "DEW";
  $array["Lunes"][6]["profesor"] = "ANA DEL SOL";
  $array["Lunes"][6]["taller"] = "101"."<br>";

  $array["Martes"][1]["modulo"] = "DPL";
  $array["Martes"][1]["profesor"] = "SONIA RAMOS";
  $array["Martes"][1]["taller"] = "101"."<br>";

  $array["Martes"][2]["modulo"] = "DPL";
  $array["Martes"][2]["profesor"] = "SONIA RAMOS";
  $array["Martes"][2]["taller"] = "101"."<br>";

  $array["Martes"][3]["modulo"] = "DSW";
  $array["Martes"][3]["profesor"] = "SERGIA AMONSKY";
  $array["Martes"][3]["taller"] = "101"."<br>";

  $array["Martes"][4]["modulo"] = "DSW";
  $array["Martes"][4]["profesor"] = "SERGIA AMONSKY";
  $array["Martes"][4]["taller"] = "101"."<br>";

  $array["Martes"][5]["modulo"] = "DOR";
  $array["Martes"][5]["profesor"] = "MARI MENDEZ";
  $array["Martes"][5]["taller"] = "101"."<br>";

  $array["Martes"][6]["modulo"] = "DOR";
  $array["Martes"][6]["profesor"] = "MARI MENDEZ";
  $array["Martes"][6]["taller"] = "101"."<br>";

  $array["Miércoles"][1]["modulo"] = "DEW";
  $array["Miércoles"][1]["profesor"] = "ANA DEL SOL";
  $array["Miércoles"][1]["taller"] = "101"."<br>";

  $array["Miércoles"][2]["modulo"] = "DEW";
  $array["Miércoles"][2]["profesor"] = "ANA DEL SOL";
  $array["Miércoles"][2]["taller"] = "101"."<br>";

  $array["Miércoles"][3]["modulo"] = "DSW";
  $array["Miércoles"][3]["profesor"] = "SERGIA AMONSKY";
  $array["Miércoles"][3]["taller"] = "101"."<br>";

  $array["Miércoles"][4]["modulo"] = "DSW";
  $array["Miércoles"][4]["profesor"] = "SERGIA AMONSKY";
  $array["Miércoles"][4]["taller"] = "201"."<br>";

  $array["Miércoles"][5]["modulo"] = "DOR";
  $array["Miércoles"][5]["profesor"] = "MARI MENDEZ";
  $array["Miércoles"][5]["taller"] = "101"."<br>";

  $array["Miércoles"][6]["modulo"] = "DOR";
  $array["Miércoles"][6]["profesor"] = "MARI MENDEZ";
  $array["Miércoles"][6]["taller"] = "101"."<br>";

  $array["Jueves"][1]["modulo"] = "DPL";
  $array["Jueves"][1]["profesor"] = "SONIA RAMOS";
  $array["Jueves"][1]["taller"] = "101"."<br>";

  $array["Jueves"][2]["modulo"] = "DPL";
  $array["Jueves"][2]["profesor"] = "SONIA RAMOS";
  $array["Jueves"][2]["taller"] = "101"."<br>";

  $array["Jueves"][3]["modulo"] = "DPL";
  $array["Jueves"][3]["profesor"] = "SONIA RAMOS";
  $array["Jueves"][3]["taller"] = "101"."<br>";

  $array["Jueves"][4]["modulo"] = "DEW";
  $array["Jueves"][4]["profesor"] = "ANA DEL SOL";
  $array["Jueves"][4]["taller"] = "101"."<br>";

  $array["Jueves"][5]["modulo"] = "DEW";
  $array["Jueves"][5]["profesor"] = "ANA DEL SOL";
  $array["Jueves"][5]["taller"] = "101"."<br>";

  $array["Jueves"][6]["modulo"] = "EMR";
  $array["Jueves"][6]["profesor"] = "MARIA DEL SOL";
  $array["Jueves"][6]["taller"] = "101"."<br>";

  $array["Viernes"][1]["modulo"] = "DOR";
  $array["Viernes"][1]["profesor"] = "ERMIS BAEZ";
  $array["Viernes"][1]["taller"] = "101"."<br>";

  $array["Viernes"][2]["modulo"] = "DOR";
  $array["Viernes"][2]["profesor"] = "ERMIS BAEZ";
  $array["Viernes"][2]["taller"] = "101"."<br>";

  $array["Viernes"][3]["modulo"] = "DPL";
  $array["Viernes"][3]["profesor"] = "SONIA RAMOS";
  $array["Viernes"][3]["taller"] = "101"."<br>";

  $array["Viernes"][4]["modulo"] = "EMR";
  $array["Viernes"][4]["profesor"] = "MARIA DEL SOL";
  $array["Viernes"][4]["taller"] = "101"."<br>";

  $array["Viernes"][5]["modulo"] = "DSW";
  $array["Viernes"][5]["profesor"] = "SERGIA AMONSKY";
  $array["Viernes"][5]["taller"] = "101"."<br>";

  $array["Viernes"][6]["modulo"] = "DSW";
  $array["Viernes"][6]["profesor"] = "SERGIA AMONSKY";
  $array["Viernes"][6]["taller"] = "101"."<br>";

  
    foreach($array as $dia=>$valor)
    {
       
        echo "<table style='display: inline'>";
        echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
        echo "<th style='border-collapse:collapse; border: 1px solid black'>HORA</th>";
        echo "<th colspan='3' style='border-collapse:collapse; border: 1px solid black;background-color:rgb(28, 255, 228)'>".$dia."</th>";
        
        foreach($valor as $hora=>$valor2){
        foreach($valor2 as $modulo=>$valor3){
            echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
            echo "<td style='border-collapse:collapse; border: 1px solid black'>".$hora." hora.</td>";
            echo "<td style='border-collapse:collapse; border: 1px solid black'>".$valor3."</td>";
            
            echo "</tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
     echo "<br><br>";
}
if($_POST['grupo']=='ASIR')
{ 
  $array["Lunes"][1]["modulo"] = "FOL";
  $array["Lunes"][1]["profesor"] = "MANUEL BOGLIANI";
  $array["Lunes"][1]["taller"] = "104"."<br>";

  $array["Lunes"][2]["modulo"] = "HOF";
  $array["Lunes"][2]["profesor"] = "CARMELO ORTIZ";
  $array["Lunes"][2]["taller"] = "104"."<br>";

  $array["Lunes"][3]["modulo"] = "HOF";
  $array["Lunes"][3]["profesor"] = "CARMELO ORTIZ";
  $array["Lunes"][3]["taller"] = "104"."<br>";

  $array["Lunes"][4]["modulo"] = "BAE";
  $array["Lunes"][4]["profesor"] = "LUIS HENRIQUEZ";
  $array["Lunes"][4]["taller"] = "104"."<br>";

  $array["Lunes"][5]["modulo"] = "BAE";
  $array["Lunes"][5]["profesor"] = "LUIS HENRIQUEZ";
  $array["Lunes"][5]["taller"] = "104"."<br>";

  $array["Lunes"][6]["modulo"] = "BAE";
  $array["Lunes"][6]["profesor"] = "LUIS HENRIQUEZ";
  $array["Lunes"][6]["taller"] = "104"."<br>";

  $array["Martes"][1]["modulo"] = "OEI";
  $array["Martes"][1]["profesor"] = "MARIA DE LOURDES";
  $array["Martes"][1]["taller"] = "104"."<br>";

  $array["Martes"][2]["modulo"] = "OEI";
  $array["Martes"][2]["profesor"] = "MARIA DE LOURDES";
  $array["Martes"][2]["taller"] = "104"."<br>";

  $array["Martes"][3]["modulo"] = "HOF";
  $array["Martes"][3]["profesor"] = "CARMELO ORTIZ";
  $array["Martes"][3]["taller"] = "104"."<br>";

  $array["Martes"][4]["modulo"] = "HOF";
  $array["Martes"][4]["profesor"] = "CARMELO ORTIZ";
  $array["Martes"][4]["taller"] = "104"."<br>";

  $array["Martes"][5]["modulo"] = "EN";
  $array["Martes"][5]["profesor"] = "AURORA MARIA";
  $array["Martes"][5]["taller"] = "104"."<br>";

  $array["Martes"][6]["modulo"] = "EN";
  $array["Martes"][6]["profesor"] = "AURORA MARIA";
  $array["Martes"][6]["taller"] = "104"."<br>";

  $array["Miércoles"][1]["modulo"] = "BAE";
  $array["Miércoles"][1]["profesor"] = "LUIS HENRIQUEZ";
  $array["Miércoles"][1]["taller"] = "104"."<br>";

  $array["Miércoles"][2]["modulo"] = "BAE";
  $array["Miércoles"][2]["profesor"] = "LUIS HENRIQUEZ";
  $array["Miércoles"][2]["taller"] = "104"."<br>";

  $array["Miércoles"][3]["modulo"] = "HOF";
  $array["Miércoles"][3]["profesor"] = "CARMELO ORTIZ";
  $array["Miércoles"][3]["taller"] = "104"."<br>";

  $array["Miércoles"][4]["modulo"] = "HOF";
  $array["Miércoles"][4]["profesor"] = "CARMELO ORTIZ";
  $array["Miércoles"][4]["taller"] = "104"."<br>";

  $array["Miércoles"][5]["modulo"] = "EN";
  $array["Miércoles"][5]["profesor"] = "AURORA MARIA";
  $array["Miércoles"][5]["taller"] = "104"."<br>";

  $array["Miércoles"][6]["modulo"] = "EN";
  $array["Miércoles"][6]["profesor"] = "AURORA MARIA";
  $array["Miércoles"][6]["taller"] = "104"."<br>";

  $array["Jueves"][1]["modulo"] = "OEI";
  $array["Jueves"][1]["profesor"] = "MARIA DE LOURDES";
  $array["Jueves"][1]["taller"] = "104"."<br>";

  $array["Jueves"][2]["modulo"] = "OEI";
  $array["Jueves"][2]["profesor"] = "MARIA DE LOURDES";
  $array["Jueves"][2]["taller"] = "104"."<br>";

  $array["Jueves"][3]["modulo"] = "OEI";
  $array["Jueves"][3]["profesor"] = "MARIA DE LOURDES";
  $array["Jueves"][3]["taller"] = "104"."<br>";

  $array["Jueves"][4]["modulo"] = "BAE";
  $array["Jueves"][4]["profesor"] = "LUIS HENRIQUEZ";
  $array["Jueves"][4]["taller"] = "104"."<br>";

  $array["Jueves"][5]["modulo"] = "BAE";
  $array["Jueves"][5]["profesor"] = "LUIS HENRIQUEZ";
  $array["Jueves"][5]["taller"] = "104"."<br>";

  $array["Jueves"][6]["modulo"] = "FOL";
  $array["Jueves"][6]["profesor"] = "MARIA DEL SOL";
  $array["Jueves"][6]["taller"] = "104"."<br>";

  $array["Viernes"][1]["modulo"] = "EN";
  $array["Viernes"][1]["profesor"] = "AURORA MARIA";
  $array["Viernes"][1]["taller"] = "104"."<br>";

  $array["Viernes"][2]["modulo"] = "EN";
  $array["Viernes"][2]["profesor"] = "AURORA MARIA";
  $array["Viernes"][2]["taller"] = "104"."<br>";

  $array["Viernes"][3]["modulo"] = "BAE";
  $array["Viernes"][3]["profesor"] = "LUIS HENRIQUEZ";
  $array["Viernes"][3]["taller"] = "104"."<br>";

  $array["Viernes"][4]["modulo"] = "FOL";
  $array["Viernes"][4]["profesor"] = "MARIA DEL SOL";
  $array["Viernes"][4]["taller"] = "104"."<br>";

  $array["Viernes"][5]["modulo"] = "HOF";
  $array["Viernes"][5]["profesor"] = "CARMELO ORTIZ";
  $array["Viernes"][5]["taller"] = "104"."<br>";

  $array["Viernes"][6]["modulo"] = "HOF";
  $array["Viernes"][6]["profesor"] = "CARMELO ORTIZ";
  $array["Viernes"][6]["taller"] = "104"."<br>";
  
    foreach($array as $dia=>$valor)
    {
       
        echo "<table style='display: inline'>";
        echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
        echo "<th style='border-collapse:collapse; border: 1px solid black'>HORA</th>";
        echo "<th colspan='3' style='border-collapse:collapse; border: 1px solid black;background-color:rgb(28, 255, 228)'>".$dia."</th>";
        
        foreach($valor as $hora=>$valor2){
        foreach($valor2 as $modulo=>$valor3){
            echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
            echo "<td style='border-collapse:collapse; border: 1px solid black'>".$hora." hora.</td>";
            echo "<td style='border-collapse:collapse; border: 1px solid black'>".$valor3."</td>";
            
            echo "</tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
    echo "<br><br>";
}


if($_POST['grupo']=='Profesor-DAW')
{ 
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
              echo "No estamos en clase<br>";
            }
            elseif($QUEHORA==7){
              echo "Estamos en el recreo<br>";
            }
            else{ 
              echo "Ahora toca ".$array[$diaguardado][$horaguardada]["modulo"]." con el profesor ".$array[$diaguardado][$horaguardada]["profesor"]."
              en el aula ".$array[$diaguardado][$horaguardada]["taller"]."<br>";
            }
        }
        dos($diaactual,$horaactual,$minutosactuales);
      }
      if($_POST['grupo']=='Profesor-DAM')
      { 
        $array["Lunes"][1]["modulo"] = "DEW";
        $array["Lunes"][1]["profesor"] = "ANA DEL SOL";
        $array["Lunes"][1]["taller"] = "101"."<br>";
      
        $array["Lunes"][2]["modulo"] = "DPL";
        $array["Lunes"][2]["profesor"] = "SONIA RAMOS";
        $array["Lunes"][2]["taller"] = "101"."<br>";
      
        $array["Lunes"][3]["modulo"] = "DPL";
        $array["Lunes"][3]["profesor"] = "SONIA RAMOS";
        $array["Lunes"][3]["taller"] = "101"."<br>";
      
        $array["Lunes"][4]["modulo"] = "DOR";
        $array["Lunes"][4]["profesor"] = "MARI MENDEZ";
        $array["Lunes"][4]["taller"] = "101"."<br>";
      
        $array["Lunes"][5]["modulo"] = "DOR";
        $array["Lunes"][5]["profesor"] = "MARI MENDEZ";
        $array["Lunes"][5]["taller"] = "101"."<br>";
      
        $array["Lunes"][6]["modulo"] = "DEW";
        $array["Lunes"][6]["profesor"] = "ANA DEL SOL";
        $array["Lunes"][6]["taller"] = "101"."<br>";
      
        $array["Martes"][1]["modulo"] = "DPL";
        $array["Martes"][1]["profesor"] = "SONIA RAMOS";
        $array["Martes"][1]["taller"] = "101"."<br>";
      
        $array["Martes"][2]["modulo"] = "DPL";
        $array["Martes"][2]["profesor"] = "SONIA RAMOS";
        $array["Martes"][2]["taller"] = "101"."<br>";
      
        $array["Martes"][3]["modulo"] = "DSW";
        $array["Martes"][3]["profesor"] = "SERGIA AMONSKY";
        $array["Martes"][3]["taller"] = "101"."<br>";
      
        $array["Martes"][4]["modulo"] = "DSW";
        $array["Martes"][4]["profesor"] = "SERGIA AMONSKY";
        $array["Martes"][4]["taller"] = "101"."<br>";
      
        $array["Martes"][5]["modulo"] = "DOR";
        $array["Martes"][5]["profesor"] = "MARI MENDEZ";
        $array["Martes"][5]["taller"] = "101"."<br>";
      
        $array["Martes"][6]["modulo"] = "DOR";
        $array["Martes"][6]["profesor"] = "MARI MENDEZ";
        $array["Martes"][6]["taller"] = "101"."<br>";
      
        $array["Miércoles"][1]["modulo"] = "DEW";
        $array["Miércoles"][1]["profesor"] = "ANA DEL SOL";
        $array["Miércoles"][1]["taller"] = "101"."<br>";
      
        $array["Miércoles"][2]["modulo"] = "DEW";
        $array["Miércoles"][2]["profesor"] = "ANA DEL SOL";
        $array["Miércoles"][2]["taller"] = "101"."<br>";
      
        $array["Miércoles"][3]["modulo"] = "DSW";
        $array["Miércoles"][3]["profesor"] = "SERGIA AMONSKY";
        $array["Miércoles"][3]["taller"] = "101"."<br>";
      
        $array["Miércoles"][4]["modulo"] = "DSW";
        $array["Miércoles"][4]["profesor"] = "SERGIA AMONSKY";
        $array["Miércoles"][4]["taller"] = "201"."<br>";
      
        $array["Miércoles"][5]["modulo"] = "DOR";
        $array["Miércoles"][5]["profesor"] = "MARI MENDEZ";
        $array["Miércoles"][5]["taller"] = "101"."<br>";
      
        $array["Miércoles"][6]["modulo"] = "DOR";
        $array["Miércoles"][6]["profesor"] = "MARI MENDEZ";
        $array["Miércoles"][6]["taller"] = "101"."<br>";
      
        $array["Jueves"][1]["modulo"] = "DPL";
        $array["Jueves"][1]["profesor"] = "SONIA RAMOS";
        $array["Jueves"][1]["taller"] = "101"."<br>";
      
        $array["Jueves"][2]["modulo"] = "DPL";
        $array["Jueves"][2]["profesor"] = "SONIA RAMOS";
        $array["Jueves"][2]["taller"] = "101"."<br>";
      
        $array["Jueves"][3]["modulo"] = "DPL";
        $array["Jueves"][3]["profesor"] = "SONIA RAMOS";
        $array["Jueves"][3]["taller"] = "101"."<br>";
      
        $array["Jueves"][4]["modulo"] = "DEW";
        $array["Jueves"][4]["profesor"] = "ANA DEL SOL";
        $array["Jueves"][4]["taller"] = "101"."<br>";
      
        $array["Jueves"][5]["modulo"] = "DEW";
        $array["Jueves"][5]["profesor"] = "ANA DEL SOL";
        $array["Jueves"][5]["taller"] = "101"."<br>";
      
        $array["Jueves"][6]["modulo"] = "EMR";
        $array["Jueves"][6]["profesor"] = "MARIA DEL SOL";
        $array["Jueves"][6]["taller"] = "101"."<br>";
      
        $array["Viernes"][1]["modulo"] = "DOR";
        $array["Viernes"][1]["profesor"] = "ERMIS BAEZ";
        $array["Viernes"][1]["taller"] = "101"."<br>";
      
        $array["Viernes"][2]["modulo"] = "DOR";
        $array["Viernes"][2]["profesor"] = "ERMIS BAEZ";
        $array["Viernes"][2]["taller"] = "101"."<br>";
      
        $array["Viernes"][3]["modulo"] = "DPL";
        $array["Viernes"][3]["profesor"] = "SONIA RAMOS";
        $array["Viernes"][3]["taller"] = "101"."<br>";
      
        $array["Viernes"][4]["modulo"] = "EMR";
        $array["Viernes"][4]["profesor"] = "MARIA DEL SOL";
        $array["Viernes"][4]["taller"] = "101"."<br>";
      
        $array["Viernes"][5]["modulo"] = "DSW";
        $array["Viernes"][5]["profesor"] = "SERGIA AMONSKY";
        $array["Viernes"][5]["taller"] = "101"."<br>";
      
        $array["Viernes"][6]["modulo"] = "DSW";
        $array["Viernes"][6]["profesor"] = "SERGIA AMONSKY";
        $array["Viernes"][6]["taller"] = "101"."<br>";
      
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
              echo "No estamos en clase<br>";
            }
            elseif($QUEHORA==7){
              echo "Estamos en el recreo<br>";
            }
            else{ 
              echo "Ahora toca ".$array[$diaguardado][$horaguardada]["modulo"]." con el profesor ".$array[$diaguardado][$horaguardada]["profesor"]."
              en el aula ".$array[$diaguardado][$horaguardada]["taller"]."<br>";
            }
        }
        dos($diaactual,$horaactual,$minutosactuales);
          
      }

      if($_POST['grupo']=='Profesor-ASIR')
      { 
        $array["Lunes"][1]["modulo"] = "FOL";
        $array["Lunes"][1]["profesor"] = "MANUEL BOGLIANI";
        $array["Lunes"][1]["taller"] = "104"."<br>";

        $array["Lunes"][2]["modulo"] = "HOF";
        $array["Lunes"][2]["profesor"] = "CARMELO ORTIZ";
        $array["Lunes"][2]["taller"] = "104"."<br>";

        $array["Lunes"][3]["modulo"] = "HOF";
        $array["Lunes"][3]["profesor"] = "CARMELO ORTIZ";
        $array["Lunes"][3]["taller"] = "104"."<br>";

        $array["Lunes"][4]["modulo"] = "BAE";
        $array["Lunes"][4]["profesor"] = "LUIS HENRIQUEZ";
        $array["Lunes"][4]["taller"] = "104"."<br>";

        $array["Lunes"][5]["modulo"] = "BAE";
        $array["Lunes"][5]["profesor"] = "LUIS HENRIQUEZ";
        $array["Lunes"][5]["taller"] = "104"."<br>";

        $array["Lunes"][6]["modulo"] = "BAE";
        $array["Lunes"][6]["profesor"] = "LUIS HENRIQUEZ";
        $array["Lunes"][6]["taller"] = "104"."<br>";

        $array["Martes"][1]["modulo"] = "OEI";
        $array["Martes"][1]["profesor"] = "MARIA DE LOURDES";
        $array["Martes"][1]["taller"] = "104"."<br>";

        $array["Martes"][2]["modulo"] = "OEI";
        $array["Martes"][2]["profesor"] = "MARIA DE LOURDES";
        $array["Martes"][2]["taller"] = "104"."<br>";

        $array["Martes"][3]["modulo"] = "HOF";
        $array["Martes"][3]["profesor"] = "CARMELO ORTIZ";
        $array["Martes"][3]["taller"] = "104"."<br>";

        $array["Martes"][4]["modulo"] = "HOF";
        $array["Martes"][4]["profesor"] = "CARMELO ORTIZ";
        $array["Martes"][4]["taller"] = "104"."<br>";

        $array["Martes"][5]["modulo"] = "EN";
        $array["Martes"][5]["profesor"] = "AURORA MARIA";
        $array["Martes"][5]["taller"] = "104"."<br>";

        $array["Martes"][6]["modulo"] = "EN";
        $array["Martes"][6]["profesor"] = "AURORA MARIA";
        $array["Martes"][6]["taller"] = "104"."<br>";

        $array["Miércoles"][1]["modulo"] = "BAE";
        $array["Miércoles"][1]["profesor"] = "LUIS HENRIQUEZ";
        $array["Miércoles"][1]["taller"] = "104"."<br>";

        $array["Miércoles"][2]["modulo"] = "BAE";
        $array["Miércoles"][2]["profesor"] = "LUIS HENRIQUEZ";
        $array["Miércoles"][2]["taller"] = "104"."<br>";

        $array["Miércoles"][3]["modulo"] = "HOF";
        $array["Miércoles"][3]["profesor"] = "CARMELO ORTIZ";
        $array["Miércoles"][3]["taller"] = "104"."<br>";

        $array["Miércoles"][4]["modulo"] = "HOF";
        $array["Miércoles"][4]["profesor"] = "CARMELO ORTIZ";
        $array["Miércoles"][4]["taller"] = "104"."<br>";

        $array["Miércoles"][5]["modulo"] = "EN";
        $array["Miércoles"][5]["profesor"] = "AURORA MARIA";
        $array["Miércoles"][5]["taller"] = "104"."<br>";

        $array["Miércoles"][6]["modulo"] = "EN";
        $array["Miércoles"][6]["profesor"] = "AURORA MARIA";
        $array["Miércoles"][6]["taller"] = "104"."<br>";

        $array["Jueves"][1]["modulo"] = "OEI";
        $array["Jueves"][1]["profesor"] = "MARIA DE LOURDES";
        $array["Jueves"][1]["taller"] = "104"."<br>";

        $array["Jueves"][2]["modulo"] = "OEI";
        $array["Jueves"][2]["profesor"] = "MARIA DE LOURDES";
        $array["Jueves"][2]["taller"] = "104"."<br>";

        $array["Jueves"][3]["modulo"] = "OEI";
        $array["Jueves"][3]["profesor"] = "MARIA DE LOURDES";
        $array["Jueves"][3]["taller"] = "104"."<br>";

        $array["Jueves"][4]["modulo"] = "BAE";
        $array["Jueves"][4]["profesor"] = "LUIS HENRIQUEZ";
        $array["Jueves"][4]["taller"] = "104"."<br>";

        $array["Jueves"][5]["modulo"] = "BAE";
        $array["Jueves"][5]["profesor"] = "LUIS HENRIQUEZ";
        $array["Jueves"][5]["taller"] = "104"."<br>";

        $array["Jueves"][6]["modulo"] = "FOL";
        $array["Jueves"][6]["profesor"] = "MARIA DEL SOL";
        $array["Jueves"][6]["taller"] = "104"."<br>";

        $array["Viernes"][1]["modulo"] = "EN";
        $array["Viernes"][1]["profesor"] = "AURORA MARIA";
        $array["Viernes"][1]["taller"] = "104"."<br>";

        $array["Viernes"][2]["modulo"] = "EN";
        $array["Viernes"][2]["profesor"] = "AURORA MARIA";
        $array["Viernes"][2]["taller"] = "104"."<br>";

        $array["Viernes"][3]["modulo"] = "BAE";
        $array["Viernes"][3]["profesor"] = "LUIS HENRIQUEZ";
        $array["Viernes"][3]["taller"] = "104"."<br>";

        $array["Viernes"][4]["modulo"] = "FOL";
        $array["Viernes"][4]["profesor"] = "MARIA DEL SOL";
        $array["Viernes"][4]["taller"] = "104"."<br>";

        $array["Viernes"][5]["modulo"] = "HOF";
        $array["Viernes"][5]["profesor"] = "CARMELO ORTIZ";
        $array["Viernes"][5]["taller"] = "104"."<br>";

        $array["Viernes"][6]["modulo"] = "HOF";
        $array["Viernes"][6]["profesor"] = "CARMELO ORTIZ";
        $array["Viernes"][6]["taller"] = "104"."<br>";
      
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
              echo "No estamos en clase<br>";
            }
            elseif($QUEHORA==7){
              echo "Estamos en el recreo<br>";
            }
            else{ 
              echo "Ahora toca ".$array[$diaguardado][$horaguardada]["modulo"]." con el profesor ".$array[$diaguardado][$horaguardada]["profesor"]."
              en el aula ".$array[$diaguardado][$horaguardada]["taller"]."<br>";
            }
        }
        dos($diaactual,$horaactual,$minutosactuales);
          
      }
?>