<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    //protected $allowedFields = ['first_name','last_name','email', 'date']
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
}