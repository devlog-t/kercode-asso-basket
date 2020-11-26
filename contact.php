<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gallico Basket est une association sportive de basketball. Entrainements, stratégie, matchs, rencontres, partage et convivialité.">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <title>Gallico Basket - Formulaire de contact</title>
</head>
    <body>

        <!-- ===== HEADER ===== -->
        <?php
            include ('header.php');
        ?>

        <!-- ===== CONTACT HOME ===== -->
        <div class="page-header section">
            <h1 class="contact__header__title">Contact</h1>
            <p class="text-header-intro">Nous trouver ? Rien de plus simple !</p> 
        </div>

        <!-- ===== CONTACT CONTENT ===== -->
        <main class="main">
            <section class="contact section bd-grid" id="contact">          
                <div class="contact__wrapper">
                    <h2 class="section-title">Nous contacter</h2>

                    <form action="submit.php" class="contact__form">
                        <div class="form__field">
                            <label for="name">Votre nom</label>
                            <input type="text" placeholder="Nom Prénom" id="name" class="input" maxlength="20" minlength="3" required>
                        </div>
                        <div class="form__field">
                            <label for="email">Votre Email</label>                
                            <input type="email" placeholder="exemple@mail.com" id="email" class="input" required>
                        </div>
                        <div class="form__field">
                            <label for="topic">Sujet</label>
                            <select name="topic" id="topic" class="input" required>
                                <option value="">Sujet du message</option>
                                <option value="inscription">Inscription</option>
                                <option value="planning">Planning</option>
                                <option value="cotisation">Cotisation</option>
                                <option value="autres">Autres</option>
                            </select>
                        </div>
                        <div class="form__field">
                            <label for="message">Votre message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="input"></textarea>
                        </div>

                        <input type="submit" value="S'incrire" class="contact__button button">
                    </form>
                </div>

                <div class="contact__infos">
                    <h3 class="section__subtitle">Nous trouver</h3>
                    <address class="contact__address">
                        <p>
                            12 Rue Georges Caldray,<br>
                            56000 Vannes
                        </p>
                        <p>
                            <a href="mailto:gallico-basket@example.com">gallico-basket@example.com</a>
                            <a href="tel:+33102030405">01.02.03.04.05</a>
                        </p>
                    </address>
                </div>
            </section>
            
            <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.0754270781936!2d-2.7799520842215903!3d47.663531092036436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101eba62f8b41d%3A0x8b9f26d7d3e595c1!2s12%20Rue%20Georges%20Caldray%2C%2056000%20Vannes!5e0!3m2!1sfr!2sfr!4v1606247628897!5m2!1sfr!2sfr aria-hidden="false" tabindex="0">
                    </iframe>
            </div>
        </main>

        <!--===== FOOTER =====-->
        <?php
            include ('footer.php');
        ?>
        
    </body>
</html>