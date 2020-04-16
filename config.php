<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','gallery');


    $autoload = function($class)
    {
        include('classes/'.$class.'.php');     
    };

    spl_autoload_register($autoload);
