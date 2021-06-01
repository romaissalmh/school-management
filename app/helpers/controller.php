  
<?php
require_once(ROOT.'/helpers/url_redirect.php');
require_once(ROOT.'/helpers/session.php');

/*
     * Basic Controller that Loads the models and views
     */
class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Load view
    public function view($view) // en entrée nom view //nom fonction 
    {
    
        // gonna do a new View 
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
                return new $view();
               
            
        } else {
            /// View does not exists
            die('View does not exists');
        }
    }

    public function controller($controller) // en entrée nom controlleur //nom fonction 
    {
    
        
        if (file_exists('../app/controllers/' . $controller . '.php')) {
            require_once('../app/controllers/' . $controller . '.php');
                return new $controller();
               
            
        } else {
            die('Controller does not exists');
        }
    }
}



/*

public function view($view, $data = [])
    {
    
        // gonna do a new View 
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
            
        } else {
            /// View does not exists
            die('View does not exists');
        }
    }
*/

