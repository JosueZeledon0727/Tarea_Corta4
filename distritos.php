<?php
 $request = json_decode(file_get_contents('php://input'));
 if ($request->id == 1 && $request->cid == 1) {
	 $distritos = array (
		array('id' => 1, 'nombre' => 'Carmen'),
		array('id' => 2, 'nombre' => 'Merced')
	 );
 }
 else if($request->id == 1 && $request->cid == 2){
	 $distritos = array (
		array('id' => 1, 'nombre' => 'Cangrejal'),
		array('id' => 2, 'nombre' => 'Guaitil')
	 );
 }
 else if($request->id == 2 && $request->cid == 1){
	 $distritos = array (
		array('id' => 1, 'nombre' => 'Atenas'),
		array('id' => 2, 'nombre' => 'Concepcion')
	 );
 }
 echo json_encode($distritos);
