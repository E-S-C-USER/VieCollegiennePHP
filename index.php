<?php
session_start();

$content = '';

if(file_exists('content.html'))
{
    $content = file_get_contents('content.html');
}

$accessible = isset($_GET['accessible']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
Vie Collégienne | Sainte-Marie Antony
</title>

<link
rel="stylesheet"
href="style.css">

<?php if($accessible): ?>

<link
rel="stylesheet"
href="accessible_v.css">

<?php endif; ?>

</head>

<body>

<?php if(!$accessible): ?>

<div class="aurora a1"></div>
<div class="aurora a2"></div>
<div class="aurora a3"></div>

<div id="cursor-glow"></div>

<?php endif; ?>

<header class="glass topbar">   Vie Collégienne

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

        <?php if(!$accessible): ?>

        <a
        class="button"
        href="index.php?accessible=1">

            Accessibilité

    <a
        class="button"
        href="index.php">

            Mode Premium

        </a>

        <?php endif; ?>

        <?php if(isset($_SESSION['user'])): ?>

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

            Sainte‑Marie Antony

        </span>

        <h1>

            Vie Collégienne

        </h1>

        <p>

            Clubs • Foyer • Activités • Événements • Projets

        </p>

        <div class="hero-actions">

            <a
            href="#clubs"
            class           </a>

            <a
            href="#actualites"
            class="button">

                Actualités

            </a>

  ge">

        EMPLACEMENT IMAGE PRINCIPALE

    </div>

</section>

<?php
echo $content;
?>

<footer>

    <h3>
        Vie Collégienne
    </h3>

    <p>
        Collège Sainte‑Marie Antony
    </p>

    <p>
        2026 - 2027
    </p>

</footer>

<?php if(!$accessible): ?>

<script>

const glow =
document.getElementById(
'cursor-glow'
);

document.addEventListener(
'mousemove',
(e)=>{

    glow.style.left =
    e.clientX + 'px';

    glow.style.top =
    e.clientY + 'px';

});
</script>

<?php endif; ?>

</body>
</html>
