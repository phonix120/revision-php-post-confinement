<?php
if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case "contactez-nous":
            $content = "<h3>Ceci blabla</h3>";
            break;
        case "galerie":
            $content = "<h3>Ceci est JAPON</h3>";;
            break;
        case "photos":
            $content = "<h3>Ceci est la RUSSIE</h3>";;
            break;
        case "plan":
            $content = "<h3>VODKA</h3>";
            break;
        case "info":
            $content = "<h3>JAPONNNNNNNNNN</h3>";
            break;
        default:
        $content = "<h3>ERROR 404</h3>";
            break;
    // avec un switch, changez la variable content suivant le lien cliqué, si le la valeur de la variable get "page" est différente de celles des liens, affichage du texte: Erreur 404
}}
else{
    $content = "<h3>Ceci est la page d'accueil</h3>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
<h1>Switch</h1>
<a href="03-switch.php">Accueil</a>
<a href="?page=contactez-nous">contactez-nous</a>
<a href="?page=galerie">galerie</a>
<a href="?page=photos">photos</a>
<a href="?page=plan">plan</a>
<a href="?page=info">info</a>
<?php
echo $content;
?>
</body>
</html>
