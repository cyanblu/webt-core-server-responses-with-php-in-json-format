<?php

class song implements JsonSerializable
{
    private string $id;
    private string $name;
    private string $tracknbr;
    private string $artist;
    private string $duration;

    function __construct(string $id, string $name, string $artist, string $tracknbr, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->tracknbr = $tracknbr;
        $this->duration = $duration;
    }

    public function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'tracknbr' => $this->tracknbr,
            'duration' => $this->duration
        );

    }
}