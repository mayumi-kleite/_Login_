<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class HomeController extends Controller{
    
    public function index(Request $request) {

        if($request->isMethod('POST')) {
            if($request->post('Name' == "Karolyne", $request->post('Password') == "2230")) {
                $this->view('home');
            }
        }
        
        $this->redirect('login');

    }
}