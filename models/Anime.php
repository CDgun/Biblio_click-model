<?php
namespace Models;

class Anime extends Model
{
    protected $table = 'animes';
    public function getAnimeByStudio($id)
    {
        $sql = 'SELECT animes.*
                FROM animes
                JOIN studio_anime ON animes.id_animes = studio_anime.anime_id
                JOIN studios ON studio_anime.studio_id = studios.id_studios
                WHERE studios.id_studios= :id';
        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id' => $id]);
        return $pdoSt->fetchAll();
    }
    // SELECT * FROM `animes` join studio_anime on animes.id_anime = studio_anime.anime_id join studios on studio_anime.studio_id = studios.id_studios
    public function getAnimeByGenre($id)
    {
        $sql = 'SELECT animes.*
                FROM animes
                JOIN anime_genre ON animes.id_animes = anime_genre.anime_id
                JOIN genre ON anime_genre.genre_id = genre.id_genre';
        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id' => $id]);
        return $pdoSt->fetchAll();
    }
    public function checkAnimeStatus($id)
    {
        $sql = 'SELECT animes.*
                FROM animes
                JOIN statut_anime ON animes.id_animes = statut_anime.anime_id
                JOIN statut ON statut_anime.statut_id = statut.id_statut
                WHERE animes.id_animes=:id';
        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id' => $id]);
        return $pdoSt->fetchAll();
    }
}
