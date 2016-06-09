<main class="wrapper">
    <div class="animecard">
        <h1 class="animecard__title"><?php echo $data['anime']->nom_anime;?></h1>
        <img src="<?php echo $data['anime']->cover;?>" class="animecard__img" alt="cover de l'anime">
        <h2 class="animecard-story__label">synopsis</h2>
        <p class="animecard-story__text"><?php echo $data['anime']->synopsis;?></p>
    </div>
    <div class="animeinfo">
        <ul class="animeinfo-container">
            <!-- <li class="animeinfo-container__elem">
                <h3>statut : completé/ en cours</h3>
            </li> -->
            <li class="animeinfo-container__elem">
                <h3>épisodes vus : <?php echo $data['anime']->dernier_episode_vu ;?> / <?php echo $data['anime']->nombre_episode;?></h3>
            </li>
            <li class="animeinfo-container__elem">
                <h3>genres :</h3>
            </li>

            <li class="animeinfo-container__elem">
                <?php if ($data['studio']): ?>
                <h3>studio :
                    <?php foreach ($data['studio'] as $studio): ?>
                        <a href="?a=show&r=studios&id=<?php echo $studio->id_studios; ?>&with=animes" class="studio__link"><?php echo $studio->nom_studio ;?></a>
                    <?php endforeach; ?>
                </h3>
            </li>
            <?php endif; ?>


            <!-- <li class="animeinfo-container__elem">
                <h3>nombre de saisons</h3>
            </li>
            <li class="animeinfo-container__elem">
                <h3>date ajout</h3>
            </li> -->
        </ul>
        <a class="return" href="index.php">Retourner à la page d'accueil</a>

    </div>

</main>
