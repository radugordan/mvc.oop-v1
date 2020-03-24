<?php 
class Shares extends Controller {
    protected function Index(){
        $this->returnView( $this->viewmodel->Index(), true);
    }

    protected function add(){ 
        if (!isset($_SESSION['isLogged'])){
            header("Location:".ROOT_URL);
        }
        $this->returnView( $this->viewmodel->add(), true);
    }
}
?>