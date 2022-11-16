<?php

header('Content-Type: application/json; charset=utf-8');

class OSTs implements JsonSerializable
{
    public string $id;
    public string $name;
    public string $videoGameName;

    function __construct(string $id, string $name, string $videoGameName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.git
        return array(
            'id'=>$this->id,
            'name'=>$this->name,
            'videoGameName'=>$this->videoGameName
        );
    }
}

//$soundtrack = new OSTs("Raining Blood", "Slayer");
//echo json_encode($soundtrack);