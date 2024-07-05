<?php
include 'oeuvres.php';

$id = $_GET['id'];
       
$detailOeuvre = $oeuvre[$id];
?>

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
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src=<?php echo $detailOeuvre['img-oeuvre']; ?> alt="<?php echo $detailOeuvre['title']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $detailOeuvre['title']; ?></h1>
            <p class="description"><?php echo $detailOeuvre['description']; ?></p>
            <p class="description-complete">
            <?php echo $detailOeuvre['description-complete']; ?>
            </p>
        </div>
    </article>
 
</main>
    
<?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>
