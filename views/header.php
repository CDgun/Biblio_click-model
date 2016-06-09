

<header class="header">
    <div class="header-topbar">
        <h1 aria-level="1" role="heading" class="hidden">MyAnimeList</h1>
        <nav>
            <h2 role="heading" aria-level="2" class="hidden"> Title & search</h2>
            <ul class="header-topbar-menu">
                <li>
                    <a href="index.php" class="header-topbar-menu__title">My<span class="title-span">Anime</span>List</a>
                </li>
                <li class="header-topbar-menu__search">
                    <div class="search">
                        <form action="#" method="get">
                            <input type="search" placeholder="Rechercher un anime" name="the_search" class="menu__search">
                            <input type="submit" value="SEARCH" class="menu__submit">
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <nav >
            <h2 role="heading" aria-level="2"class="hidden"> Main Navigation</h2>
            <ul class="nav-menu">
                <li class="nav-menu__element active">
                    <a href="index.php" class="nav-menu__link nav-menu__link">Accueil</a>
                </li>
                <li class="nav-menu__element">
                    <a href="?a=index&r=animes" class="nav-menu__link">Anime</a>
                    <!-- <ul class="nav-menu-deroulant">
                        <li class="nav-menu-deroulant__element">
                            <a href="?a=completed&r=animes" class="nav-menu-deroulant__link">Complets</a>
                        </li>
                        <li class="nav-menu-deroulant__element">
                            <a href="#" class="nav-menu-deroulant__link">Genres</a>
                        </li>
                        <li class="nav-menu-deroulant__element">
                            <a href="?a=index&r=studios" class="nav-menu-deroulant__link">Studio</a>
                        </li>
                    </ul> -->
                </li>
                <li class="nav-menu__element">
                    <a href="?a=index&r=studios" class="nav-menu__link">Studio</a><!-- menu temporaire en attendant d'avoir la suite -->
                </li>
                <!-- <li class="nav-menu__element">
                    <a href="#" class="nav-menu__link">Liste</a>
                    <ul class="nav-menu-deroulant">
                        <li class="nav-menu-deroulant__element">
                            <a href="#" class="nav-menu-deroulant__link">En cours</a>
                        </li>
                        <li class="nav-menu-deroulant__element">
                            <a href="#" class="nav-menu-deroulant__link">Vus</a>
                        </li>
                        <li class="nav-menu-deroulant__element">
                            <a href="#" class="nav-menu-deroulant__link">&Agrave; voir</a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-menu__element">
                    <a href="#" class="nav-menu__link">Favoris</a>
                </li> -->
            </ul>
        </nav>
    </div>
    <div class="header-connect">
        <?php include('_connect.php'); ?>
    </div>
</header>
