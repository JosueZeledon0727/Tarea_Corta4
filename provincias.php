<?php
 $request = json_decode(file_get_contents('php://input')); 
 $provincias = array(
    array('id' => 1, 'nombre' => 'San Jose'),
    array('id' => 2, 'nombre' => 'Alajuela'),
    array('id' => 3, 'nombre' => 'Cartago'),
    array('id' => 4, 'nombre' => 'Heredia'),
    array('id' => 5, 'nombre' => 'Guanacaste'),
    array('id' => 6, 'nombre' => 'Puntarenas'),
    array('id' => 7, 'nombre' => 'Limon')
 );

 echo json_encode($provincias);
