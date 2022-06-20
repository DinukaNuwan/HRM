<?php

class loginController extends Controller
{
    private $username;
    private $password;
    private $errors = [];
    function login()
    {
        require(ROOT . "Models/Login.php");
        require(ROOT . "Classes/User.php");

        $data = $_POST;
      
        $model = new loginModel();
        $this->secure_form($data);

        if (isset($data['submit'])) {
            $this->username = $data['username'];
            $this->password = $data['password'];
          
            if ($this->checkEmptyFields()){
                $this->errors [] = "empty_fields";
            }
            if ($this->checkFieldLength()){
                $this->errors [] = "field_length_exceeded";
            }

            $msg = $model->authenticateUser($this->username, $this->password);
            if ($msg == "Incorrect Username" || $msg == "Incorrect Password") {
                $this->set(array("error" => $msg));
            } else {
                $user = $msg;
                session_start();
                $_SESSION['user'] = serialize($user);
                header('Location: dashboard');
            }
        }
    }
    private function checkEmptyFields(){
        return empty($this->username) or empty($this->password);
    }
    private function checkFieldLength(){
        $field_lengths = array('username' => 45, 'password' => 255);
        return (strlen($this->username) > 45 || strlen($this->password) > 255);
    }
}
