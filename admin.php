<?php

session_start();

$users = [

    "admin" => "admin123",
    "edrys" => "edrys123",
    "demo"  => "demo123"

];

$error = "";

if(isset($_GET["guest"]))
{
    $_SESSION["guest"] = true;

    header("Location:index.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username =
    trim($_POST["username"] ?? "");

    $password =
    trim($_POST["password"] ?? "");

    if(
        isset($users[$username])
        &&
        $users[$username] === $password
    )
    {
        $_SESSION["user"] =
        $username;

        header(
        "Location:admin.php"
        );

        exit;
    }

    $error =
    "Identifiants incorrects.";
}
?>

<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width,initial-scale=1.0">

<title>
Connexion - Vie Collégienne
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

        <h1>
            Administration
        </h1>

        <p class="login-subtitle">

            Connexion réservée à
            l'équipe organisatrice.

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
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Mot de passe"
                required
            >

            <button
                type="submit"
                class="button">

                Connexion

            </button>

        </form>

        <div class="login-separator"></div>

        login.php?guest=1

            Accéder au site

        </a>

        <a
        href="index.php"
        class="simple-link">

            Retour à l'accueil

        </a>

        <div class="demo-users">

            <h3>
                Comptes de démonstration
            </h3>

            <ul>

                <li>
                    admin / admin123
                </li>

                <li>
                    edrys / edrys123
                </li>

                <li>
                    demo / demo123
                </li>

            </ul>

        </div>

    </div>

</div>

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

<style>

.login-page{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:30px;
}

.login-box{

    width:100%;
    max-width:520px;

    padding:40px;
}

.login-box h1{

    font-size:2.5rem;

    margin-bottom:10px;
}

.login-subtitle{

    margin-bottom:25px;

    color:
    rgba(255,255,255,.7);
}

.error-box{

    background:
    rgba(255,0,0,.1);

    border:
    1px solid rgba(255,0,0,.2);

    padding:14px;

    border-radius:16px;

    margin-bottom:20px;
}

.login-separator{

    height:1px;

    background:
    rgba(255,255,255,.1);

    margin:25px 0;
}

.alt-button{

    width:100%;

    display:flex;

    justify-content:center;

    background:
    rgba(255,255,255,.08);
}

.simple-link{

    display:block;

    margin-top:20px;

    text-align:center;

    color:
    rgba(255,255,255,.8);

    text-decoration:none;
}

.demo-users{

    margin-top:30px;

    padding-top:25px;

    border-top:
    1px solid rgba(255,255,255,.1);
}

.demo-users h3{

    margin-bottom:15px;
}

.demo-users ul{

    list-style:none;
}

.demo-users li{

    padding:5px 0;

    color:
    rgba(255,255,255,.7);
}

</style>

</body>

</html>
