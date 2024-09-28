<?php

namespace Borj\Auf\Outputs;

class HTMLFormat implements FounderFormatter
{
    private $response;

    public function setData($founder)
    {
        
        $template = file_get_contents(__DIR__ . '/../../templates/index.html');
        $template = str_replace('{{ title }}', $founder->getTitle(), $template);
        $template = str_replace('{{ name }}', $founder->getName(), $template);
        
        
        $template = str_replace('{{ image }}', '/assets/img-founder.jpg', $template);
        $template = str_replace('{{ biography }}', implode('<p>', array_column($founder->getBiography(), 'paragraph')), $template);
        $template = str_replace('{{ year }}', date("Y"), $template);
        
        $this->response = $template;
    }

    public function render()
    {
        return $this->response;
    }
}
