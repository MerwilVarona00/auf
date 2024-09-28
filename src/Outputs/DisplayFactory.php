<?php

namespace Borj\Auf\Outputs;

use Borj\Auf\Outputs\HTMLFormat;
use Borj\Auf\Outputs\PDFFormat;
use Borj\Auf\Outputs\TextFormat;

class DisplayFactory
{
    public static function getInstance($format = 'text')
    {
        if ($format == 'text') {
            return new TextFormat();
        } elseif ($format == 'html') {
            return new HTMLFormat();
        } elseif ($format == 'pdf') {
            return new PDFFormat();
        }
        
        // else
        return null;
    }
}