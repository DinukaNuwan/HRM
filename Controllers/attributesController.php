<?php

class attributesController extends Controller {
    function attributes($params) {
        require(ROOT . "Models/attributes.php");

        $model = new attributes();

        //$model->addCustomAttribute("a");
        //$model->deleteCustomAttribute("a");

        print_r($params);
        //print_r($_GET);
        if (isset($params[1]["attrName"])) {
            $model->addCustomAttribute($params[1]["attrName"]);
        }


        $columns = $model->getColumns();
        $this->set(["columns" => $columns]);
        
        foreach ($columns as $column) {
            if (isset($_POST[$column])) {
                $model->deleteCustomAttribute($column);
                break;
            }
        }


        $this->render("attributes");
    }
}