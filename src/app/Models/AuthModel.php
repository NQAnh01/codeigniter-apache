<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';           // Tên bảng
    protected $primaryKey = 'id';         // Khóa chính
    protected $allowedFields = ['name', 'email', 'password']; // Các cột được phép thao tác

}
