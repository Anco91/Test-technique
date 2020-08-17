<?php
require_once('../Modele/Question.php');
require_once('../Modele/Qcm.php');
require_once('../Modele/Bd.php');


$qst = isset($_POST['question']);


$question = new Question($qst);
$qcm = new Qcm();
$qcm->ajouterQuestion($question->getQuestion());
$bd = new Bd("test-tech");
header('Location: ../Vue/index.php');
