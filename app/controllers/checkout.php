<?php 
class Checkout extends Controller {
    
    function index() {
        // This method will be called when the about page is accessed
        $data['page_title'] ="Checkout";
        $this->view("hator/checkout",$data);
    }

}