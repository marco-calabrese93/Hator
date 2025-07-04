<?php 
class Contact extends Controller {
    
    function index() {
        // This method will be called when the about page is accessed
        $data['page_title'] ="Contact Us";
        $this->view("hator/contact",$data);
    }

}