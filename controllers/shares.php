<?php 
class Shares extends Controller{
    protected function Index(){ 
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){ 
        if (!isset($_SESSION['isLogged'])){
            header("Location:".ROOT_URL);
        }
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);
    }
}
?>