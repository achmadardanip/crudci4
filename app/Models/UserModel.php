<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['name', 'email', 'phone', 'address', 'created_at', 'updated_at', 'deleted_at'];
}