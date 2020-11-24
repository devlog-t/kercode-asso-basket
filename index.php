<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <title>Gallico Basket - Association de Basketball à Vannes</title>
</head>
<body>

    <!-- ===== HEADER ===== -->
    <?php
        include ('header.php');
    ?>
    
    <main class="main">

        <!-- ===== HOME SECTION ===== -->
        <section class="section home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Bienvenue,<br>chez <span class="home__title-color">Gallico</span><br> Basket</h1>  
            </div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dignissimos.
            </p>

            <div class="home__button">
                <a href="#about" class="button">En savoir plus</a>
            </div>
        </section>

        <!-- ===== ABOUT SECTION ===== -->
        <section class="about section" id="about">
            <h2 class="section-title">Le club</h2>
    
            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/terrain-basket-exterieur.jpg" alt="Photo of Marlon">
                </div>

                <div class="about__content">
                    <div class="content__wrapper">
                        <h3 class="section-subtitle">Votre association de basket à Vannes</h3>
                        <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque in fuga officiis, similique.</p>
                    </div>
                    <div class="about__button">
                        <a href="#" class="button">Nous rejoindre</a>
                    </div>
                </div>
            </div>
        </section>

        <!--===== NEWS SECTION =====-->
        <section class="news section" id="news">
            <h2 class="section-title">News</h2>

            <article class="news__card bd-grid">
                <div class="card__img">
                    <img src="assets/img/terrain-basket-exterieur.jpg" alt="">
                </div> 
                <div class="card__wrapper">
                    <p class="category-post">Vie du club</p>
                    <div class="card__content">
                        <h3 class="card__title section-subtitle">Titre de l'article</h3>
                        <p class="card__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis aut repudiandae molestiae aliquid corporis blanditiis illo...</p>
                    </div>
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