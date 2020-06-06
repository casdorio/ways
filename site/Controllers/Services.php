<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 *  Customer Manage
 * */

class Services extends CI_Controller {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function index() {

        $data['title'] = 'Services - Ways Curbside dalivery';
        $this->template->build('services', $data);
    }

//End Function 
}

//ENd FUnction
