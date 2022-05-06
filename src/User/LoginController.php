<?php
namespace App\User;
use App\Core\Controller;
use App\User\UsersRepository;

class LoginController extends Controller{

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function dashboard(){
        if(isset($_SESSION['login'])){
            echo "Nutzer ist eingelogt!";
        }else{
            header("Location: login");
        }
    }

    public function logout(){
        if(isset($_SESSION['login'])){
           unset($_SESSION['login']);
           header("Location: login");
        }
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
            $_SESSION['login'] = $user->username;
            session_regenerate_id(true);
            header("Location: dashboard");
          echo "Login erfolgreich! <br>";
          echo $_SESSION['login'];
          return;
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