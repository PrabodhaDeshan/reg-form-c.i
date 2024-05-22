<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class Settings extends Model {

    protected $db;

    public function __construct(ConnectionInterface &$db) {
        $this->db = & $db;
    }

}
