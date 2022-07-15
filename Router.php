<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/HRM/")
        {
            $request->controller = "home";
            $request->action = "home";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);

            //$request->controller = $explode_url[0];
            
            //if (count($explode_url) == 1) {
                //$request->action = $explode_url[0];
                //$request->params = [];
            //} else {
            //$request->action = $explode_url[0];
            //$request->params = [];
            //$request->params = array_slice($explode_url, 1);

            if (count($explode_url) == 1) {
                $request->controller = explode("?", end($explode_url))[0];
                $request->action = explode("?", end($explode_url))[0];
                $parameters = array_slice($explode_url, 1, count($explode_url) - 2);
            } else {
                $request->controller = $explode_url[0];
                $request->action = $explode_url[0];
                //$prm = array_slice($explode_url, 1, count($explode_url) - 2);
                $parameters = array_merge(array(explode("?", end($explode_url))[0]), array_slice($explode_url, 1, count($explode_url) - 2));
            }

            $associativeParameters = array();

            //echo "a";

            foreach (array_slice(explode("?", end($explode_url)), 1) as $element) {
                $keyValue = explode("=", $element);
                $associativeParameters[$keyValue[0]] = $keyValue[1];
                //echo $element;
            }

            //foreach ($parameters as $parameter) {
                //echo "e";
                //cho $parameter;
            //}

            $request->params = [array($parameters, $associativeParameters)];
            //}
        }

    }
}
?>