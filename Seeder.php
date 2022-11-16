<?php
require_once "OSTs.php";
class Seeder
{
    static function OSTsDatabank(){
        return array(
            new OSTs(0, "FirstOST", "Dark Souls", 2012, array(
                new Song(0, "Firedome", "Cyprian Mark", "0", "2:15"),
                new Song(1, "Chromesday", "Christian Wilder", "1", "3:24"),
                new Song(2, "Moralboarer", "Christian Cyprey", "2", "1:55"),
                new Song(3, "GigiMega", "Cyprian Chrissy", "3", "3:33")
            )),
            new OSTs("1", "SecondOST", "Dark Mouth", 2007, array(
                new Song(1, "Chromesday", "Christian Wilder", "1", "3:24"),
                new Song(0, "Firedome", "Cyprian Mark", "0", "2:15"),
                new Song(3, "GigiMega", "Cyprian Chrissy", "3", "3:33"),
                new Song(2, "Moralboarer", "Christian Cyprey", "2", "1:55")
            )),
            new OSTs("2", "ThirdOST", "Light Mouth", 2015, array(
                new Song(2, "Moralboarer", "Christian Cyprey", "2", "1:55"),
                new Song(3, "GigiMega", "Cyprian Chrissy", "3", "3:33"),
                new Song(1, "Chromesday", "Christian Wilder", "1", "3:24"),
                new Song(0, "Firedome", "Cyprian Mark", "0", "2:15")
            )),
        );
    }
}