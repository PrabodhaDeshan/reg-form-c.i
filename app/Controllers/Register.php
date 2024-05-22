<?php

namespace App\Controllers;

use App\Models\UserModel;
 

class Register extends BaseController
{
    public function index() {

        echo view ('header');
        echo view('register');
       
    }


    public function do_register() {
        
        $userModel =new UserModel();

        $first_name =$this->request->getPost('name'); 
        $last_name =$this->request->getPost('last_name'); 
        $birthday =$this->request->getPost('birthday');
        $email =$this->request->getPost('email'); 
        $password =$this->request->getPost('password');
        $phone_number =$this->request->getPost('phone_number');    
        $picture =$this->request->getPost('picture');
        
        
        $data=['first_name'=>$first_name, 'last_name'=>$last_name,'birthday'=>$birthday, 'email'=>$email,    
            'password'=> $password, 'phone_number'=>$phone_number,  'picture'=>$picture ];


            $r = $userModel->insert($data);

            if ($r) 
            {
              echo "User Registered Successfully!";
            }
            else{
                echo "Error";

            }

}
}