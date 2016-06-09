<?php

namespace Controllers;

use Models\Studio;
use Models\Anime;

class StudiosController {
    private $studios_model = null;

    public function __construct()
    {
        $this->studios_model = new Studio();
    }
    // On crée la fonction index
    public function index(){

        $studios = $this->studios_model->all();
        $page_title='My Anime List - Studio';
        $view = 'index_studios.php';

        return ['studios' => $studios, 'resource_title' => $page_title, 'view' => $view];
    }
    public function show()
    {
        if(isset($_GET['id'])){
            $id = intval($_GET['id']);
            $studio = $this->studios_model->find($id);

            $animes = null;
            if (isset($_GET['with'])) {
                $with = explode(',', $_GET['with']);
                if (in_array('animes', $with)) {
                    $animes_model = new Anime();
                    $animes = $animes_model->getAnimeByStudio($studio->id_studios);
                }
            }

            $page_title = 'la fiche de ' . $studio->nom_studio;
            $view = 'show_studios.php';


            return['studio' => $studio, 'view' =>$view,'resource_title'=>$page_title,'animes'=>$animes];
        }else {
            die('OOPS... on dirait qu\'il manque l\'identifiant de l\'anime');
        }
    }
}
