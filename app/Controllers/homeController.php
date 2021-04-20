<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request; 
use App\Models\User;

class HomeController extends Controller{
    
    public function index() {
        $this->view('home');
    }

}