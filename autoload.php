<?php
    spl_autoload_register(function($classe){
        require 'models/' .$classe. '.class.php';
    });
?>