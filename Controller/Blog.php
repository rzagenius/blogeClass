<?php

namespace TestProject\Controller;

class Blog
{
    const MAX_POSTS = 2;
    const OFFSET =0;

    protected $oUtil, $oModel;
    private $_iId;
    //constructor
    public function __construct()
    {

        if (empty($_SESSION))
            @session_start();

        $this->oUtil = new \TestProject\Engine\Util;


        $this->oUtil->getModel('Blog');
        $this->oModel = new \TestProject\Model\Blog;


        $this->_iId = (int) (!empty($_GET['id']) ? $_GET['id'] : 0);
    }


    //Acceso a princial index
    public function index()
    {
        $this->oUtil->oPosts = $this->oModel->get(0, self::MAX_POSTS);

        $this->oUtil->getView('index');
    }
    //post por id
    public function post()
    {
        $this->oUtil->oPost = $this->oModel->getById($this->_iId);

        $this->oUtil->getView('post');
    }
    //vista de post no encontrado
    public function notFound()
    {
        $this->oUtil->getView('not_found');
    }


    //logout y muestra todos los post
    public function all()
    {
        if (!$this->isLogged()) exit;

        $this->oUtil->oPosts = $this->oModel->getAll();

        $this->oUtil->getView('index');
    }

    //Agregar post nuevos
    public function add()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['add_submit']))
        {
            if (isset($_POST['title'], $_POST['body']) && mb_strlen($_POST['title']) <= 50)
            {
                $aData = array('title' => $_POST['title'], 'body' => $_POST['body'], 'created_date' => date('Y-m-d H:i:s'),'created_for'=>'admin');

                if ($this->oModel->add($aData))
                    $this->oUtil->sSuccMsg = 'Post ah sido agregado.';
                else
                    $this->oUtil->sErrMsg = 'Ah Ocurrido un error! Intente de Nuevo.';
            }
            else
            {
                $this->oUtil->sErrMsg = 'Todos los campos son obligatorios y el título no puede superar los 50 caracteres.';
            }
        }

        $this->oUtil->getView('add_post');
    }
    //modificar un post
    public function edit()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['edit_submit']))
        {
            if (isset($_POST['title'], $_POST['body']))
            {
                $aData = array('post_id' => $this->_iId, 'title' => $_POST['title'], 'body' => $_POST['body']);

                if ($this->oModel->update($aData))
                    $this->oUtil->sSuccMsg = 'Post ah sido Actualizado.';
                else
                    $this->oUtil->sErrMsg = 'Ah Ocurrido un error! Intente de Nuevo';
            }
            else
            {
                $this->oUtil->sErrMsg = 'Todos los campos son obligatorios.';
            }
        }

        //detalle del post
        $this->oUtil->oPost = $this->oModel->getById($this->_iId);

        $this->oUtil->getView('edit_post');
    }
    //eliminar un post
    public function delete()
    {
        if (!$this->isLogged()) exit;

        if (!empty($_POST['delete']) && $this->oModel->delete($this->_iId))
            header('Location: ' . ROOT_URL);
        else
            exit('Post no se puede eliminar.');
    }

    protected function isLogged()
    {
        return !empty($_SESSION['is_logged']);
    }
}
