<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index() {

        echo view ('header');
        echo view('users');
       
    }
}
