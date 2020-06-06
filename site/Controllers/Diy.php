<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 *  Customer Manage
 * */

class Diy extends CI_Controller {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function index() {

        $data['title'] = 'DIY - Ways Curbside dalivery';
        $this->template->build('diy', $data);
    }

//End Function 
}

//ENd FUnction
