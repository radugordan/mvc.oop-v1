<?php 
class Shares extends Controller {
    public function __construct($action, $request){
        parent::__construct( $action, $request);
        $this->viewmodel = new ShareModel();
    }

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