<?php
    
namespace App\Controllers;

//Use abstract class of all controllers
use MF\Controller\Action;
//Container abstraction class
use MF\Model\Container;

//Use product class
use App\Models\Product;
//Use Info class
use App\Models\Info;

//The IndexController's actions
class IndexController extends Action{

    public function index(){

        $prod = Container::getModel('product');

        $products = $prod->getProducts();

        $this->view->data = $products;

        $this->render('index', 'layout');
    }

    public function aboutus(){

        $info = Container::getModel('info');

        $infos = $info->getInfo();

        $this->view->data = $infos;

        $this->render('aboutus', 'layout');
    }
    
}

?>