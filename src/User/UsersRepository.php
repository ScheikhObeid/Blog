<?php

namespace App\User;
use App\Core\Data;
use PDO;

class UsersRepository extends Data {


    public function getModelName(){
        return "App\User\UserModel";
       }
       
    public function getTableName(){

   
    return "users";

   }

   public function findByUsername($username){

    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
    $post = $stmt->fetch(PDO::FETCH_CLASS);

    return $post;
   }

} 

?>