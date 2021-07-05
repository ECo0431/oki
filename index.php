<?php
    include '_inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
    ofkfopfkdfdsodnofdjndjkfndfsjhfnsjdndfjknd
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=320, initial-scale=1">
        <meta name="description" content="Sophrologue généraliste, Confiance en soi, Gestion du stress, Meilleure image de soi, Préparation à l'accouchement Aide à la concentration, Meilleure écoute du corps ..." />
        <link rel="stylesheet" href="style.css" />ffferxjnjknjkn
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script src="jquerry.js"></script>
        <script src="script.js"></script>
        <title>Mayotte Vector</title>
    </head>
<body>
<header>
    <a href="index.php">
        <div class="boxLogo">
        <img class="logo" alt="Logo Sophrologue généraliste" src="img/logo.png">
        </div>
    </a>
</header>

    <img id="iconeMenuBurger" alt="Icone du menu mobile et tablette" src="img/IconeMenuBurger.png">
    <div class="boxMenuBurger">
        <nav>       
            <ul>
                <li>
                    <a class="txtMenu" href="#presentation">CRÉATION GRAPHIQUE</a>
                    <a class="txtMenu" href="#quiSuisJe">IMPRIMERIE</a>
                    <a class="txtMenu" href="#tarifs">CONSOMABLES (PRO)</a>
                    <a class="txtMenu" href="#coordonnees">CONTACT</a>
                    <a class="txtMenu" href="#plan">PLAN</a>
                </li>
            </ul>     
        </nav>
    </div>
    <main>
        <div id="acceuil"></div>
        <article>
            <div class="boxArticleBleu">
                <h1>
                    Qui sommes nous?
                </h1>
                <p>
Mayotte vector est une angence de communication en ligne dématérialisés créer par la SAS Vienko AA. Mayotte vector vous accompagne pour tous vaux de communication visuelle création logo, vectorisation logo dèja existant, impression carte de visite, flyer, brochure, dépliant...             
                </p>
            </div>
        </article>
        <div id="quiSuisJe"></div>
        <article>
            <div class="boxArticleRose">
                <h1>
                    Création graphique
                </h1>
                <p>
                   Nous vous réalisons la création graphique de votre logo ainsi que ça charte graphique (afin qu'il puisse être utiliser sur tous supports de communication tout en respectant les contraintes technique de l'imprimerie, il pourras donce être alors visible sur ces différents support cartes de visite, (tract) flyers, affiches, brochures, et tous les autres supports de l'imprimerie. Votre logo est crée de sorte à ce que nous puissons en faire des découpes en adhésifs afin d'être utiliser sur un véhicule ou une enseigne publicitaire par exemple. Il est tout à fait possible qu'il soit adapté sur des textiles tels que des tee-shirt sweat-shirt etc. ainsi que sur des objets publicitaire.
                </p>
            </div>
        </article>
        <div id="presentation"></div>
        <article>
            <div class="boxArticleBleu">
                <h1>
                    Imprimerie
                </h1>
                <p>
                    Nos réalison l'impression de vos supports papiers tels que les cartes de visite bien utile afin de partagez ces coordonnée. L'impression de tracts (flyers) et de grande affiche pour affichage publique afin de communiquer au plus grand monde un événements, une promotions, une nouveauté. Nous vous proposons l'impression de vos dépliants et dépliant afin que vous puissser partager vos services, et produits à vendre. La réalisation de de roll up et de stand pour vos événement lors de salon ou dans votre boutique est possible. D'autres réalisation sont possible n'hésitez pas à nous contactez dans la rubrique contact.
                </p>
            </div>               
        </article>
        <div id="tarifs"></div>
        <article>
            <div class="boxArticleRose">
                <h1>
                    Consomables (PRO)
                </h1>
                    <p>
                        
                    </p>
            </div>
        </article>
        <div id="coordonnees"></div>
        <article>
            <div class="boxArticleBleu">
                <h1>
                    Me contacter
                </h1>
                <address>
                    <p class="txtForm">
                        ABDALLAH Aboubacar<br/>
                        06 16 44 58 62<br/>
                    </p>
                </address>
                <div class="container">
                    <div>

                        <?php if(array_key_exists('errors', $_SESSION)): ?>
                            <div class="alert alert-danger">
                                <?= implode('<br>', $_SESSION['errors']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(array_key_exists('success', $_SESSION)): ?>
                            <div class="alertSuccess">
                                Votre email a bien été envoyé
                            </div>
                        <?php endif; ?>


                        <form action="post_contact.php" method="POST">
                            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                            <div class="row">
                                <div class="nomEmailForm">
                                    <div class="txtForm" id="formHeader">
                                        <?= $form->text('name', 'Votre Nom'); ?>
                                    </div>
                                    <div class="txtForm" id="formHeader">
                                        <?= $form->email('email', 'Votre Email'); ?>
                                    </div>
                                    <div class="txtForm" id="formHeader">
                                        <?= $form->select('service', 'Service', ['Demande de devis', 'Demande de rendez-vous', 'Des questions?']); ?>
                                    </div>
                                </div>
                                <div class="txtForm">
                                    <?= $form->textarea('message', 'Votre message'); ?>
                                    <?= $form->submit('Envoyer'); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                    </body>
                    </html><?php
                    unset($_SESSION['inputs']);
                    unset($_SESSION['success']);
                    unset($_SESSION['errors']);
                    ?>
                <div class="BoxLogoReseau">
                    <a href="https://www.facebook.com/Cassandre-Mah%C3%A9-rieux-Sophrologue-100994314686290/?modal=admin_todo_tour"><img class="logoReseau" alt="Logo Facebook" src="img/logo_fb.png"></a>
                    <a href="https://www.instagram.com/cassandremaherieux/?hl=fr"><img class="logoReseau" alt="Logo Instagram" src="img/logo_insta.png"></a>
                    <a href="https://twitter.com/MaheRieux"><img class="logoReseau" alt="Logo Twitter" src="img/logo_twitter.png"></a>
                </div>
            </div>
        </article>
        <div id="plan"></div>
        <article>
            <div class="boxArticleRose">
                <h1>
                    Plan
                </h1>
                <iframe class="plan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.812183209725!2d45.174645814820096!3d-12.790700090974735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x220a123a61bc6dd3%3A0x649bd39311d829d!2sRue%20Salamani%2C%20Vahib%C3%A9%2C%20Mayotte!5e0!3m2!1sfr!2sfr!4v1619613096331!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </article>
        <a href="mentionsLegales.php"><p>Mentions légales</p></a>
    </main>
    <script>
    $(function(){
        $("#iconeMenuBurger").click(function(){
        $(".boxMenuBurger").toggleClass("revientMenuBurger");
        });  
        $(".txtMenu").click(function(){
        $(".boxMenuBurger").removeClass("revientMenuBurger");
        });
    });
        </script>
    

</body>
</html>