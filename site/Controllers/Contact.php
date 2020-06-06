<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->model('common_model');
		$company = $this->common_model->getRow('companyInfo','*',array('status'=>1));
		//$emailto = "vaibhav.mindiii@gmail.com" ;
		$emailto = $company->email ;
                $data['title'] = 'Contact - Ways Curbside dalivery';
		$data['company'] = $company;
		
		$this->template->build('contact',$data);
	}//
	
	function sendmail(){
		$this->load->model('common_model');
		$data_val 		= $this->input->post();
		$name 		= trim($this->input->post('name'));
		$email 		= trim($this->input->post('email'));
		$subject 	= trim($this->input->post('subject'));
		$message 	= trim($this->input->post('message'));
		$copyEmail 	= trim($this->input->post('copyEmail'));
		$table="contact";
		$res=0;
		$company = $this->common_model->getRow('companyInfo','*',array('status'=>1));
		$emailto = "shivam09.mindiii@gmail.com" ;
		//$emailto = $company->email ;
		//$msg = array('status'=>'fail','message'=>"Something going wrong.");
		if(!empty($email)){
			$data_val['name'] 			= $name;
			$data_val['email'] 			= $email;
			$data_val['subject'] 		= $subject;
			$data_val['message'] 		= $message;
			$data_val['copyEmail'] 		=  (isset($copyEmail) && !empty($copyEmail)) ?1 :0;;
			$data_val['crd'] = date('Y-m-d h:i:s');
		$isResponce = $this->common_model->insertData($table,$data_val);
		if($isResponce ){
			$copyTo = (isset($copyEmail) && !empty($copyEmail)) ?1 :0;
				$this->load->model('email_model');
			//$subject = "Request for Login as Customer";
	
			$messageA	= "<div style='float:left!important;text-align=center!important;'><p>Hello Sir,</p><p>Subject 
			:".$subject."</p><p>".$message."</p><p><b>Thanks & 
			Regards</b></p><p>".$name."</p></div>";
	
			 $send =$this->email_model->mailSendContect($email,$emailto,$name,$subject,$messageA,$copyTo);
			
			 $res = (isset($send['emailType']) && ($send['emailType']=='ES')) ? 1 :2;
		
		}
		}
		echo $res;
	}//End FUnction
}//ENd FUnction
