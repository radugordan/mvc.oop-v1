<?php 
class Home extends Controller {
    protected function Index(){
        $this->returnView($this->viewmodel->Index(), true);
    }
}