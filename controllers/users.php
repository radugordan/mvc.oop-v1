<?php 
class Users extends Controller{

    public function __construct($action, $request){
        parent::__construct( $action, $request);
        $this->viewmodel = new UserModel();
    }

    protected function register(){
        $this->returnView($this->viewmodel->register(), true);
    }

    protected function login(){
        $this->returnView($this->viewmodel->login(), true);
    }

    protected function logout(){
        $this->returnView($this->viewmodel->logout(), true);
    }
  
}