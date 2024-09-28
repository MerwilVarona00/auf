<?php

namespace Borj\Auf\Outputs;

interface FounderFormatter
{
    public function setData($founder);

    public function render();
}