<?php

namespace Core;

class Error {
    public static function render( $data = [], $name = '404' ) {
        extract( $data );
        $pathError = __DIR_ROOT . 'resources/views/errors/' . $name . '.blade.php';
        if( file_exists( $pathError ) ) {
            require_once $pathError;
        }
        die;
        
    }
}