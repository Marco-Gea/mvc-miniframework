<?php

namespace App\Models;

//Use abstract class for models
use MF\Model\Model;

//Product class
class Product extends Model{

    public function getProducts(){
        $query = "select id, description, price from tb_products";
        return $this->db->query($query)->fetchAll();
    }
}

?>