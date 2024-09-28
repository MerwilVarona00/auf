<?php

namespace Borj\Auf;

use Borj\Auf\FileUtility;
use Borj\Auf\Outputs\DisplayFactory;

class FounderHandler
{
    public static function display($request)
    {

        $json_file = $_ENV['FOUNDER_JSON_FILE'];


        $params = $request->params();
        // The default format it 'text'
        $format = 'text';
        if (isset($params['format'])) {
            $format = $params['format'];
        }


        $data = FileUtility::openJson($json_file);


        $founder = new Founder($data);


        $output = DisplayFactory::getInstance($format);
        $output->setData($founder);
        return $output->render();
    }
}