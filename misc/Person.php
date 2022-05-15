<?php
declare(strict_types=1);

class Person {
    public $db = null;

    function __construct($db) {
        $this->db = $db;
    }

    public function greeting(int $id) {
        $friend = $this->db->getPersonByID($id);
        $friendName = $friend->name;
        return "Hello $friendName";
    }
}
