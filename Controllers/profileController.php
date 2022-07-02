<?php

class profileController extends Controller {
    private $errors = [];
    private $first_name, $last_name, $email, $mobile, $address, $emg_name, $emg_mobile, $emg_relationship;
    function profile($params) {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        require(ROOT . "Models/Profile.php");
        $model = new profileModel();

        if(isset($params[0][0]) && $params[0][0] != '')
            $id = $params[0][0];
        else
            $id = $user->getEmpId();
        $this->set(array('id' => $id));

        if (isset($_POST['submit'])) {
            $msg = '';
            $this->first_name = $_POST['first_name'];
            $this->last_name = $_POST['last_name'];
            $this->email = $_POST['email'];
            $this->mobile = $_POST['mobile_no'];
            $this->address = $_POST['address'];
            $dob = $_POST['birthday'];
            $maritalStatus = $_POST['marital_status'];
            $jobTitle = $_POST['job_title'];
            $payGrade = $_POST['pay_grade'];
            $empStatus = $_POST['emp_status'];
            $department = $_POST['department'];
            $this->emg_name = $_POST['emergency_name'];
            $this->emg_mobile = $_POST['emergency_mobile_no'];
            $this->emg_relationship = $_POST['relationship'];

            // var_dump($_POST);

            if ($this->checkFieldLengths()) {
                $this->errors[] = "Entered details are too long. Please try again";
            }
            if ($this->checkValidUsername()) {
                $this->errors[] = "Enter valid names.";
            }
            if ($this->checkValidEmail()) {
                $this->errors[] = "Check your email address and try again.";
            }
            if ($this->checkFieldLengths()) {
                $this->errors[] = "Entered details are too long";
            }
            if ($this->validateMobileNo()) {
                $this->errors[] = "Enter a valid mobile No.";
            }
            if ($this->errors) {
                $this->set(array("error" => $this->errors));
            } else {
                $msg = $model->updateProfile(
                    $id,
                    $this->first_name,
                    $this->last_name,
                    $this->email,
                    $this->mobile,
                    $this->address,
                    $dob,
                    $maritalStatus,
                    $jobTitle,
                    $payGrade,
                    $empStatus,
                    $department,
                    $this->emg_name,
                    $this->emg_mobile,
                    $this->emg_relationship
                );
                if ($msg != 1) {
                    $this->errors[] = $msg;
                    $this->set(array("error" => $this->errors));
                }
            }
        }

        $profile_details = $model->getProfile($id); //(returns array of details of given emp_id)
        // $profile_details = 0; //(returns array of details of given emp_id)

        if ($profile_details){
            $this->set(array('profile_details' => $profile_details));
            // var_dump($profile_details);
        }

        $this->render("Profile");
    }

    private function checkFieldLengths() {
        $field_lengths = array('first_name' => 45, 'last_name' => 45, 'address' => 255, 'mobile' => 10, 'emg_name' => 100, 'emg_mobile' => 10, 'emg_relationship' => 45);
        return (strlen($this->first_name) > 45 || strlen($this->last_name) > 45 || strlen($this->address) > 255 ||
            strlen($this->mobile) > 10 || strlen($this->emg_name) > 100 || strlen($this->emg_mobile) > 10 || strlen($this->emg_relationship) > 45);
    }

    // Valid username check
    private function checkValidUsername() {
        return !(preg_match("/^[a-zA-Z ]*$/", $this->first_name) && preg_match("/^[a-zA-Z ]*$/", $this->last_name) && preg_match("/^[a-zA-Z ]*$/", $this->emg_name));
    }

    // Valid email check
    public function checkValidEmail() {
        return !filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    // Validate mobile number
    public function validateMobileNo() {
        $MobileNo = $this->mobile;
        $emgMobileNo = $this->emg_mobile;
        $not_numbers = true;
        if (preg_match("/^[0-9]*$/", $MobileNo) && preg_match("/^[0-9]*$/", $emgMobileNo))
            $not_numbers = false;
        return (strlen($MobileNo) != 10 || strlen($emgMobileNo) != 10 || substr($MobileNo, 0, 1) != '0' || substr($emgMobileNo, 0, 1) != '0' || $not_numbers);
    }
}

?>