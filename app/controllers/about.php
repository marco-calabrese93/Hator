<?php 
class About extends Controller {
    
    function index() {
        // This method will be called when the about page is accessed
        $this->view("about");
    }

}