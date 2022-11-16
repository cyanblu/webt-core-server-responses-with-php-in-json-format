<?php
require_once "OSTs.php";
class Seeder
{
    static function OSTsDatabank(){
        return array(
            new OSTs(0, "FirstOST")
        );
    }
}