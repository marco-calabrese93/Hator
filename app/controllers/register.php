<?php 
class Register extends Controller {
    function index() {
        // This method will be called when the register page is accessed
        $data['page_title'] = "Register";
        $this->view("hator/register", $data);
    }
}
