<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['name', 'email', 'password', 'phone', 'state', 'role', 'avatar'];
    protected $useTimestamps = true;  // This will automatically manage created_at and updated_at
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $useSoftDeletes = true;

}
