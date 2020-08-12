<?php

namespace App\Models;
//Info class
class Info{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function getInfo(){
        $query = "select id, title, description from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}

?>