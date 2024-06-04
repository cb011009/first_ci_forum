<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('Shop'); // view corresponds to the name of the view
    }

    public function product($product_name,$id)
    {
        echo '<h2>This is a product '.$product_name.' with product Id of '.$id.'<br>';
        //return view('product'); // view corresponds to the name of the view
    }

    public function ProductTotal($product, $count){
        $calculator = new Calculator();
        $calculator->calculate($product, $count);
    }
    



}
