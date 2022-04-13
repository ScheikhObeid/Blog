<?php
namespace App\Core;

abstract class Controller{

    public function render($view, $params)
    {
        // foreach ($params as $key => $value){
           
        //     ${$key} = $value;
        
        // }
        extract($params);

        include __DIR__ . "/../../views/{$view}.php";

    }

}