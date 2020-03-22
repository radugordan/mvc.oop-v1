<?php 
class Home extends Controller {
    public function __construct($action, $request){
        parent::__construct( $action, $request);
        $this->viewmodel = new HomeModel();
    }

    protected function Index(){
        $this->returnView($this->viewmodel->Index(), true);
    }
}