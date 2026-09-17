<?php
session_start();

$content = "";

if(file_exists("content.html"))
{
    $content = file_get_contents("content.html");
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
Vie Collégienne
</title>

<link
rel="stylesheet"
href="style.css">

<?php
if(isset($_GET["accessible"]))
{
?>
accessible_v.css
<?php
}
?>

</head>

<body>

<div class="aurora a1"></div>
<div class="aurora a2"></div>
<div class="aurora a3"></div>

<header class="glass topbar">

    <div class="logo">

        Vie Collégienne

    </div>

    <nav>

        #foyer
            Foyer
        </a>

        #clubs
            Clubs
        </a>

        #actualites
            Actualités
        </a>

        ?accessible=1

            Accessibilité

        </a>

        <?php if(isset($_SESSION["user"])): ?>

            <a
            class="button"
            href="admin.php">

                Administration

            </a>

            <a
            class="button"
            href="logout.php">

                Déconnexion

            </a>

        <?php else: ?>

            <a
            class="button"
            href="login.php">

                Connexion

            </a>

        <?php endif; ?>

    </nav>

</header>

<section class="glass hero">

    <div class="hero-content">

        <span class="badge">
            Sainte-Marie Antony
        </span>

        <h1>
            Vie Collégienne
        </h1>

        <p>

            Clubs • Activités • Foyer • Événements

        </p>

        <div class="hero-actions">

            #clubs

                Découvrir

            </a>

            <a
            class="button secondary"
            href="#actualites">

                Actualités

            </a>

        </div>

    </div>

    <div class</section>

<?php
echo $content;
?>

<footer>

    <div class="footer-content">

        <h3>
            Vie Collégienne
        </h3>

        <p>
            Collège Sainte-Marie Antony
        </p>

    </div>

</footer>

<div id="cursor-glow"></div>

<script>

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

</body>

</html>
