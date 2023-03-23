<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/nosAteliers.css">

</head>

<body>
    <?php include './templates_parts/_header.php'; ?>

    <main>
        <section class="section1">
            <h1> Eveil internet</h1>
            <div class="descriptif">
                <div class="texte">
                    <p>Apprendre à savoir naviguer sur internet (recherche sur les sites internet avec Google et Firefox, gérer les favoris, se connecter aux sites administratifs...)</p>
                    <p>Nullam efficitur leo vel turpis vulputate, eget iaculis diam dapibus. Nulla justo justo, congue id elit vitae, tincidunt blandit elit. Sed vel diam accumsan, gravida erat at, bibendum diam. Duis fringilla sollicitudin ligula non venenatis. Nam sed sodales ipsum.</p>
                </div>
                <img src="./images/office.svg" alt="une femme devant un ordinateur">
            </div>

        </section>

        <section class="section2">
            <div class="titre">
                <h2>1er séance le jeudi 05/01/2023</h2>
            </div>
            <div class="container">
                <div class="div1">
                    <img src="./images/scolaire.svg" alt="icone d'un chapeau de remise des diplomes">
                    <h2>Débutant</h2>
                    <p>Découverte et initiation à l’outil numérique.</p>
                </div>
                <div class="div1">
                    <img src="./images/cloche.svg" alt=" icone d'une cloche de sonnerie">
                    <h2>Durée</h2>
                    <p>3h par semaine, pour une durée de 15h.</p>
                </div>
                <div class="div1">
                    <img class="cercle" src="./images/el_calendar-sign.svg" alt="rond bleu">
                    <h2>Calendrier</h2>
                    <p>5 sessions de janvier à février tous les jeudis matin de 9h00 à 12h00.</p>
                </div>
            </div>
        </section>

        <section class="section3">
            <h2>Lieu de formation</h2>
            <div class="container">
                <div class="maps">
                    <img src="./images/mapAtelier1.svg" alt="Carte de Pau avec curseur sur Hélioparc">
                </div>
                <div class="descriptif">
                    <h3>Session le matin de 9h00 à 12h00 le : </h3>
                    <ul>
                        <li>Jeudi 05/01/2023</li>
                        <li>Jeudi 12/01/2023</li>
                        <li>Jeudi 19/01/2023</li>
                        <li>Jeudi 26/01/2023</li>
                        <li>Jeudi 02/02/2023</li>
                    </ul>

                    <h3>Rendez-vous à :</h3>
                    <ol>
                        <li>Technopôle Hélioparc</li>
                        <li>Bâtiment Monge</li>
                        <li>2 avenue du Président Pierre Angot</li>
                        <li>64000 PAU</li>
                    </ol>

                    <button> S'inscrire à l'atelier</button>
                </div>
            </div>
        </section>
    </main>

    <?php include './templates_parts/_footer.php' ?>;
</body>

</html>