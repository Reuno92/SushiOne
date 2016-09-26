<?php session_start(); ?>
<?php
if (isset($_SESSION['admin']['log'])) {
    $messageAdmin = 'Vous êtes actuellement connecter en tant que ';
    $sessionAdmin = $_SESSION['admin']['log'];
}

else {
    /*header('location:http://kids.barbie.com/fr-fr/')*/;
    $messageAdmin = 'Vous êtes actuellement connecter en tant que ';
    $sessionAdmin = /*$_SESSION['admin']['log']*/ 'Renaud ';
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/font-awesome.css">
    <link  rel="stylesheet" href="asset/css/admin.css">
</head>
<body>
