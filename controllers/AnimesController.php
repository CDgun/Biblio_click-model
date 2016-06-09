<?php

namespace Controllers;

use Models\Anime;
use Models\Studio;

class AnimesController {
    private $animes_model = null;

    public function __construct()
    {
        $this->animes_model = new Anime();
    }
    // On crée la fonction index
    public function index(){
        // prévoir une fonction pour plus de pages.

        // $page = 1;
        // if(isset($_GET['page'])) {
        //     $page = intval($_GET['page']);
        // }
        // $animes = $this->animes_model->getPaginatedBooks((intval($_GET['page'])-1)*10);
        // $nbanime = $this->animes_model->getNbPages()->nbpage;
        // $nbpages = intval($nbpage / 10);

        $animes = $this->animes_model->all();
        $page_title='My Anime List - Anime';
        $view = 'index_animes.php';

        return ['animes' => $animes, 'resource_title' => $page_title, 'view' => $view];
    }
    public function show()
    {
        if(isset($_GET['id'])){
            $id = intval($_GET['id']);
            $anime = $this->animes_model->find($id);

            $studios = null;
            if (isset($_GET['with'])) {
                $with = explode(',', $_GET['with']);
                if (in_array('studio', $with)) {
                    $studios_model = new Studio();
                    $studios = $studios_model->getStudioByAnimeId($anime->id_animes);
                }
            }

            $page_title = 'la fiche de ' . $anime->nom_anime;
            $view = 'show_animes.php';


            return['anime' => $anime, 'view' =>$view,'resource_title'=>$page_title,'studio'=>$studios];
        }else {
            die('OOPS... on dirait qu\'il manque l\'identifiant de l\'anime');
        }
    }
    public function completed(){
        $animes = $this->animes_model->all();
        $checkstatus = $this->animes_model->checkAnimeStatus($animes->id_animes);
        $page_title='My Anime List - Complets';
        $view = 'completed_animes.php';

        return ['animes' => $animes, 'resource_title' => $page_title, 'view' => $view, 'checkstatus'=>$checkstatus];
    }
}
