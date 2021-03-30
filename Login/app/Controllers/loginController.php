<?php

namespace app\Controllers;
use Core\Controller;

class LoginController extends Controller{

    public function index(){
        $T = "Sing In";

        $C1 = 'Username';
        $C2 = 'Password';

        $this->view('login', ['title' => $T, 'input_User' => $C1, 'input_Pass' => $C2]);

    }

    public function account(){

        $this->view('account');

    }

}