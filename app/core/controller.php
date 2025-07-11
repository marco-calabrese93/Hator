<?php

 class Controller {
    protected function view($view,$data = []){
      extract($data);
        // This method will be called when a specific view is accessed
        // For example, if the URL is /home/view/about, this method will be called with 'about' as the parameter
         if(file_exists("../app/views/" . $view . ".php")){
           include "../app/views/" . $view . ".php";
         }else{
            // If the view does not exist, load the 404 view
               //include "../app/views/hator/404.php";
               require_once "../app/controllers/error404.php";
               $controller = new Error404();
               $controller->index();
         }

    }
  

   //funzione load model
    protected function loadModel($model){
        // This method will be used to load a model
        // This method will be called when a specific model is accessed
        // For example, if the URL is /home/model/user, this method will be called with 'user' as the parameter
         if(file_exists("../app/models/" . $model . ".php")){
           include "../app/models/" . $model . ".php";
           return $model = new $model();
        }

        return false;
    }


 }