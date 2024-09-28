<?php

namespace Borj\Auf;

use Exception;

class FileUtility
{
    public static function openJson($json_file)
    {
        if (empty($json_file)) {
            throw new Exception('JSON file is required');
        }

        if (!file_exists($json_file)) {
            throw new Exception('Invalid file path');
        }

        // Read JSON file
        $json_data = file_get_contents($json_file);

        // Decode JSON to PHP array
        $data = json_decode($json_data, true);

        return $data;
    }
}