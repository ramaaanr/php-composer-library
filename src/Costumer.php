<?php

namespace ProgrammerZamanNow\Belajar;

class Costumer
{
    public function __construct(private string $name = "Guest")
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }
}