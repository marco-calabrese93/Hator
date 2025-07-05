<?php 
class Shop extends Controller {
    function index() {
        // This method will be called when the shop page is accessed
        $data['page_title'] = "Shop";
        $this->view("hator/shop", $data);
    }
}
