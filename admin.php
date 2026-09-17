<?php

session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: login.php");
    exit;
}

$contentFile = "content.html";

if(
    $_SERVER["REQUEST_METHOD"] === "POST"
    &&
    isset($_POST["save"])
)
{
    file_put_contents(
        $contentFile,
        $_POST["content"] ?? ""
    );
}

$content = "";

if(file_exists($contentFile))
{
    $content = file_get_contents(
        $contentFile
    );
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
Administration | Vie Collégienne
</title>

<link
rel="stylesheet"
href="style.css">

</head>

<body>

<div class="aurora a1"></div>
<div class="aurora a2"></div>
<div class="aurora a3"></div>

<div id="cursor-glow"></div>

<header class="glass topbar">

    <div class="logo">
        Administration
    </div>

    <nav>

        <a
        href="index.php"
        class="button">

            Voir le site

        </a>

        <a
        href="index.php">

            Accessibilité

        </a>

        <a
        href="logout.php"
        class="button">

            Déconnexion

        </a>

    </nav>

</header>

<section class="section">

    <div class="glass admin-layout">

        <div class="editor-panel">

            <h2>
                Éditeur
            </h2>

            <form method="post">

                <textarea
                id="editor"
                name="content"><?= htmlspecialchars($content) ?></textarea>

                <div class="editor-actions">

                    <button
                    type="submit"
                    name="save">

                        Sauvegarder

                    </button>

                </div>

            </form>

        </div>

        <div class="preview-panel">

            <h2>
                Aperçu
            </h2>

            <div id="preview">

                <?= $content ?>

            </div>

        </div>

    </div>

</section>

<script>

const editor =
document.getElementById(
"editor"
);

const preview =
document.getElementById(
"preview"
);

editor.addEventListener(
"input",
()=>{

    preview.innerHTML =
    editor.value;

});

const glow =
document.getElementById(
"cursor-glow"
);

document.addEventListener(
"mousemove",
(e)=>{

    glow.style.left =
    e.clientX + "px";

    glow.style.top =
    e.clientY + "px";

});

</script>

<style>

.admin-layout{

    display:grid;

    grid-template-columns:
    1fr 1fr;

    gap:25px;

    padding:25px;
}

textarea{

    width:100%;

    min-height:700px;

    resize:vertical;

    padding:20px;

    border:none;

    outline:none;

    border-radius:20px;

    background:
    rgba(255,255,255,.05);

    color:white;

    font-family:
    Consolas,
    monospace;
}

#preview{

    min-height:700px;

    padding:20px;

    border-radius:20px;

    background:
    rgba(255,255,255,.03);

    overflow:auto;
}

.editor-actions{

    margin-top:20px;
}

@media(max-width:1200px){

    .admin-layout{

        grid-template-columns:
        1fr;
    }

}

</style>

</body>
</html>
