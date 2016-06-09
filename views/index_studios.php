<main class="wrapper">
    <section class="full">
        <h3 role="heading" aria-level="3" class="full__title">Liste complète des studios</h3>
        <ul class="full-container">
            <?php foreach(($data['studios']) as $studios):?>
                <li class="full__elem">
                    <a class="full__link" href="?a=show&r=studios&id=<?php echo $studios->id_studios;?>&with=animes"><?php echo $studios->nom_studio;?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </section>
</main>
