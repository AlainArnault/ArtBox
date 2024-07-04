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
    
    <div id="liste-oeuvres">
        <?php foreach ($oeuvre as $ficheOeuvre) : ?>
            <article class="oeuvre">
                            <a href="<?php echo $ficheOeuvre['lien']; ?>">
                                <img src=<?php echo $ficheOeuvre['img-oeuvre']; ?> alt="<?php echo $ficheOeuvre['title']; ?>">
                                <h2><?php echo $ficheOeuvre['title']; ?></h2>
                                <p class="description"><?php echo $ficheOeuvre['description']; ?></p>
                            </a>
            </article>
        <?php endforeach; ?>
        
        </div>
    </main>
    
<?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>