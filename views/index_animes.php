<main class="wrapper">
    <section class="lasttwenty">
        <h3 role="heading" aria-level="3" class="lasttwenty__title">Les 20 derniers ajouts</h3>
        <ul class="lasttwenty-container">
            <?php $i = 0 ;
            foreach( array_reverse($data['animes']) as $animes):?>
                <?php if(++$i > 20) break;?>
                <li class="lasttwenty-container__elem">
                    <a class="lasttwenty-container__link" href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>"><?php echo $animes->nom_anime;?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </section>
    <section class="full">
        <h3 role="heading" aria-level="3" class="full__title">Liste complète</h3>
        <ul class="full-container">
            <?php foreach(($data['animes']) as $animes):?>
                <?php if(++$i > 20) break;?>
                <li class="full__elem">
                    <a class="full__link" href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>"><?php echo $animes->nom_anime;?></a>
                </li>
            <?php endforeach;?>
        </ul>
        <!-- a ajouter quand la base de données sera plus remplies -->
        <!--
        <div class="full_pagination">
            <p>
                pages suivantes
            </p>
            <ul class="full_pagination-container">
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
                <li><a href="anime.html">1</a></li>
            </ul>
        </div>
        -->
    </section>
</main>
