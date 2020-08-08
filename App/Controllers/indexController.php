<?php
    
namespace App\Controllers;

//Use abstract class of all controllers
use MF\Controller\Action;
//Use database's connection class
use App\Connection;
//Use product class
use App\Models\Product;

//The IndexController's actions
class IndexController extends Action{

    public function index(){
        
        $conn = Connection::getDb();

        $prod = new Product($conn);

        $products = $prod->getProducts();

        $this->view->data = $products;

        $this->render('index', 'layout');
    }

    public function aboutus(){
        //$this->view->data = array('Notebook', 'Microwave', 'Table');
        $this->render('aboutus', 'layout');
    }
    
}

?>