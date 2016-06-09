<main class="wrapper">
    <h1 class="animecard__title"><?php echo $data['studio']->nom_studio;?></h1>
    <div class="animeinfo">
        <ul class="animeinfo-container">
            <?php if ($data['animes']): ?>
                <h2>a créer les animes : </h2>
                <ul>
                    <?php foreach ($data['animes'] as $animes) : ?>
                        <li class="studio__elem">
                            <a href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>&with=studio" class="studio__link"><?php echo $animes->nom_anime; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        <a class="return" href="index.php">Retourner à la page d'accueil</a>
    </div>

</main>
