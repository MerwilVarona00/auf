<?php

namespace Borj\Auf;

class Founder
{
    private $title;
    private $image;
    private $name;
    private $biography;

    public function __construct($data = null)
    {
        // Map the data to the class properties
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['image'])) {
            $this->image = $data['image'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['biography'])) {
            $this->biography = $data['biography'];
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBiography()
    {
        return $this->biography;
    }
}