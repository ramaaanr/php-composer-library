<?php

namespace ProgrammerZamanNow\Belajar;

class Costumer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "guest"): string
    {
        return "Hello $name, my name is $this->name";
    }
}