<?php

namespace App\Controllers;


class Calculator extends BaseController
{
    public function index()
    {
       echo 'This is your where your total will be calculated';
    }

    public function calculate($product,$count){

        
        if($product == "iphone"){
            echo 'Your total is '. (2 * $count);
           
        }

    }
}
