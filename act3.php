<?php

$asignaturas =[
   [
      ["EMR" =>"MARIA DEL SOL GARCIA TARAJANO","Aula 201"],
      ["DSW" =>"SERGIO RAMOS SUAREZ","Aula 201"],
      ["DEW" =>"MARIA DEL CARMEN RODRIGUEZ SUAREZ","Aula 201"],
      ["DPL" =>"MARIA ANTONIA MONTESDEOCA VIERA","Aula 201"],
      ["DOR" =>"Diseño de interfaces web","Aula 201"],
      ["DSW" =>"SERGIO RAMOS SUAREZ","Aula 201"],
   ]    
];

$horario =[
  [
    ["Lunes" =>"8","9","10","11","12","13"],
    ["Martes" =>"8","9","10","11","12","13"],
    ["Miércoles" =>"8","9","10","11","12","13"],
    ["Jueves" =>"8","9","10","11","12","13"],
    ["Viernes" =>"8","9","10","11","12","13"],
  ]
];

foreach($asignaturas as $asignatura => $valor){
    print_r('<br>El correo de '.$asignatura.' es '.$valor) ;
}
?>,
