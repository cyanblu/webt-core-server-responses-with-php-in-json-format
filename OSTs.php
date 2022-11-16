<?php

header('Content-Type: application/json; charset=utf-8');

class OSTs
{
    public string $name;
    public string $band;

    function __construct(string $name, string $band)
    {
        $this->name = $name;
        $this->band = $name;
    }
}

$soundtrack = new OSTs("Raining Blood", "Slayer");
echo json_encode($soundtrack);