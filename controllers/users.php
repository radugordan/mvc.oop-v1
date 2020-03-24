<?php 
class Users extends Controller{
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