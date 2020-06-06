<?php namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
                $data['title'] = 'Home - Ways Curbside dalivery';
                return $this->template->render("about", $data);
	}

	//--------------------------------------------------------------------

}