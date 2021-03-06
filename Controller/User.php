<?php

namespace TestProject\Controller;

class User extends Blog
{
    // Login de usuario
    public function login()
    {
        if ($this->isLogged())
            header('Location: ' . ROOT_URL . '?p=blog&a=all');

        if (isset($_POST['email'], $_POST['password']))
        {
            $this->oUtil->getModel('User');
            $this->oModel = new \TestProject\Model\User;

            $sHashPassword =  $this->oModel->login($_POST['email']);
            if (password_verify($_POST['password'], $sHashPassword))
            {
                $_SESSION['is_logged'] = 1;
                header('Location: ' . ROOT_URL . '?p=blog&a=all');
                exit;
            }
            else
            {
                $this->oUtil->sErrMsg = 'login Incorrecto! Revice Su usuario/clave';
            }
        }

        $this->oUtil->getView('login');
    }

    // logout de usuario

    public function logout()
    {
        if (!$this->isLogged())
            exit;

        if (!empty($_SESSION))
        {
            $_SESSION = array();
            session_unset();
            session_destroy();
        }

        header('Location: ' . ROOT_URL);
        exit;
    }
}
