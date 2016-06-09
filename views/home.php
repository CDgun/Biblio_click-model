<main class="wrapper">
    <section class="ongoinganime">
        <h3 role="heading" aria-level="3" class="ongoinganime__title">Les animes en cours</h3>

        <div class="list">
            <?php $i = 0 ;
            foreach( ($data['animes']) as $animes):?>
                <?php if(++$i > 5) break;?>

                <article class="list-anime">
                    <a href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>&with=studio">
                        <h4 class="list-anime__title" role="heading" aria-level="4"><?php echo $animes->nom_anime;?></h4>
                        <img src="<?php echo $animes->cover;?>" alt="cover de <?php echo $animes->nom_anime;?>" width="200" height="300" class="list-anime__image">
                    </a>
                </article>

            <?php endforeach;?>
        </div>

    </section>
    <section class="lastanime">
        <h3 role="heading" aria-level="3" class="lastanime__title">Les derniers animes ajoutés</h3>

        <div class="list">
            <?php $i = 0 ;
            foreach( array_reverse($data['animes']) as $animes):?>
                <?php if(++$i > 5) break;?>
                <article class="list-anime">
                    <a href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>&with=studio">
                        <h4 class="list-anime__title" role="heading" aria-level="4"><?php echo $animes->nom_anime;?></h4>
                        <img src="<?php echo $animes->cover;?>" alt="cover de <?php echo $animes->nom_anime;?>" width="200" height="300" class="list-anime__image">
                    </a>
                </article>
            <?php endforeach;?>
        </div>

    </section>
    <section class="lastend">
        <h3 role="heading" aria-level="3" class="lastend__title">Les derniers animes terminés</h3>

        <div class="list">
            <?php $i = 0 ;
            foreach( array_reverse($data['animes']) as $animes):?>
                <?php if(++$i > 5) break;?>
                <article class="list-anime">
                    <a href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>&with=studio">
                        <h4 class="list-anime__title" role="heading" aria-level="4"><?php echo $animes->nom_anime;?></h4>
                        <img src="<?php echo $animes->cover;?>" alt="cover de <?php echo $animes->nom_anime;?>" width="200" height="300" class="list-anime__image">
                    </a>
                </article>
            <?php endforeach;?>
        </div>

    </section>
    <section class="lastfavorites">
        <h3 role="heading" aria-level="3" class="lastfavorites__title">Les derniers animes favoris</h3>

        <div class="list">
            <?php $i = 0 ;
            foreach( array_reverse($data['animes']) as $animes):?>
                <?php if(++$i > 5) break;?>
                <?php if(($animes->favoris)==1) :?>
                <article class="list-anime">
                    <a href="?a=show&r=animes&id=<?php echo $animes->id_animes;?>&with=studio">
                        <h4 class="list-anime__title" role="heading" aria-level="4"><?php echo $animes->nom_anime;?></h4>
                        <img src="<?php echo $animes->cover;?>" alt="cover de <?php echo $animes->nom_anime;?>" width="200" height="300" class="list-anime__image">
                    </a>
                </article>
            <?php endif;?>
            <?php endforeach;?>
        </div>

    </section>
</main>
