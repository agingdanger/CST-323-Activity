<?php

namespace App\Model;
class Verse
{
    // Declaring variables:
    private $verse;
    
    // Creating a parameterized constructor to handle registrations:
    public function __construct($verse)
    {
        $this->verse = $verse;
        
    }
    /**
     * @return mixed
     */
    public function getVerse()
    {
        return $this->verse;
    }

    /**
     * @param mixed $verse
     */
    public function setVerse($verse)
    {
        $this->verse = $verse;
    }

    

    
}