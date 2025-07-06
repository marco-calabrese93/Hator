<?php 

class App {
    //controller di defalut
    private $controller = "home";
    //metodo di defalut
    private $method = "index";
    //parametri di defalut
    private $params = [];
   public function __construct() {
        // Initialize the application
        $url = $this->splitURL();
        if(file_exists("../app/controllers/".strtolower($url[0]).".php")){
            // If the controller file exists, set the controller
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }else{
            // If the controller file does not exist, show a 404 error
            
            require "../app/views/hator/404.php";
            die();
        }
        require "../app/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        if(isset($url[1])) {
            // If the method is specified, set it
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //runna la classe e il metodo
        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    private function splitURL() {
        // Split the URL into parts
        $url = isset($_GET['url']) ? $_GET['url'] :"home";
        return explode("/", filter_var(trim($url, "/"),FILTER_SANITIZE_URL));
        
    }
}