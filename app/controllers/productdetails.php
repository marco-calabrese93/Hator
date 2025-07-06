<?php 
class ProductDetails extends Controller {

    function index() {
        // This method will be called when the about page is accessed
        $data['page_title'] ="Product Details";
        $this->view("hator/productdetails",$data);
    }
}
