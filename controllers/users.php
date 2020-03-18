<?php 
class Users extends Controller{
    protected function register(){
        $viewmodel = new Usermodel();
        $this->returnView($viewmodel->register(), true);
    }

    protected function login(){
        $viewmodel = new Usermodel();
        $this->returnView($viewmodel->login(), true);
    }

    protected function logout(){
        $viewmodel = new Usermodel();
        $this->returnView($viewmodel->logout(), true);
    }
  
}