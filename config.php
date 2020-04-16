<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','gallery');


    $autoload = function($class)
    {
        include('app/models/'.$class.'.php');     
    };

    spl_autoload_register($autoload);
