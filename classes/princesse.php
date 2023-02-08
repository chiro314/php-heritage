<?php



// La classe dragon hérite de ma classe personnage

class princesse extends personnage {

    private $saved;

    public function __construct()
    {
        $this->saved = false;
        $this->x = 450;
        $this->y = 450;
    }
} 