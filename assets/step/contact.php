<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/contact.css">
    <script defer src="./js/formulaire.js"></script>

</head>

<body>
    <?php
    include './templates_parts/_header.php';
    ?>

    <section class="section1">
        <h1> Contactez-nous</h1>
        <p>Vous souhaitez en savoir plus sur nos différents ateliers et nos offres ? <br>
            Vous souhaitez être informé des prochains ateliers ou événements mis en place vers chez vous ?</p>
    </section>

    <section class="section2">
        <div class="container">
            <img src="./images/contact.svg" alt="une personne devant un téléphone">
            <form id="form" action="./formulaire.php" method="post">
                <div>
                    <label for="nom">Votre nom <span>*</span> </label><br>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div>
                    <label for="prenom"> Votre prénom <span>*</span> </label><br>
                    <input type="text" name="prenom" id="prenom" required>
                </div>
                <div>
                    <label for="email"> Votre email <span>*</span> </label><br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="tel"> Votre numéro de téléphone: </label><br>
                    <input type="tel" name="tel" id="tel">
                </div>
                <div>
                    <p><label for="message"> Votre message <span>*</span> </label></p><br>
                    <textarea name="message" id="message" rows="20" placeholder="    Votre message" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" id="buttonSubmit" value="valider" disabled>
                </div>
            </form>
        </div>
    </section>


    <?php
    include './templates_parts/_footer.php';
    ?>

</body>

</html>