<html lang="fr">


<head>
    <meta HTTP-EQUIV="Content-Type" content="text/html; charset=UTF-8">
    <title>QCM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
</head>

<body>

    <h1> Créez ton QCM ! </h1>

    <form action="../Controleur/creationQuestion.php" method="post">

        <input type="text" name="question" placeholder="Ajoutez une question" />
        <input type="submit">
    </form>

    <?php

    $cpt = count($qcm->getQuestions());
    $qsts = $qcm->getQuestions();
    for ($i = 0; $i < $cpt; $i++) {
        echo '' . $qsts[$i];
    }

    ?>



</html>