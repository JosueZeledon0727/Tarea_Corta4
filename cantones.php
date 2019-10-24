<?php
 $request = json_decode(file_get_contents('php://input'));
 switch($request->id) {
     case 1:
        $cantones = array(
           array('id' => 1, 'nombre' => 'Central'), 
           array('id' => 2, 'nombre' => 'Escazú'), 
           array('id' => 3, 'nombre' => 'Desamparados'),
           array('id' => 4, 'nombre' => 'Puriscal'),
           array('id' => 5, 'nombre' => 'Tarrazú'),
           array('id' => 6, 'nombre' => 'Aserrí'),
           array('id' => 7, 'nombre' => 'Mora'),
           array('id' => 8, 'nombre' => 'Goicoechea'),
           array('id' => 9, 'nombre' => 'Santa Ana'),
           array('id' => 10, 'nombre' => 'Alajuelita'),
           array('id' => 11, 'nombre' => 'Vásquez de Coronado'),
           array('id' => 12, 'nombre' => 'Acosta'),
           array('id' => 13, 'nombre' => 'Tibás'),
           array('id' => 14, 'nombre' => 'Moravia'),
           array('id' => 15, 'nombre' => 'Montes de Oca'),
           array('id' => 16, 'nombre' => 'Turrubares'),
           array('id' => 17, 'nombre' => 'Dota'),
           array('id' => 18, 'nombre' => 'Curridabat'),
           array('id' => 19, 'nombre' => 'Pérez Zeledón'),
           array('id' => 20, 'nombre' => 'León Cortés')
        );
        break;
     case 2:
        $cantones = array(
           array('id' => 1, 'nombre' => 'Alajuela'), 
           array('id' => 2, 'nombre' => 'Atenas'),
           array('id' => 3, 'nombre' => 'Grecia'),
           array('id' => 4, 'nombre' => 'Guatuso'),
           array('id' => 5, 'nombre' => 'Los Chiles'),
           array('id' => 6, 'nombre' => 'Naranjo'),
           array('id' => 7, 'nombre' => 'Orotina'),
           array('id' => 8, 'nombre' => 'Palmares'),
           array('id' => 9, 'nombre' => 'Poás'),
           array('id' => 10, 'nombre' => 'Río Cuarto'),
           array('id' => 11, 'nombre' => 'San Carlos'),
           array('id' => 12, 'nombre' => 'San Mateo'),
           array('id' => 13, 'nombre' => 'San Ramón'),
           array('id' => 14, 'nombre' => 'Upala'),
           array('id' => 15, 'nombre' => 'Valverde Vega'),
           array('id' => 16, 'nombre' => 'Zarcero') 
        );
        break;
     case 3:
		$cantones = array(
           array('id' => 1, 'nombre' => 'Cartago'), 
           array('id' => 2, 'nombre' => 'Alvarado'),
           array('id' => 3, 'nombre' => 'El Guarco'),
           array('id' => 4, 'nombre' => 'Jiménez'),
           array('id' => 5, 'nombre' => 'La Unión'),
           array('id' => 6, 'nombre' => 'Oreamuno'),
           array('id' => 7, 'nombre' => 'Paraíso'),
           array('id' => 8, 'nombre' => 'Turrialba')
        );
        break;
     case 4:
		$cantones = array(
           array('id' => 1, 'nombre' => 'Heredia'), 
           array('id' => 2, 'nombre' => 'Barva'),
           array('id' => 3, 'nombre' => 'Belén'),
           array('id' => 4, 'nombre' => 'Flores'),
           array('id' => 5, 'nombre' => 'San Isidro'),
           array('id' => 6, 'nombre' => 'San Pablo'),
           array('id' => 7, 'nombre' => 'San Rafael'),
           array('id' => 8, 'nombre' => 'Santa Bárbara'),
           array('id' => 9, 'nombre' => 'Santo Domingo'),
           array('id' => 10, 'nombre' => 'Sarapiquí')
        );
        break;
     case 5:
		$cantones = array(
           array('id' => 1, 'nombre' => 'Liberia'), 
           array('id' => 2, 'nombre' => 'Abangares'),
           array('id' => 3, 'nombre' => 'Bagaces'),
           array('id' => 4, 'nombre' => 'Cañas'),
           array('id' => 5, 'nombre' => 'Carrillo'),
           array('id' => 6, 'nombre' => 'Hojancha'),
           array('id' => 7, 'nombre' => 'La Cruz'),
           array('id' => 8, 'nombre' => 'Nandayure'),
           array('id' => 9, 'nombre' => 'Nicoya'),
           array('id' => 10, 'nombre' => 'Santa Cruz'),
           array('id' => 11, 'nombre' => 'Tilarán')
        );
        break;
        
     case 6:
		$cantones = array(
           array('id' => 1, 'nombre' => 'Puntarenas'), 
           array('id' => 2, 'nombre' => 'Buenos Aires'),
           array('id' => 3, 'nombre' => 'Corredores'),
           array('id' => 4, 'nombre' => 'Coto Brus'),
           array('id' => 5, 'nombre' => 'Esparza'),
           array('id' => 6, 'nombre' => 'Garabito'),
           array('id' => 7, 'nombre' => 'Golfito'),
           array('id' => 8, 'nombre' => 'Montes de Oro'),
           array('id' => 9, 'nombre' => 'Osa'),
           array('id' => 10, 'nombre' => 'Parrita'),
           array('id' => 11, 'nombre' => 'Quepos')
        );
        break;
        
     case 7:
		$cantones = array(
           array('id' => 1, 'nombre' => 'Limón'), 
           array('id' => 2, 'nombre' => 'Guácimo'),
           array('id' => 3, 'nombre' => 'Matina'),
           array('id' => 4, 'nombre' => 'Pococí'),
           array('id' => 5, 'nombre' => 'Siquirres'),
           array('id' => 6, 'nombre' => 'Talamanca')
        );
        break;
     default:
        $cantones = array();
        break;
 }
 echo json_encode($cantones);


