<?php

class configLeavesController extends Controller
{
    private $hr_annual, $sc_annual, $gm_annual, $hr_casual, $sc_casual, $gm_casual, $hr_no_pay, $sc_no_pay, $gm_no_pay,
            $hr_maternity, $sc_maternity, $gm_maternity, $hr_m_no_pay, $sc_m_no_pay, $gm_m_no_pay;
    private $errors = [];
    function configLeaves(){
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));


        // Authorization based on user role
        if ($user->getRole() == '1' || $user->getRole() == '2') {
            require(ROOT . "Models/ConfigLeaves.php");
            $data = $_POST;
            $this->secure_form($data);
            $model = new configLeavesModel();

            //getting the leave amounts
            $level_1 = $model->getLeaves("Level 1");
            $level_2 = $model->getLeaves("Level 2");
            $level_3 = $model->getLeaves("Level 3");

//            var_dump($level_3);
            if ($level_1 && $level_2 && $level_3){
                $this->set(array('level_1' => $level_1));
                $this->set(array('level_2' => $level_2));
                $this->set(array('level_3' => $level_3));
            }
//            var_dump($data);
            if (isset($data['submit'])){
                $msg1 = '';
                $msg2 = '';
                $msg3 = '';
                $this->hr_annual = $data['hr-annual'];
                $this->hr_casual = $data['hr-casual'];
                $this->hr_no_pay = $data['hr-no_pay'];
                $this->hr_maternity = $data['hr-maternity'];
                $this->hr_m_no_pay = $data['hr-m_no_pay'];

                $this->sc_annual = $data['sc-annual'];
                $this->sc_casual = $data['sc-casual'];
                $this->sc_no_pay = $data['sc-no_pay'];
                $this->sc_maternity = $data['sc-maternity'];
                $this->sc_m_no_pay = $data['sc-m_no_pay'];

                $this->gm_annual = $data['gm-annual'];
                $this->gm_casual = $data['gm-casual'];
                $this->gm_no_pay = $data['gm-no_pay'];
                $this->gm_maternity = $data['gm-maternity'];
                $this->gm_m_no_pay = $data['gm-m_no_pay'];

                /**validations
                 */
                if ($this->checkValidValues()) {
                    $this->errors[] = "Please enter only numbers.";
                }
                if ($this->checkFieldLengths()) {
                    $this->errors[] = "Please enter valid values.";
                }

                if ($this->errors) {
                    $this->set(array("error" => $this->errors));
                } else {
                    $msg1 = $model->editLeaves(
                        "Level 1",
                        $this->hr_annual,
                        $this->hr_casual,
                        $this->hr_no_pay,
                        $this->hr_maternity,
                        $this->hr_m_no_pay
                    );
                    $msg2 = $model->editLeaves(
                        "Level 2",
                        $this->sc_annual,
                        $this->sc_casual,
                        $this->sc_no_pay,
                        $this->sc_maternity,
                        $this->sc_m_no_pay
                    );
                    $msg3 = $model->editLeaves(
                        "Level 3",
                        $this->gm_annual,
                        $this->gm_casual,
                        $this->gm_no_pay,
                        $this->gm_maternity,
                        $this->gm_m_no_pay
                    );
                    echo "msg 1 : " . $msg1;
                    if ($msg1 != 1 || $msg2 != 1 || $msg3 !=1) {
                        $this->errors[] = $msg1;
                        $this->errors[] = $msg2;
                        $this->errors[] = $msg3;
                        $this->set(array("error" => $this->errors));
                    }
                }

                if ($msg1 == 1 && $msg2 == 1 && $msg3 == 1){
                    $this->set(array("success" => "Edited successfully!"));
                    header('Location: configLeaves');
                }

            }

            $this->render("configLeaves");
        }else{
            header('Location: unauthorized');
        }

    }


    // Valid username check
    private function checkValidValues()
    {
        return !(preg_match("/^[0-9]*$/", $this->hr_annual) && preg_match("/^[0-9]*$/", $this->hr_casual)
                && preg_match("/^[0-9]*$/", $this->hr_no_pay) && preg_match("/^[0-9]*$/", $this->hr_maternity)
                && preg_match("/^[0-9]*$/", $this->hr_m_no_pay) &&
                preg_match("/^[0-9]*$/", $this->sc_annual) && preg_match("/^[0-9]*$/", $this->sc_casual)
                && preg_match("/^[0-9]*$/", $this->sc_no_pay) && preg_match("/^[0-9]*$/", $this->sc_maternity)
                && preg_match("/^[0-9]*$/", $this->sc_m_no_pay) &&
                preg_match("/^[0-9]*$/", $this->gm_annual) && preg_match("/^[0-9]*$/", $this->gm_casual)
                && preg_match("/^[0-9]*$/", $this->gm_no_pay) && preg_match("/^[0-9]*$/", $this->gm_maternity)
                && preg_match("/^[0-9]*$/", $this->gm_m_no_pay));
    }
    //checking values
    private function checkFieldLengths()
    {;
        $valid_day = 365;
        return ($this->hr_annual > $valid_day || $this->hr_casual > $valid_day || $this->hr_no_pay > $valid_day ||
            $this->hr_maternity > $valid_day || $this->hr_m_no_pay > $valid_day ||
            $this->sc_annual > $valid_day || $this->sc_casual > $valid_day || $this->sc_no_pay > $valid_day ||
            $this->sc_maternity > $valid_day || $this->sc_m_no_pay > $valid_day ||
            $this->gm_annual > $valid_day || $this->gm_casual > $valid_day || $this->gm_no_pay > $valid_day ||
            $this->gm_maternity > $valid_day || $this->gm_m_no_pay > $valid_day );
    }
}