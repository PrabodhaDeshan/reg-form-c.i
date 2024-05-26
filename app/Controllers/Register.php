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
        
        $file = $this->request->getFile('picture');
        // if ($file->isValid() && ! $file->hasMoved()) {

        //     $pictureName = $file->getRandomName();
        //     $file->move('uploads/', $pictureName);

           
        // }


        $file = $this->request->getFile('picture');
        if ($file) {
            if ($file->isValid() && ! $file->hasMoved()) {
                $pictureName = $file->getRandomName();
                $file->move('uploads/', $pictureName);
            } else {
                // Handle invalid file or file already moved
                echo "File is not valid or already moved.";
            }
        } else {
            // Handle no file uploaded
            echo "No file uploaded.";
        }

        



        $data =[
            'name'=>$this->request->getPost('name'),
            'birthday'=>$this->request->getPost('birthday'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
            'phone_number'=>$this->request->getPost('phone_number'),
            'picture'=> $pictureName,
        ];

        $userModel->save($data);
        return redirect()->to('register')->with('status','data saved');
         
    }
    
    


}