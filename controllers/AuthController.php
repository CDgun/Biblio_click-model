<?php
namespace Controllers;
use Models\User;
class AuthController extends Controller
{
    private $user_model = null;
    /**
     * AuthController constructor.
     */
    public function __construct(User $user)
    {
        $this->user_model = $user;
    }
    public function getLogin()
    {
        return ['view' => 'login.php', 'resource_title' => 'User login'];
    }
    public function getRegister()
    {
        return ['view' => 'register.php', 'resource_title' => 'Register new user'];
    }
    public function getLogout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }
        header('Location: index.php');
    }
    public function postLogin()
    {
        if ($user = $this->user_model->check(['email' => $_POST['email'],'password' => sha1($_POST['password'])])) {
            $_SESSION['user'] = json_encode($user);
            header('Location: ?a=admin&r=page');
        } else {
            $_SESSION['old_datas'] = $_POST;
            $_SESSION['error'] = 'Wrong credentials';
            return ['view' => 'login.php', 'resource_title' => 'Please Login'];
        }
    }
    public function postRegister()
    {
        $errors = [];
        //test les entrées
        if (!isset($_POST['email'])) {
            $errors['email'] = 'Veuillez entrer un email';
        }
        if (!isset($_POST['password'])) {
            $errors['password'] = 'Veuillez entrer un mot de passe';
        }
        if (count($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_datas'] = $_POST;
            header('Location: index.php?r=auth&a=getRegister');
        }
        if ($this->user_model->save([
            'password' => sha1($_POST['password']),
            'email' => $_POST['email']
        ])
        ) {
            return ['view' => 'login.php', 'resource_title' => 'Please login'];
        } else {
            $_SESSION['errors'] = ['error' => 'Impossible to write in the database'];
            $_SESSION['old_datas'] = $_POST;
            header('Location: index.php?r=auth&a=getRegister');
        }
    }
}
