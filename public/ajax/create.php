<?php

    require('../../config.php');

    sleep(1);

    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $image = $_FILES['image'];

    $register = new Upload;
    $register->Register($name,$image);

    


