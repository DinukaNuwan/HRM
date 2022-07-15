<?php

class attributesController extends Controller {
    function attributes($params) {
        require(ROOT . "Models/attributes.php");

        $model = new attributes();

        $err = "";

        require(ROOT . "Classes/User.php");

        session_start();

        if (isset($_SESSION["user"])) {
            $user = unserialize($_SESSION["user"]);

            if (!($user->getRole() == 1 or $user->getRole() == 2)) {
                header("Location: unauthorized");
            }
        } else {
            header("Location: login");
        }

        //$model->addCustomAttribute("a");
        //$model->deleteCustomAttribute("a");

        //print_r($params);
        //print_r($_GET);
        if (isset($params[1]["attrName"])) {
            if (!$model->addCustomAttribute($params[1]["attrName"])) {
                $err = "addAttrFailed";
            }
        }

        $columns = $model->getColumns();
        $this->set(["columns" => $columns]);
        
        foreach ($columns as $column) {
            if (isset($_POST[$column])) {
                if (!$model->deleteCustomAttribute($column)) {
                    $err = "deleteAttrFailed";
                }
                break;
            }
        }

        $this->set(["err" => $err]);

        $this->render("attributes");
    }
}