<?php
namespace Models;

class Studio extends Model
{
    protected $table = 'studios';

    public function getStudioByAnimeId($id){
        $sql='SELECT studios.* FROM studios JOIN studio_anime ON studios.id_studios = studio_anime.studio_id JOIN animes ON studio_anime.anime_id = animes.id_animes WHERE animes.id_animes= :id';
        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id' => $id]);
        return $pdoSt->fetchAll();
    }
}
