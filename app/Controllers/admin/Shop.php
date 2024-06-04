<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
       echo "This is an admin area";
    }

    public function product($product_name,$id)
    {
        echo '<h2>This is a admin product '.$product_name.' with product Id of '.$id.'<br>';
        //return view('product'); // view corresponds to the name of the view
    }

   



}
