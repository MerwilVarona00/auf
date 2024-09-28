<?php

namespace Borj\Auf\Outputs;

class TextFormat implements FounderFormatter
{
    private $response;

    public function setData($founder)
    {
       
        $output = "The Founder\n\n"; // Title
        $output .= $founder->getName() . "\n\n"; 
        $output .= "Biography\n\n"; 

        
        foreach ($founder->getBiography() as $paragraph) {
            $output .= $paragraph['paragraph'] . "\n\n"; 
        }

        
        $this->response = nl2br($output); 
    }

    public function render()
    {
        return $this->response;
    }
}
