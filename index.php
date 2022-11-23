<?php

require_once "Seeder.php";

header('Content-Type: application/json; charset=utf-8');

class Soundtrack implements JsonSerializable{
    public string $name;
    public string $band;

    function __construct(string $name, string $band){
        $this->name = $name;
        $this->band = $band;
    }

    public function jsonSerialize(){
        return array(
            'name' => $this->name,
            'band' => $this->band,
            'keks' => 'ein keks'
        );
    }
}

$seeder = new Seeder();

if(!isset($_GET["id"])){
    echo json_encode($seeder->getOSTs());
}else{
    echo json_encode($seeder->getOSTs($_GET["id"]));
}

