<?php

namespace App\Models;

//Use abstract class for models
use MF\Model\Model;

//Info class
class Info extends Model{

    public function getInfo(){
        $query = "select id, title, description from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}

?>