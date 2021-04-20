<?php // Cada table é um model 

namespace App\Models;
use Core\Database;

class User { 
    private $table = "user";

    public function getAll() {
        $db = Database::getInstance(); //instanciando Database
        return $db->getList($this->table, '*'); //($this->Nome_table, especifico, condições)
    }

    public function getName() {
        $db = Database::getInstance(); 
        return $db->getList($this->table, 'user_name'); 
    }

    public function accept($data = null){ // INSERIR DADOS 
        $db = Database::getInstance();
        
        if($data != null && !empty($data)){ 
            if(isset($data['Name']) && isset($data['Password'])) {
                if(filter_var($data['Email'], FILTER_VALIDATE_EMAIL)){
                    $data = [ 
                        'user_name' => $data['Name'], 
                        'email' => filter_var($data['Email'], FILTER_VALIDATE_EMAIL), 
                        'pass_word' => password_hash($data['Password'], PASSWORD_BCRYPT, ["cost" => 10]),
                    ]; 
                    return $db->insert($this->table, $data);
                }
            }
        }
        return false;
    }

    public function update($data, $condition){ // ATUALIZAR 
        $db = Database::getInstance();

        return $db->update($this->table, $data, $condition);
    }

    public function delete($UserName = null) { // PAGAR  ($id = null)
        $db = Database::getInstance();

        if($UserName != null && !empty($UserName)){
            $condition = ["user_name" => $UserName];
            return $db->delete($this->table, $condition);
        }

        return false;
    }
}