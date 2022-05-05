<?php
namespace App\User;
use App\Core\Controller;
use App\User\UsersRepository;

class LoginController extends Controller{

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function login(){

        $this->render("user/login", []);
    }

}

?>