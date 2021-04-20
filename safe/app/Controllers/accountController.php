<?php
namespace app\Controllers;

use Core\Controller;
use Core\Request;
use app\Models\User; 

class AccountController extends Controller{

    public function index(Request $request){
        $userModel = new User;
        $users = $userModel->getAll();

        $this->view('account', ['users' => $users]);
    }

    public function create(Request $request){
        if($request->isMethod('get')){
            $this->view('account');
        } else{
            $userModel = new User;
            $result = $userModel->accept($request->post());
            $content = $result ? "Dados armazenasdos com sucesso" : "Falha";

            $this->view('adm', ['user' => $request->post(), 'content' => $content]);
        }
        
    }

    public function users(){
        
        $this->view('user');
    }

}