<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vie Collégienne</title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="aurora a1"></div>
<div class="aurora a2"></div>
<div class="aurora a3"></div>

<header class="topbar glass">

    <div class="logo">
        Vie Collégienne
    </div>

    <nav>

        #foyerFoyer</a>
        <alubsClubs</a>
        <actualitesActualités</a>

        <?php if(isset($_SESSION['user'])): ?>

            <a class="button" href="admin.php">
                Administration
            </a>

            <a class="button" href="logout.php">
                Déconnexion
            </a>

        <?php else: ?>

            <a class="button" href="login.php">
                Connexion
            </a>

        <?php endif; ?>

    </nav>

</header>

<!-- HERO -->

<section class="hero glass">

    <div class="hero-content">

        <h1>
            Vie Collégienne
        </h1>

        <p>
            Activités • Clubs • Événements • Foyer
        </p>

    </div>

    <div class="hero-image">

        IMAGE PRINCIPALE

    </div>

</section>

<!-- FOYER -->

<section class="section" id="foyer">

    <div class="section-image">
        PHOTO DU FOYER
    </div>

    <div class="section-content">

        <h2>Le foyer</h2>

        <p>
            Le foyer du collège Sainte‑Marie d’Antony
            est un espace dynamique destiné à favoriser
            les échanges, la convivialité et la participation
            des élèves à la vie de l’établissement.
        </p>

        <p>
            Les élèves sont invités à participer activement
            aux animations et projets organisés tout au long
            de l’année.
        </p>

    </div>

</section>

<!-- HORAIRES -->

<section class="section">

    <h2>Horaires</h2>

    <div class="cards">

        <div class="card glass">

            <h3>6e / 5e</h3>

            <p>
                12h00 - 12h50
            </p>

        </div>

        <div class="card glass">

            <h3>4e / 3e</h3>

            <p>
                13h00 - 13h50
            </p>

        </div>

    </div>

</section>

<!-- CLUBS -->

<section class="section" id="clubs">

    <h2>Clubs 6e / 5e</h2>

    <div class="cards">

        <article class="card glass">
            <div class="image-slot">Potager</div>
            <h3>Club Potager</h3>
        </article>

        <article class="card glass">
            <div class="image-slot">Maths</div>
            <h3>Club Maths</h3>
        </article>

        <article class="card glass">
            <div class="image-slot">Lecture</div>
            <h3>Lecture CDI</h3>
        </article>

    </div>

</section>

<section class="section">

    <h2>Clubs 3e</h2>

    <div class="cards">

        <article class="card glass">
            <div class="image-slot">TV</div>
            <h3>ISM TV Pastorale</h3>
        </article>

        <article class="card glass">
            <div class="image-slot">Journalisme</div>
            <h3>Journalisme</h3>
        </article>

    </div>

</section>

<section class="section">

    <h2>Clubs 4e / 3e</h2>

    <div class="cards">

        <article class="card glass">
            <div class="image-slot">Eco</div>
            <h3>Éco CDI</h3>
        </article>

        <article class="card glass">
            <div class="image-slot">Manga</div>
            <h3>Manga CDI</h3>
        </article>

    </div>

</section>

<!-- OUVERTS A TOUS -->

<section class="section">

    <h2>Clubs ouverts à tous</h2>

    <div class="cards">

        <article class="card glass">
            <h3>Crochet</h3>
        </article>

        <article class="card glass">
            <h3>Rhétorique</h3>
        </article>

        <article class="card glass">
            <h3>Danse contemporaine</h3>
        </article>

        <article class="card glass">
            <h3>Coréen</h3>
        </article>

        <article class="card glass">
            <h3>Chant & Louange</h3>
        </article>

        <article class="card glass">
            <h3>Orchestre</h3>
        </article>

        <article class="card glass">
            <h3>Bridge</h3>
        </article>

        <article class="card glass">
            <h3>Jeux de société</h3>
        </article>

    </div>

</section>

<!-- ACTUALITES -->

<section class="section" id="actualites">

    <h2>Actualités</h2>

    <div class="news-card glass">

        <div class="news-image">
            PHOTO ACTUALITÉ
        </div>

        <div>

            <h3>
                Sensibilisation au harcèlement
            </h3>

            <p>
                Des jeux de rôle ont été organisés
                afin de sensibiliser les élèves
                à cette problématique.
            </p>

            <a
            class="button"
            href="https://harcelements.netlify.app"
            target="_blank">

                Participer

            </a>

        </div>

    </div>

</section>

<!-- GALERIE -->

<section class="section">

    <h2>Galerie</h2>

    <div class="gallery">

        <div class="gallery-item">
            PHOTO 1
        </div>

        <div class="gallery-item">
            PHOTO 2
        </div>

        <div class="gallery-item">
            PHOTO 3
        </div>

        <div class="gallery-item">
            PHOTO 4
        </div>

    </div>

</section>

<!-- CONTACT -->

<section class="section">

    <h2>Contact</h2>

    <div class="glass contact-card">

        <p>
            M. Mahamadou Diarra
        </p>

        <p>
            mdiarra@ism-antony.org
        </p>

    </div>

</section>
<?php
if(file_exists("content.html"))
{
    echo file_get_contents("content.html");
}
?>

<footer>

    Vie Collégienne • Sainte‑Marie Antony

</footer>

</body>
</html>
