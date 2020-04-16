<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','gallery');

    define('BASE_DIR',__DIR__.'');


    $autoload = function($class)
    {
        include('app/models/'.$class.'.php');     
    };

    spl_autoload_register($autoload);
