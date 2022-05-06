<?php
namespace App\User;
use App\Core\Controller;
use App\User\UsersRepository;

class LoginController extends Controller{

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function login()
  {
 
    $error = false;
    if (!empty($_POST['username']) AND !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $user = $this->usersRepository->findByUsername($username);

      if (!empty($user)) {
        if (password_verify($password, $user->password)) {
          echo "Login erfolgreich!";
          die();
        } else {
          $error = true;
        }

      } else {
        $error = true;
      }
    }

    $this->render("user/login", [
      'error' => $error
    ]);
  }
}
 ?>