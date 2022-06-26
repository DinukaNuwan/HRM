<?php

class addUserController extends Controller
{
    private $emp_id, $username, $password, $role, $photo, $c_password;
    private $errors = [];
    function addUser()
    {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        // Authorization based on user role
        if ($user->getRole() == '4') {
            header('Location: unauthorized');
        } else {

            require(ROOT . "Models/AddUser.php");

            $model = new addUserModel();
            $data = $_POST;
            if (isset($data['submit'])) {
                $msg = "";
                $this->emp_id = $data['employee_id'];
                $this->username = $data['username'];
                $this->password = $data['password'];
                //            $this->password = password_hash($data['password'], PASSWORD_DEFAULT);
                $this->role = $data['role'];
                $this->photo = $data['photo'];
                $this->c_password = $data['c_password'];

                if ($this->checkFieldLengths()) {
                    $this->errors[] = "empty fields";
                }
                if ($this->checkValidUsername()) {
                    $this->errors[] = "enter a valid username";
                }
                if ($this->checkValidPassword()) {
                    $this->errors[] = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
                }
                if ($this->comparePasswords()) {
                    $this->errors[] = "passwords doesn't match";
                }
                $this->password = password_hash($data['password'], PASSWORD_DEFAULT);

                if ($this->errors) {
                    $this->set(array("error" => $this->errors));
                } else {
                    $msg = $model->addNewUser($this->emp_id, $this->username, $this->password, $this->role, $this->photo);
                    if ($msg != 1) {
                        $this->errors[] = $msg;
                        $this->set(array("error" => $this->errors));
                    }
                }
                //            $msg = $model->checkExists("user", "username", $this->username);
                var_dump($this->errors);
                if ($msg == 1) {
                    header('Location: dashboard');
                }
            }
            $this->render("AddUser");
        }
    }
    // Check for field lengths
    public function checkFieldLengths()
    {
        $field_lengths = array('username' => 45, 'password' => 255, 'role' => 11, 'emp_id' => 11);
        return (strlen($this->username) > 45 || strlen($this->password) > 255);
    }

    // Valid username check
    public function checkValidUsername()
    {
        return !preg_match("/^[a-zA-Z]*$/", $this->username);
    }

    //valid password
    public function checkValidPassword()
    {
        $number = preg_match('@[0-9]@', $this->password);
        $uppercase = preg_match('@[A-Z]@', $this->password);
        $lowercase = preg_match('@[a-z]@', $this->password);
        $specialChars = preg_match('@[^\w]@', $this->password);

        if (strlen($this->password) <  8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            return true;
        }
        return false;
    }
    // Compare 2 passwords
    public function comparePasswords()
    {
        return !($this->password == $this->c_password);
    }
}
