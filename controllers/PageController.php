<?php

namespace Controllers;

use Models\Anime;
use Models\Studio;
use Models\User;

class PageController extends Controller
{
    private $studios_model = null;
    private $anime_model = null;

    public function __construct()
    {
        $this->studios_model = new Studio();
        $this->animes_model = new Anime();
    }
    public function home()
    {
        $studios = $this->studios_model->all();
        $animes = $this->animes_model->all();
        return ['animes'=>$animes,'view' => 'home.php', 'resource_title' => 'page d\'acceuil'];
    }
    public function admin()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ?a=getLogin&r=auth');
        }
        return ['view' => 'admin.php', 'resource_title' => 'page Admin'];
    }
}
