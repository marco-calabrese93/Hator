<?php 
class logout extends Controller {
    function index() {
        // This method will be called when the home page is accessed
        $user = $this->loadModel("user");
        $user->logout();
    }
}
 