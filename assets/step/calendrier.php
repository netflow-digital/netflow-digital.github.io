<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/calendrier.css">

</head>

<body>
    <?php
    include './templates_parts/_header.php';
    ?>

    <main>

        <?php
        require '../step/src/Date/Month.php';
        $month = new Month($_GET['month'] ?? null, $_GET['year'] ?? null); ?>
        <h1> <?= $month->toString(); ?> </h1>

        <section>
            <table>
                <?php for ($i = 0; $i < $month->getWeeks(); $i++) { ?>
                    <tr class="calendar">
                        <td>Lundi</td>
                        <td>Mardi</td>
                        <td>Mercredi</td>
                        <td>Jeudi</td>
                        <td>Vendredi</td>
                        <td>Samedi</td>
                        <td>Dimanche</td>
                    </tr>
                <?php } ?>

            </table>
        </section>
    </main>

    <?php
    include './templates_parts/_footer.php';
    ?>

</body>

</html>