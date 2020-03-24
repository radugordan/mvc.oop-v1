<?php 
abstract class Controller{
    protected $request;
    protected $action;
    protected $viewmodel;

    public function __construct($viewmodel, $action, $request){
        $this->action = $action;
        $this->request = $request;
        $this->viewmodel = $viewmodel;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview){
        $view = 'views/'.get_class($this).'/'.$this->action.'.php';
        if ($fullview){
            require('views/main.php');
        } else {
            require($view);
        }
    }
}