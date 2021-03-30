<?php
namespace app\Controllers;

use Core\Controller;
use Core\Request;

class AccountController extends Controller{

    public function index(Request $request){

        if($request->isMethod('POST')) {
            if($request->post('Name' == "", 
               $request->post('Password') == "", 
               $request->post('Email') == "")) {

                $this->view('home');
            }
        }
        
        $this->redirect('account');

    }

}