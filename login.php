<?php

session_start();

$users = [
    "admin" => "admin123",
    "edrys" => "edrys123",
    "demo"  => "demo123"
];

$error = "";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if(
        isset($users[$username]) &&
        $users[$username] === $password
    ){
        $_SESSION["user"] = $username;

        header("Location: admin.php");
        exit;
    }

    $error = "Identifiants incorrects";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Connexion</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">

    <div class="login-box glass">

        <h1>Connexion</h1>

        <?php if($error): ?>
            <div class="error">
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

            <button type="submit">
                Se connecter
            </button>

        </form>

    </div>

</div>

</body>
</html>
