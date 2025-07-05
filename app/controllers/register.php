<?php 
class Register extends Controller {
    function index() {
        // This method will be called when the register page is accessed
        $data['page_title'] = "Register";

        if(isset($_POST['email'])) {
            // If the form is submitted, process the login
            $user = $this->loadModel("user");
            $user->register($_POST);

        } elseif(isset($_POST['user_first_name']) && (isset($_POST['user_last_name']) && (!isset($_POST['email'])))) {
            // If the form is not submitted, just show the login page
            $user = $this->loadModel("user");
            $user->login($_POST);
        }
        
        $this->view("hator/register", $data);
    }
}
