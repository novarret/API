<?php

$costarica = json_decode(file_get_contents('http://worldtimeapi.org/api/timezone/America/Costa_Rica'), true );
$fechaHora = substr($costarica['datetime'] , 0 , 19);
$fhCR = str_replace ('T', ' | ' , $fechaHora);

$newyork = json_decode(file_get_contents('http://worldtimeapi.org/api/timezone/America/New_York'), true );
$fechaHora = substr($newyork['datetime'] , 0 , 19);
$fhNY = str_replace ('T', ' | ' , $fechaHora);

$serbia = json_decode(file_get_contents('http://worldtimeapi.org/api/timezone/Europe/Belgrade'), true );
$fechaHora = substr($serbia['datetime'] , 0 , 19);
$fhS = str_replace ('T', ' | ' , $fechaHora);

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<head>
<title> TABLA </title>

</head>
<body>

<div class="container my-5 text-center">

<p><a class="btn btn-danger w-100" href="http://localhost/zf3/Proyectos/Consumo_API/index.php"  target="_SELF" >Regresar &raquo;</a></p>
<div class="mt-5">

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Pais</th>
      <th scope="col">Fecha y Hora</th>
      
    </tr>
  </thead>
<body >

  <tr>
    <td style="color: white;"><?php echo  $costarica['timezone'] ?> </td>
    <td style="color: white;"><?php echo  $fhCR ?> </td>
  </tr>
    
  <tr>
    <td style="color: white;"><?php echo  $newyork['timezone'] ?> </td>
    <td style="color: white;"><?php echo  $fhNY ?> </td>
  </tr>

  <tr>
    <td style="color: white;"><?php echo  $serbia['timezone'] ?> </td>
    <td style="color: white;"><?php echo  $fhS ?> </td>
  </tr>


</body>







</div>


</div>


 

</body>





</html>