<?php 
class ForgotPassword extends Controller {
    function index() {
        // This method will be called when the forgot password page is accessed

       $data['page_title'] ="Forgot Password";
        $this->view("hator/forgotpassword",$data);
    }

   
}