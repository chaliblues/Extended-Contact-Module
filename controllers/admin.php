<?php

/**
 * @author chaliblues 
 * @copyright 2011
 */
class Admin extends Admin_Controller
{
	
	/**
    *Settings Validation Rules
    */  	 	
    private $settings_validation_rules=
	array(
	
	 array(
			'field' => 'subject',
			'label' => 'lang:ext_contact.subject_label',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'email_to',
			'label' => 'lang:ext_contact.emailto_label',
			'rules' => 'trim|valid_email|required'
		),
		array(
			'field' => 'postal_zip',
			'label' => 'lang:ext_contact.postal_zip_label',
			'rules' => 'trim'
		),
		array(
			'field' => 'email',
			'label' => 'lang:ext_contact.email_label',
			'rules' => 'trim|valid_email'
		),
		array(
			'field' => 'tel',
			'label' => 'lang:ext_contact.tel_label',
			'rules' => 'trim'
		),
		array(
			'field' => 'mobile',
			'label' => 'lang:ext_contact.mobile_label',
			'rules' => 'trim'
		),
		array(
			'field' => 'fax',
			'label' => 'lang:ext_contact.fax_label',
			'rules' => 'trim'
		),
		array(
			'field' => 'town_city',
			'label' => 'lang:ext_contact.town_city_label',
			'rules' => 'trim'
		),
		array(
			'field' => 'street',
			'label' => 'lang:ext_contact.street_address_label',
			'rules' => 'trim'
		)
	
	);
	public function __construct()
	{
		parent::__construct();
		//load language file
		$this->lang->load('ext_contact');
		$this->load->library('form_validation');
		$this->template->set_partial('shortcuts','admin/partials/shortcuts');
		
	}
	
	//default action
	public function index()
	{
		$data['welcome']='welcome message';
		
		$this->template
		              ->append_metadata(css('extendedcontact.css','extendedcontact'))
		              ->build('admin/index_v',$data);
	}
	
	//settings submit function 
	public function settings_submit()
	{
		$this->form_validation->set_rules($this->settings_validation_rules);
		
		if($this->form_validation->run())
		{
			//everything is ok..get the variables
			$subject=$this->input->post('subject');
			$emailto=$this->input->post('email_to');
			
			$postalzip=$this->input->post('postal_zip');
			$email=$this->input->post('email');
			$tel=$this->input->post('tel');
			$mobile=$this->input->post('mobile');
			$fax=$this->input->post('fax');
			
			$town_city=$this->input->post('town_city');
			$street_address=$this->input->post('street');
			
			
		}
		
		$this->template
		              ->append_metadata(css('extendedcontact.css','extendedcontact'))
		              ->build('admin/index_v');
	}
}


?>