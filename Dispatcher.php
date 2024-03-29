<?php
class Dispatcher {
    private $request;

    public function dispatch() {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
       
        if (file_exists($file)) {
            require($file);
        } else {
            header("Location: error");
        }

        $controller = new $name();
        return $controller;
    }
}
