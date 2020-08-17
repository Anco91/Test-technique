<?php

class Qcm
{

    private $id;
    private $questions = array();
    private $appreciations = array();


    function getQuestions()
    {
        return $this->questions;
    }
    function ajouterQuestion($question)
    {
        array_push($this->questions, $question);
    }

    function setAppreciation($appreciation)
    {
        $this->appreciations = $appreciation;
    }

    function generer()
    {
        return $this->questions;
    }
}
