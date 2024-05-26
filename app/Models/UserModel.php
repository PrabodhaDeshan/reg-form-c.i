<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'users';
    protected $primarykey ='id';
    protected $allowedFields = [
       
        'name',
        'birthday',
        'email',
        'password',
        'phone_number',
        'picture',
        
    ];

}
