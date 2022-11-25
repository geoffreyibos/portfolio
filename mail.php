<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $mail = mail('g.ibos@laposte.net', $_POST['objet'], $_POST['message'], 'De: ' .$_POST['email']);
    if ($mail)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>