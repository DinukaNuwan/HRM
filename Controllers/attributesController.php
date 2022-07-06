<?php

class attributesController extends Controller {
    function attributes() {
        require(ROOT . "Models/attributes.php");

        $model = new attributes();

        //$model->addCustomAttribute("a");
        //$model->deleteCustomAttribute("a");

        $model->getColumns();

        $this->render("attributes");
    }
}