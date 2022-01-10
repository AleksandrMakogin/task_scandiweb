<?php

class Route
{
    static function start()
    {
        // controller and action by default
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // get the name of the controller
        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];

        }

       // get the name of the action
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }
        // add prefixes
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

//        echo "Model: $model_name <br>";
//        echo "Controller: $controller_name <br>";
//        echo "Action: $action_name <br>";



        //we pick up the file with the models class (the models file may not be there)
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;

        if(file_exists($model_path))
        {
            include "application/models/".$model_file;
        }

        // we hook up the file with the controller class
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            Route::ErrorPage404();

        }
        // create controller
        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            // invoke the controller action
            $controller->$action();
        }
        else
        {

            Route::ErrorPage404();
        }


    }

    static  function ErrorPage404()
    {

        $view =new  View();
        $view->generate('404_view.php', 'template_view1.php');


    }


}