<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PHD1L2SDBZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PHD1L2SDBZ');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gallico Basket est une association sportive de basketball. Entrainements, stratégie, matchs, rencontres, partage et convivialité.">

    <meta property="og:title" content="Gallico Basket - Association de Basketball à Vannes" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://asso-basket.herokuapp.com/" />
    <meta property="og:image" content="https://asso-basket.herokuapp.com/assets/img/high-def/outdoor-basket.webp" />

    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">

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
                        <img src="assets/img/high-def/terrain-basket-exterieur.webp" alt="Terrain de basket extérieur">
                    </div>

                    <article class="about__content">
                        <div class="content__wrapper">
                            <h3 class="section-subtitle">Votre association de basket à Vannes</h3>
                            <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque in fuga officiis, similique.</p>
                        </div>
                        <div class="about__button">
                            <a href="contact.php" class="button">Nous rejoindre</a>
                        </div>
                    </article>
                </div>
            </section>

            <!--===== NEWS SECTION WITH SLIDER=====-->
            <section class="news section" id="news">
                <h2 class="section-title">News</h2>

                <?php 
                
                include ('slider.php');
                
                ?>
                
            </section>
        </main>

        <!--===== FOOTER =====-->
        <?php
            include ('footer.php');
        ?>
        
    </body>
</html>