<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

<?php require_once(__DIR__ . '/header.php'); ?>

    
<main>
<?php include 'oeuvres.php'; ?>
<?php $_GET['id']; ?>
<?php $oeuvreId = array_search($_GET['id'], $oeuvre)


<?php foreach ($oeuvre as $ficheOeuvre) : ?>
    <article class="oeuvre">
                    <a href="<?php echo $ficheOeuvre['lien']; ?>">
                        <img src=<?php echo $ficheOeuvre['img-oeuvre']; ?> alt="<?php echo $ficheOeuvre['title']; ?>">
                        <h2><?php echo $ficheOeuvre['title']; ?></h2>
                        <p class="description"><?php echo $ficheOeuvre['description']; ?></p>
                    </a>
    </article>
<?php endforeach; ?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src=<?php if ($oeuvreIdecho $ficheOeuvre['img-oeuvre']; ?> alt="<?php echo $ficheOeuvre['title']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1>Dodomu</h1>
            <p class="description">Mia Tozerski</p>
            <p class="description-complete">
                Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu'elle partage, ayant elle-même dû quitter son foyer. L'œuvre évoque le drapeau liquéfié d'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d'émotion est le symbole d'un événement qui marquera l'Histoire. Cette peinture à l'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.
            </p>
        </div>
    </article>
</main>
    
<?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>
