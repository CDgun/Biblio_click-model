<main class="wrapper">
    <h3 role="heading" aria-level="3" class="full__title">tout les animes completé</h3>
    <ul class="full-container">
        <?php foreach(($data['animes']) as $animes):?>
            <?php if($data['checkstatus']==1) :?>
                <li class="full__elem">
                    <a class="full__link" href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>"><?php echo $animes->nom_anime;?></a>
                </li>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>
</main>
