<?php

    class Gallery
    {

        public static function uploadImg($img) {
            $imgType = explode('.', $img['name']);
            $imgName = uniqid().'.'.$imgType[count($imgType) - 1];
            
            if(move_uploaded_file($img['tmp_name'],BASE_DIR.'/public/img/'.$imgName)){
                return $imgName;
            }else {
                return false;
            }
        }

        public function Register($name,$image) {
            $image = Gallery::uploadImg($image);
            $sql = MySql::connect()->prepare("INSERT INTO `images` VALUES(null,?,?)");

            if($sql->execute(array($name,$image))) {
                echo 'successfully registered';
            }else {
                echo 'error';
            }
        }

        public function listingImages() {
            $sql = MySql::connect()->prepare("SELECT * FROM `images`");
            $sql->execute();
            
            return $listing = $sql->fetchAll();
        }
    }