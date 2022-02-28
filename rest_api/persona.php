<?php

    /*
    status [ok,error,already]
    */
    $result = array(
        'status'=>'ok',
        'data'=>null,
        'message'=>''
    );
    try{

        switch ($_SERVER['REQUEST_METHOD']){
            // crear
            case 'POST':
                
                // get data enviada por el cliente
                $data = json_decode(file_get_contents('php://input'),true);
                
                // // validar data
                // $validaciones = array(
                //     // 'pe_tipo_identificacion'=>array('requerido'),
                //     'pe_numero_identificacion'=>array('requerido','luhn'),
                //     'id_subida'=>array('requerido')
                // );
                // $requeridos = array();
                // foreach (array_keys($validaciones) as $requerido){
                //     if (!in_array($requerido,array_keys($data))) $requeridos[]=$requerido;
                // }
                // if (!empty($requeridos)) throw new Exception('Se requiere los siguientes campos: ("'.implode('","',$requeridos).'")');
                
                // $res_validacion = array();
                // $aux='';
                // foreach ($validaciones as $campo => $validacion){
                //     if (!validar($data[$campo],$validacion,$vresult)) {
                //         $aux .= 'Campo: '.$campo;
                //         foreach ($vresult as $v => $d){
                //             if ($d['status']=='error'){
                //                 $aux .= ' '.$d['detail'];
                //             }
                //         }
                //         throw new exception($aux);
                //     }
                // }
                // $tipos_identificacion = getEnumValues('type_tipo_identificacion');
                // if (!in_array($data['pe_tipo_identificacion'],$tipos_identificacion)) throw new exception('pe_tipo_identificacion es requerido debe ser: ("'.implode('","',$tipos_identificacion).'")');
                // // instanciar clase persona
                // $persona = new Persona_class();

                // // verificar si persona existe
                // $persona->getPersonaByIdentificacion($data['pe_numero_identificacion']);
                // if (!is_null($persona->pe_numero_identificacion)) throw new Exception('Ya existe persona con cedula: '.$data['pe_numero_identificacion']);

                // // setear atributos de la clase persona
                // $persona->set('pe_tipo_identificacion',$data['pe_tipo_identificacion']);
                // $persona->set('pe_numero_identificacion_part',$data['pe_numero_identificacion_part']);
                // $persona->set('pe_numero_identificacion',$data['pe_numero_identificacion']);
                // $persona->set('segundo_apellido',$data['segundo_apellido']);
                // $persona->set('primer_apellido',$data['primer_apellido']);
                // $persona->set('primer_nombre',$data['primer_nombre']);
                // $persona->set('segundo_nombre',$data['segundo_nombre']);
                // $persona->set('sexo',$data['sexo']);
                // $persona->set('estado_civil',$data['estado_civil']);
                // $persona->set('nacionalidad',$data['nacionalidad']);
                // $persona->set('fecha_nacimiento',$data['fecha_nacimiento']);
                // $persona->set('profesion',$data['profesion']);
                // $persona->set('actividad_economica',$data['actividad_economica']);
                // $persona->set('cargo',$data['cargo']);
                // $persona->set('calificacion_cliente',$data['calificacion_cliente']);
                // $persona->set('persona_contacto',$data['persona_contacto']);
                // $persona->set('empresa',$data['empresa']);
                // $persona->set('fecha_insercion',($data['fecha_insercion']==''?date('Y-m-d H:i:s'):$data['fecha_insercion']));
                // $persona->set('edad',$data['edad']);
                // $persona->set('id_subida',$data['id_subida']);
                // $persona->set('fecha_matrimonio',$data['fecha_matrimonio']);

                // // invocar metodo save()
                // if (!$persona->save($res)){
                //     throw new exception($res['message']);
                // }
                // $result['data']=$res['data']['id_persona'];
                // $result['message']='Persona creada satisfactoriamente';
                
            break;
            // consulta
            case 'GET':
                // print_arr($_SERVER);
                // die();
                // $persona = new Persona_class();
                // // verificar si persona existe
                // $persona->getPersonaByIdentificacion($data['pe_numero_identificacion']);
                // $result['data']=$persona;
            break;
        }
        
    }catch(Exception $ex){
        $result['status']='error';
        $result['data']=debug_backtrace();
        $result['message']=$ex->getMessage();
    }

    echo json_encode($result);
    die();