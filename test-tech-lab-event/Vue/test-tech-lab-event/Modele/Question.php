<?php

class Question
{
    private $id = 0;
    private $question;
    private $explication;
    private $reponses = array();


    public function __construct($question)
    {
        $this->question = $question;
        $this->id += 1;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function getReponse()
    {
        return $this->reponse;
    }



    function ajouterReponse($reponse)
    {
        array_push($this->reponses, $reponse);
    }

    function getExplication()
    {
        return $this->explication;
    }

    function setExplication($explication)
    {
        $this->$explication = $explication;
    }
}
