<?php 
class Error404 extends Controller {
    
    function index() {
        // This method will be called when the 404 page is accessed
        $data['page_title'] ="404 Not Found";
        $this->view("404",$data);
    }

}