<?php

header('Content-Type: application/json; charset=utf-8');

class OSTs implements JsonSerializable
{
    public string $id;
    public string $name;
    public string $videoGameName;
    public string $releaseYear;
    public array $tracklist;

    function __construct(string $id, string $name, string $videoGameName, string $releaseYear, array $tracklist)
    {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->tracklist = $tracklist;
    }

    public function getID() : string {
        return $this->id;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.git
        return array(
            'id'=>$this->id,
            'name'=>$this->name,
            'videoGameName'=>$this->videoGameName,
            'releaseYear'=>$this->releaseYear,
            'tracklist'=>$this->tracklist
        );
    }
}

//$soundtrack = new OSTs("Raining Blood", "Slayer");
//echo json_encode($soundtrack);