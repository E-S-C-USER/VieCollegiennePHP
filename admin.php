<?php

session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: login.php");
    exit;
}

$file = "content.html";

if(
    isset($_POST["save"]) &&
    isset($_POST["content"])
){
    file_put_contents(
        $file,
        $_POST["content"]
    );
}

$content = "";

if(file_exists($file))
{
    $content = file_get_contents($file);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Administration</title>

<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="topbar glass">

    <div>
        Connecté :
        <?= htmlspecialchars($_SESSION["user"]) ?>
    </div>

    <div>

        <a class="button" href="index.php">
            Voir le site
        </a>

        <a class="button" href="logout.php">
            Déconnexion
        </a>

    </div>

</header>

<div class="admin-container">

    <div class="glass editor">

        <h2>Modifier le contenu</h2>

        <form method="post">

            <textarea
                name="content"
            ><?= htmlspecialchars($content) ?></textarea>

            <button
                type="submit"
                name="save"
            >
                Sauvegarder
            </button>

        </form>

    </div>

</div>

</body>
</html>