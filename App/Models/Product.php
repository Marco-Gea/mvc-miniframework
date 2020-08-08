<?php

namespace App\Models;
//Product class
class Product{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function getProducts(){
        $query = "select id, description, price from tb_products";
        return $this->db->query($query)->fetchAll();
    }
}

?>