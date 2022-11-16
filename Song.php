<?php

class song implements JsonSerializable
{
    public string $id;
    public string $name;
    public string $artist;
    public string $tracknbr;
    public string $duration;

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