<?php
require_once "OSTs.php";
require_once "Song.php";
class Seeder
{
    private array $DB;

    public function __construct()
    {
        $this->DB = array(
            new OSTs(0, "FirstOST", "Dark Souls", 2012, array(
                new Song(0, "Firedome", "Cyprian Mark", "0", "2:15"),
                new Song(1, "Chromesday", "Christian Wilder", "1", "3:24"),
                new Song(2, "Moralboarer", "Christian Cyprey", "2", "1:55"),
                new Song(3, "GigiMega", "Cyprian Chrissy", "3", "3:33")
            )),
            new OSTs(1, "SecondOST", "Dark Mouth", 2007, array(
                new Song(0, "Chromesday", "Christian Wilder", "1", "3:24"),
                new Song(1, "Firedome", "Cyprian Mark", "0", "2:15"),
                new Song(2, "GigiMega", "Cyprian Chrissy", "3", "3:33"),
                new Song(3, "Moralboarer", "Christian Cyprey", "2", "1:55")
            )),
            new OSTs(2, "ThirdOST", "Light Mouth", 2015, array(
                new Song(0, "Moralboarer", "Christian Cyprey", "2", "1:55"),
                new Song(1, "GigiMega", "Cyprian Chrissy", "3", "3:33"),
                new Song(2, "Chromesday", "Christian Wilder", "1", "3:24"),
                new Song(3, "Firedome", "Cyprian Mark", "0", "2:15")
            )));
    }

    public function getOSTs() {

        $args = func_get_args();

        if (count($args) > 0){

            foreach ($this->DB as $OST){
                if ($OST->getID() == $args[0]){
                    return $OST;
                }
            }
            return null;

        }else{
            return  $this->DB;
        }


    }
}