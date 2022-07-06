<?php

class profileController extends Controller {
    private $errors = [];
    private $no_errors = true;
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

            $yesterday = date('Y-m-d', strtotime("-1 days"));

            // var_dump($_POST);

            //first name validate
            if (empty($this->first_name)) {
                $this->set(array("first_name_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->checkFieldLengths($this->first_name, 45)) {
                $this->set(array("first_name_err" => "First name cannot exceed 45 characters"));
                $this->no_errors = false;
            }

            //last name validate
            if (empty($this->last_name)) {
                $this->set(array("last_name_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->checkFieldLengths($this->last_name, 45)) {
                $this->set(array("last_name_err" => "Last name cannot exceed 45 characters"));
                $this->no_errors = false;
            }

            //validate email
            if (empty($this->email)) {
                $this->set(array("email_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->checkValidEmail()) {
                $this->set(array("email_err" => "Not a valid email"));
                $this->no_errors = false;
            }

            //validate mobile no
            if (empty($this->mobile)) {
                $this->set(array("mobile_no_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->validateMobileNo($this->mobile)) {
                $this->set(array("mobile_no_err" => "Not a valid mobile number"));
                $this->no_errors = false;
            }

            //validate address
            if (empty($this->address)) {
                $this->set(array("address_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->checkFieldLengths($this->address, 255)) {
                $this->set(array("address_err" => "Address cannot exceed 255 characters"));
                $this->no_errors = false;
            }

            //validate birthday
            if (empty($dob)) {
                $this->set(array("birthday_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($dob > $yesterday) {
                $this->set(array("birthday_err" => "Mast be a past date"));
                $this->no_errors = false;
            }

            //validate validate marital status
            if (empty($maritalStatus)) {
                $this->set(array("marital_status_err" => "Cannot be empty"));
                $this->no_errors = false;
            }

            //validate validate job_title
            if (empty($jobTitle)) {
                $this->set(array("job_title_err" => "Cannot be empty"));
                $this->no_errors = false;
            }

            //validate pay_grade
            if (empty($payGrade)) {
                $this->set(array("pay_grade_err" => "Cannot be empty"));
                $this->no_errors = false;
            }

            //validate emp_status
            if (empty($empStatus)) {
                $this->set(array("emp_status_err" => "Cannot be empty"));
                $this->no_errors = false;
            }

            //validate department
            if (empty($department)) {
                $this->set(array("department_err" => "Cannot be empty"));
                $this->no_errors = false;
            }

            //validate emergency_name
            if (empty($this->emg_name)) {
                $this->set(array("emergency_name_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->checkFieldLengths($this->emg_name, 100)) {
                $this->set(array("emergency_name_err" => "Contact person's name cannot exceed 100 characters"));
                $this->no_errors = false;
            }

            //validate emergency_mobile_no
            if (empty($this->emg_mobile)) {
                $this->set(array("emergency_mobile_no_err" => "Cannot be empty"));
                $this->no_errors = false;
            } else if ($this->validateMobileNo($this->emg_mobile)) {
                $this->set(array("emergency_mobile_no_err" => "Not a valid mobile number"));
                $this->no_errors = false;
            }

            //validate relationship
            if (empty($this->emg_relationship)) {
                $this->set(array("relationship_err" => "Cannot be empty"));
                $this->no_errors = false;
            }

            if ($this->no_errors) {
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

            if ($msg == 1) {
                $this->set(array("success" => "Profile updated successfully!"));
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

    private function checkFieldLengths($field, $length)
    {
        // $field_lengths = array('first_name' => 45, 'last_name' => 45, 'address' => 255, 'mobile' => 10, 'emg_name' => 100, 'emg_mobile' => 10, 'emg_relationship' => 45);
        return (strlen($field) > $length);
    }

    public function checkValidEmail()
    {
        return !filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    // Validate mobile number
    public function validateMobileNo($mobile_no)
    {
        $not_numbers = true;
        if (preg_match("/^[0-9]*$/", $mobile_no))
            $not_numbers = false;

        return (strlen($mobile_no) != 10 || substr($mobile_no, 0, 1) != '0' || $not_numbers);
    }
}

?>