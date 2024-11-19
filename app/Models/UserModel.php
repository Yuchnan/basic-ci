<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users_2';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'birth'];
    protected $useTimestamps = true;
}
