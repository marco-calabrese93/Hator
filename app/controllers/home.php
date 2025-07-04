<?php 
class Home extends Controller {
    function index() {
        // This method will be called when the home page is accessed
       
       $data['page_title'] ="Home";
        $this->view("hator/index",$data);
    }

   
}