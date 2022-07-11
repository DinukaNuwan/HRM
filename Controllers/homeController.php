<?php

class homeController extends Controller {
    function home() {

        require(ROOT . "Classes/User.php");
        session_start();
        if (isset($_SESSION['user'])) {
            header('Location: dashboard');
        }

        require(ROOT . "Models/home.php");
        $model = new homeModel();

        $company = $model->loadCompanyDetails(1);
        $this->set(array('company_name' => $company['name']));
        $this->set(array('company_address' => $company['address']));

        $this->render("home");
    }
}