<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    include './templates_parts/_header.php';
    ?>
    <section class="section1">
        <div class="carre1">
            <div class="container">
                <h1>Les activités de l'équipe CNFS de Step</H1>
            </div>
        </div>
        <div id="slider">
            <img src="./images/slide1.svg" alt="slide1" id="slide">
            <img src="./images/arrow left.svg" alt="flèche gauche" class="bouton" id="d" onclick="ChangeSlide(-1)">
            <img src="./images/arrow left.svg" alt="flèche gauche" class="bouton" id="g" onclick="ChangeSlide(1)">
        </div>
    </section>

    <section class="section2">
        <div class="titre">
            <h2>Les Événements / Ateliers actuels et à venir</h2>
            <img src="./images/pair-programming.svg" alt="deux personnes devant un ordinateur">
        </div>

        <div class="ateliers">
            <div class="atelier">
                <div>
                    <h2> Eveil internet</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id impedit saepe possimus expedita fuga dolore. </p>
                    <button><a href="nosAteliers.php">Voir Atelier</a></button>
                </div>
            </div>

            <div class="atelier">
                <div>
                    <h2> Atelier pix</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id impedit saepe possimus expedita fuga dolore. </p>
                    <button> Voir Atelier</button>
                </div>
            </div>

            <div class="atelier">
                <div>
                    <h2>Atelier tablette</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id impedit saepe possimus expedita fuga dolore. </p>
                    <button> Voir Atelier</button>
                </div>
            </div>

            <div class="atelier">
                <div>
                    <h2> Atelier réseaux sociaux</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id impedit saepe possimus expedita fuga dolore. </p>
                    <button> Voir Atelier</button>
                </div>
            </div>

            <div class="atelier">
                <div>
                    <h2> Atelier recherche d'emploi</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id impedit saepe possimus expedita fuga dolore. </p>
                    <button> Voir Atelier</button>
                </div>
            </div>

            <div class="atelier">
                <div>
                    <h2> Atelier utilisation Linux</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id impedit saepe possimus expedita fuga dolore. </p>
                    <button> Voir Atelier</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="titre">
            <img src="./images/world.svg" alt="deux personnes devant un ordinateur">
            <h2>Retrouvez nos ateliers numérique sur PAU</h2>
        </div>

        <div class="container2">
            <div class="map">
                <img src="./images/Carte Pau.svg" alt="une carte de Pau">
            </div>
            <div class="gps">
                <ul>
                    <li><img src="./images/ion_pin.svg" alt="un point indiquant le Technopôle Hélioparc">
                        <p>Technopôle Hélioparc</p>
                    </li>
                    <li><img src="./images/ion_pin.svg" alt="un point indiquant la MJC des Fleurs">
                        <p>MJC des Fleurs</p>
                    </li>
                    <li><img src="./images/ion_pin.svg" alt="un point indiquant le Pôle Laherrere">
                        <p>Pôle Laherrere</p>
                    </li>
                    <li><img src="./images/ion_pin.svg" alt="un point indiquant l'avenue des lilas">
                        <p>Avenue des lilas</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <!--<section class="section1">
            <div class="carre1">
                <div class="container">
                    <h1>Les activités de l'équipe CNFS de Step</H1>
                </div>
            </div>
            <div class="carre2">
                <div class="container">
                    <h2>Inclusion numérique</h2>
                    <p>Accompagnement pour lutter contre la fracture numérique</p>
                    <p>Participer activement à une meilleure appropriation par le plus grand nombre des usages
                        numériques,
                        c’est l’objectif de notre activité « Inclusion numérique » au sein de La Fabrique du Numérique
                        Paloise.</p>
                </div>
            </div>
        -->



    <?php include "./templates_parts/_footer.php"  ?>

    <script src="./js/index.js"></script>
</body>

</html>