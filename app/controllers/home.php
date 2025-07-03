<?php 
class Home extends Controller {
    function index() {
        // This method will be called when the home page is accessed
       
        $this->view("home");
    }

   
}