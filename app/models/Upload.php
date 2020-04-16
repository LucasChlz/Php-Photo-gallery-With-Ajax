<?php

    class Upload
    {

        public static function validImg($img) {
            if($img['type'] == 'image/JPEG' ||
            $img['type'] == 'image/png' ||
            $img['type'] == 'image/jpeg' ||
            $img['type'] == 'image/gif') {

            $size = intval($img['size'] / 1024);
                if($size < 1000) {
                    return true;
                }else {
                    return false;
                }
            }else {
                return false;
            }
        }

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
            if(Upload::validImg($image) == false) {
                echo 'error';
            }else {

                $image = Upload::uploadImg($image);
                $sql = MySql::connect()->prepare("INSERT INTO `images` VALUES(null,?,?)");

                if($sql->execute(array($name,$image))) {
                    echo 'successfully registered';
                }else {
                    echo 'error';
                }
            }
        }
    }