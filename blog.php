<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gallico Basket est une association sportive de basketball. Entrainements, stratégie, matchs, rencontres, partage et convivialité.">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <title>Gallico Basket - Les News du club</title>
</head>
<body>

    <!-- ===== HEADER ===== -->
    <?php
        include ('header.php');
    ?>

    <!-- ===== NEWS HOME ===== -->
    <div class="page-header section">
        <h1 class="blog__header__title">Les News</h1>
        <p class="text-header-intro">L'actualité du club</p> 
    </div>

    <!-- ===== NEWS CONTENT ===== -->
    <main class="main main__news">
        <section class="section bd-grid" id="blog">          
            <div class="news" id="news">
                <h2 class="section-title">Dernière News</h2>

                <article class="news__card bd-grid">
                    <div class="card__img">
                        <img src="assets/img/high-def/basketball-dunk.webp" alt="Dunk de basketball">
                    </div> 
                    <div class="card__wrapper">
                        <p class="category-post">Vie du club</p>
                        <div class="card__content">
                            <h3 class="card__title section-subtitle"><a href="article.php">Nouveau site web</a></h3>
                            <p class="card__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis aut repudiandae molestiae aliquid corporis blanditiis illo...</p>
                        </div>
                    </div>               
                </article>
            </div>
        </section>

        <section class="section">
            <h2 class=".section-subtitle news__feed__title">Dernières News</h2>
            <select name="category" class="category input" id="category">
                <option value="">Trier par catégorie</option>
                <option value="club">Vie du club</option>
                <option value="match">Match</option>
                <option value="stratégie">Stratégie</option>
                <option value="fédération">Fédération Basket</option>
            </select>
            <article class="news__feed">
                <div class="card__img">
                    <img src="assets/img/high-def/terrain-basket-exterieur.webp" alt="">
                </div> 
                <div class="">
                    <h3 class="">Titre de l'article</h3>
                    <p class="category-post">Vie du club</p>
                </div>               
            </article>
            <article class="news__feed">
                <div class="card__img">
                    <img src="assets/img/high-def/terrain-basket-exterieur.webp" alt="">
                </div> 
                <div class="">
                    <h3 class="">Titre de l'article</h3>
                    <p class="category-post">Vie du club</p>
                </div>               
            </article>
            <article class="news__feed">
                <div class="card__img">
                    <img src="assets/img/high-def/terrain-basket-exterieur.webp" alt="">
                </div> 
                <div class="">
                    <h3 class="">Titre de l'article</h3>
                    <p class="category-post">Vie du club</p>
                </div>               
            </article>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <?php
        include ('footer.php');
    ?>
    
</body>
</html>