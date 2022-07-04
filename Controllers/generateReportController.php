<?php

class generateReportController extends Controller {
    function generateReport() {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        if (isset($_POST['submit'])) {
            var_dump($_POST);
            if (isset($_POST['leave']) && $_POST['leave'] == 'yes') {
                $_SESSION['department'] = $_POST['department'];
                $_SESSION['from_date'] = $_POST['from_date'];
                $_SESSION['to_date'] = $_POST['to_date'];
                header('Location: totalleaves');
            }
            else if (isset($_POST['employee']) && $_POST['employee'] == 'yes') {
                $_SESSION['department'] = $_POST['department'];
            }
        }
        
        $this->render("GenerateReport");
    }
}
