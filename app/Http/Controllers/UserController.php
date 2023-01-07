<?php 

namespace App;

class UserController {
    public function index( $id, $name ) {
        echo $id;
        echo '<br>';
        echo $name;
    }
}