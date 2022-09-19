<?php

$asignaturas =[
   
      "EMR" =>"MARIA DEL SOL GARCIA TARAJANO",
      "DSW" =>"SERGIO RAMOS SUAREZ",
      "DEW" =>"MARIA DEL CARMEN RODRIGUEZ SUAREZ",
      "DPL" =>"MARIA ANTONIA MONTESDEOCA VIERA",
      "DOR" =>"ERMIS PAPAKONSTANTINOU BAEZ",
      "DSW" =>"SERGIO RAMOS SUAREZ",
   
];

$horario =[
  
    "Lunes" =>"8:00","8:55","9:50","11:15","12","13",
    "Martes" =>"8","9","10","11","12","13",
    "Miércoles" =>"8","9","10","11","12","13",
    "Jueves" =>"8","9","10","11","12","13",
    "Viernes" =>"8","9","10","11","12","13",
  
];


foreach($asignaturas as $asignatura => $valor){
  
  foreach($horario as $horarios => $valor2){
  print_r('<br>El '.$horarios. ' tenemos a las '.$valor2.' de '.$asignatura.' en el aula 201.') ;
  }
}
?>
