<?php

namespace DesignPatterns\Creational\AbstractFactory;

class Text
{
    /**
     * @var string
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}