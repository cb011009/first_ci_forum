<?php

namespace App\Controllers;

//use App\Controllers\Admin\Shop;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function validation(){
        $shop = new Shop();
        echo $shop->product('laptop','lenovo');

    }
}
