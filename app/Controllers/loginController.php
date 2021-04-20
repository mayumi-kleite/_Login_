<?php

namespace app\Controllers;
use Core\Controller;
use Core\Request;
use App\Models\User;

class LoginController extends Controller{

    public function index(){

        $this->view('login');
    }

    public function account(){

        $this->view('account');
    }

}