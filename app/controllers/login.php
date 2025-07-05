<?php 
class Login extends Controller {
    function index() {
        // This method will be called when the login page is accessed
       
       $data['page_title'] ="Login";
        $this->view("hator/login",$data);
    }

   
}