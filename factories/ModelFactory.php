<?php
class ModelFactory {

    public static function makeModel($controller)
    {
        switch ($controller){
            case 'users' :
                return new UserModel();
                break;
            case 'shares' :
                return new ShareModel();
                break;
            case 'Home' :
                return new HomeModel();
            default :
                echo 'Controller not defined';
                return;
        }
    }

}
