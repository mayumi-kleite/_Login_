<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;
use app\Models\User; 

class UserController extends Controller{

    public function index() {
        $UserModel = new User(); 
        
        $Users = $UserModel-> getAll();
        $content = ['Users' => $Users];

        $this->view('user', $content);
    }

    public function except(Request $request){ 
        $UserModel = new User();

        $result = $UserModel->delete($request->pots());

        $this->view('user', ['user' => $request->post()]);
    }
}