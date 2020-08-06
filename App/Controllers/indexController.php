<?php
    
namespace App\Controllers;

//Use abstract class of all controllers
use MF\Controller\Action;

//The IndexController's actions
class IndexController extends Action{

    public function index(){
        $this->view->data = array('Sofa', 'Chair', 'Bed');
        $this->render('index', 'layout');
    }

    public function aboutus(){
        $this->view->data = array('Notebook', 'Microwave', 'Table');
        $this->render('aboutus', 'layout');
    }
    
}

?>