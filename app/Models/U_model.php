<?php namespace App\Models;
use CodeIgniter\Model;

class U_model extends Model
{  
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'password', 'level'];
    // protected $useTimestamps = true;
    protected $useSoftDeletes = true;
}