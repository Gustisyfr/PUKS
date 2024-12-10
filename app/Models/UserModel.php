<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 
        'email', 
        'password', 
        'level_id', 
        'created_at', 
        'updated_at'
    ];
    protected $returnType = 'array';
}
