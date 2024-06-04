<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo '<h1>This is the users area</h1>';
    }

    public function getAllUsers(){
       echo 'Show all users';
    }

    
}
