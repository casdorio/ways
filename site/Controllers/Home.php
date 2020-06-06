<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
                $data['title'] = 'Home - Ways Curbside dalivery';
                return $this->template->render("home", $data);
	}

	//--------------------------------------------------------------------

}
