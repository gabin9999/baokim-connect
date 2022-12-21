<?php

namespace App;

use League\Flysystem\FilesystemInterface;
use League\Flysystem\PluginInterface;

class Connect implements PluginInterface
{
    private $length = 8;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function generate()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789[{(*%+-$#@!)}]";
        $pass = [];
        $alphaLength = strlen($alphabet) - 1;

        for ($i = 0; $i < $this->length; $i++)
        {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    public function getMethod()
    {
        // TODO: Implement getMethod() method.
    }

    public function setFilesystem(FilesystemInterface $filesystem)
    {
        // TODO: Implement setFilesystem() method.
    }
}