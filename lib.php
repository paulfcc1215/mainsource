<?php

    function print_arr($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    // function getEnumValues($enum_name) {
	// 	global $db0;
	// 	$q = 'SELECT * FROM pg_enum WHERE enumtypid = (SELECT oid FROM pg_type WHERE typname = \''.$enum_name.'\')';
    //     $q0 = pg_query($db0,$q);
    //     $result = array();
    //     while ($qa0 = pg_fetch_assoc($q0)){
    //         $result[]=$qa0['enumlabel'];
    //     }
	// 	return $result;
	// }

    // function get_schema_info_table($tabla,$esquema='repository_personas'){
    //     global $db0;
    //     $q = 'SELECT * FROM information_schema.columns WHERE TABLE_NAME=\''.$tabla.'\' AND table_schema=\''.$esquema.'\'';
    //     $q0 = pg_query($db0,$q);
    //     $result = array();
    //     while ($qa0 = pg_fetch_assoc($q0)){
    //         $result[]=$qa0['column_name'];
    //     }
    //     return $result;
    // }


    // function validar_fecha_espanol($fecha){
    //     $valores = explode('/', $fecha);
    //     if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
    //         return true;
    //     }
    //     return false;
    // }

    // function luhn($number){
    //     $odd = true;
    //     $sum = 0;
    //     foreach ( array_reverse(str_split($number)) as $num) {
    //         $sum += array_sum( str_split(($odd = !$odd) ? $num*2 : $num) );
    //     }
    //     return (($sum % 10 == 0) && ($sum != 0));
    // }

    // function validar($dato,$validaciones=array(),&$result=array()){
    //     $dato = trim($dato);
    //     if (!is_array($validaciones)) $validaciones = array($validaciones);
    //     if (empty($validaciones)){
    //         $result['status']='warning';
    //         $result['detail']='No existen validaciones a aplicar';
    //         return true;
    //     }
    //     $pasa = true;
    //     $result = array();
    //     if (in_array('requerido',$validaciones) && $dato==''){
    //         $result['requerido'] = array(
    //             'status'=>'error',
    //             'detail'=>'No pasa validacion: "requerido" esta enviando: "'.$dato.'"'
    //         );
    //         $pasa = false;
    //     }
    //     foreach ($validaciones as $validacion){
    //         if ($validacion=='requerido') continue;
    //         try{
    //             if ($dato!=''){
    //                 switch ($validacion){
    //                     case 'luhn':
    //                         if (!luhn($dato)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'fecha':
    //                         if (!preg_match('#^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$#',$dato,$matches)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'hora':
    //                         if (!preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#',$dato,$matches)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'celular':
    //                         if (!preg_match('#^09[2-9]\d{7}$#',$dato,$matches)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'convencional':
    //                         if (!preg_match('#^0[2-7]\d{7}$#',$dato,$matches)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'telefono':
    //                         if (!preg_match('#^0[2-7]\d{7}$#',$dato,$matches) && !preg_match('#^09[2-9]\d{7}$#',$dato,$matches)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'mail':
    //                         if (!filter_var($dato,FILTER_VALIDATE_EMAIL)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'decimal':
    //                     case 'numero':
    //                         if (!is_numeric($dato)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     case 'ruc':
    //                         if (!is_numeric($dato)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'" debe ser numero, esta enviando: "'.$dato.'"');
    //                         }
    //                         if (!preg_match('#^\d{10}00[1-9]$#',$dato,$matches)){
    //                             throw new exception('No pasa validacion: "'.$validacion.'", esta enviando: "'.$dato.'"');
    //                         }
    //                     break;
    //                     default:
    //                         throw new exception('validacion "'.$validacion.'" no implementada');
    //                     break;
    //                 }
    //             }
    //             $result[$validacion] = array(
    //                 'status'=>'ok',
    //                 'detail'=>'validacion "'.$validacion.'" correcta, esta enviando: "'.$dato.'"'
    //             );
    //         }catch(Exception $ex){
    //             $result[$validacion]['status']='error';
    //             $result[$validacion]['detail']=$ex->getMessage();
    //             $pasa=false;
    //         }
    //     }
    //     return $pasa;
    // }