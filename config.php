<?php

    error_reporting(E_ALL);
    require 'lib.php';

    // rutas del sistema 
    define('BASE_SYS_PATH',dirname(__FILE__));
    define('CLASS_PATH',BASE_SYS_PATH.'/classes');

    // credenciales ddb
    define('DB_HOST','192.168.146.128');
    define('DB_USER','main_source');
    define('DB_PASS','123456');
    define('DB_DATABASE','main_source');
    
    // auto carga de clases
    spl_autoload_register(function ($class) {
        // default loader
        $subdivided_class=array(
            'subfolder'=>substr($class,0,strpos($class,'_')),
            'classname'=>substr($class,strpos($class,'_')+1),
        );
        if(file_exists(CLASS_PATH.'/'.$class.'/'.$class.'.class.php')){
            include_once CLASS_PATH.'/'.$class.'/'.$class.'.class.php';
        }elseif(file_exists(CLASS_PATH.'/'.$subdivided_class['subfolder'].'/'.$class.'.class.php')){
            include_once CLASS_PATH.'/'.$subdivided_class['subfolder'].'/'.$class.'.class.php';
        }else{
            include_once CLASS_PATH.'/'.$class.'.class.php';
        }
    },false);