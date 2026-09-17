<?php

session_start();

if(isset($_SESSION['user']))
{
    header(
    'Location: admin.php'
    );

    exit;
}

$users = [

    'admin' => 'admin123',

    'edrys' => 'edrys123',

    'demo' => 'demo123'

];

$error = '';

if(
    $_SERVER['REQUEST_METHOD']
    ===
    'POST'
)
{
    $username =
    trim(
    $_POST['username']
    ?? ''
    );

    $password =
    trim(
    $_POST['password']
    ?? ''
    );

    if(
        isset(
        $users[$username]
        )
        &&
        $users[$username]
        ===
        $password
    )
    {
        $_SESSION['user'] =
        $username;

        header(
        'Location: admin.php'
        );

        exit;
    }

    $error =
    'Identifiants incorrects';
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
Connexion
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

<div class="login-page">

    <div class="glass login-box">

        <div class="login-logo">

            VC

        </div>

        <h1>
            Administration
        </h1>

        <p class="login-subtitle">

            Connexion à l'espace de gestion.

        </p>

        <?php if($error): ?>

        <div class="error-box">

            <?= htmlspecialchars($error) ?>

        </div>

        <?php endif; ?>

        <form method="post">

            <input
            type="text"
            name="username"
            placeholder="Utilisateur"
            required>

            <input
            type="password"
            name="password"
            placeholder="Mot de passe"
            required>

            <button
            type="submit">

                Se connecter

            </button>

        </form>

        <div class="separator"></div>

        <a
        class="button"
        href="index.php">

            Retour au site

        </a>

        <div class="demo-users">

            <h3>
                Comptes de démonstration
            </h3>

            <p>
                admin / admin123
            </p>

            <p>
                edrys / edrys123
            </p>

            <p>
                demo / demo123
            </p>

        </div>

    </div>

</div>

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

</body>
</html>*
