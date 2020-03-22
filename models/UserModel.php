<?php 
class UserModel extends Model{

    public function Index(){
        return;
    }
    public function register(){
    // sanitize string 
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $passsword = md5($post['password']);
        if ($post['submit']){
            if($post['name'] == '' || $post['email'] == '' || $post['password'] == '' ){
                Messages::setMessage("Please fill in all the fields", "error");
                return;
            }
            // insert to mysql
            $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $this->bind(':name' , $post['name']);
            $this->bind(':email' , $post['email']);
            $this->bind(':password' , $passsword);
            $this->execute();
            // verify
            if ($this->lastInsertId()){
            // redirect
            header('Location: '.ROOT_URL. 'users/login');
            }
        }
    }

    public function login(){
       // sanitize string 
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $passsword = md5($post['password']);
   
        if ($post['submit']){
            // insert to mysql
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email' , $post['email']);
            $this->bind(':password' , $passsword);
          
            $row = $this->single();

           if ($row){
              $_SESSION['isLogged'] = true;
              $_SESSION['user_data'] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
                  'email' => $row['email']
              );
              header('Location: '.ROOT_URL. 'shares');
           }else{
            Messages::setMessage("Please fill in all the fields", "error");
            return;
            }
        }
    }

    public function logout(){
        unset($_SESSION['isLogged']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('Location: '.ROOT_URL);
    }
}
