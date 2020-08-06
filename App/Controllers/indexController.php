<?php
    
namespace App\Controllers;

//The IndexController's actions
class IndexController {

    private $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    public function index(){
        $this->view->data = array('Sofa', 'Chair', 'Bed');
        $this->render('index');
    }

    public function aboutus(){
        $this->view->data = array('Notebook', 'Microwave', 'Table');
        $this->render('aboutus');
    }

    public function render($view){
        $class = get_class($this);
        $class = str_replace('App\\Controllers\\', '', $class);
        $class = strtolower(str_replace('Controller', '', $class));
        require_once "../App/Views/".$class."/".$view.".phtml";
    }
}

?>