<?php
require '../Controleur/creationQuestion.php';

$cpt = count($qcm->getQuestions());
$qsts = $qcm->getQuestions();
for ($i = 0; $i < $cpt; $i++) {
    echo '' . $qsts[$i];
}
