<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h1> All blog posts </h1>'; //show all forms 
    }

    public function createNew(){
        return view('blog_form'); //display form to create your own blog
    }

    public function saveBlog(){
        print_r($_POST); //save form to data base
        
    }
}
