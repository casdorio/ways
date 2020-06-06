<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    /*
     *  Product manage  CAtegory wise
     * */

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('common_model');
    }

    public function index() {
        $data['products'] = $this->products_menu->productMenu();
        $data['productsAll'] = $this->products_menu->productMenuAll();
        $data['title'] = 'Products - Ways Curbside dalivery';
        $this->template->build('products', $data);
    }

    public function p($product = null) {
        $data['products'] = $this->products_menu->productMenu();
        $data['productsAll'] = $this->products_menu->productMenuAll();
        $data['title'] = $product . ' - Products - Ways Curbside dalivery';
        $this->template->build('products', $data);
    }

}

//End Class
