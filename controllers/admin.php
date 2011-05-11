<?php

/**
 * @author chaliblues 
 * @copyright 2011
 */
class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load language file
		$this->lang->load('ext_contact');
		
		$this->template->set_partial('shortcuts','admin/partials/shortcuts');
		
	}
	
	public function index()
	{
		$data['welcome']='welcome message';
		
		$this->template->build('admin/index_v',$data);
	}
}


?>