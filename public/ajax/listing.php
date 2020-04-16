<?php

    require('../../config.php');

    $listing = new Gallery;
    
    echo json_encode($listing->listingImages());