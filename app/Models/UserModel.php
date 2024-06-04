<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users'; // Name of your database table
    protected $primaryKey = 'id'; // Primary key of your table
    protected $allowedFields = ['name', 'age']; // Fields that are allowed to be inserted/updated
}
