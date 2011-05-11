<?php if(!defined('BASEPATH')) exit('No direct scripts allowed');

/**
 * @author Charles Sewe
 * @copyright 2011
 */

class ExtendedContact extends Public_Controller{
	
	/**
    *@array validation rules for submitting contact data
    *  
    */ 	 	
    private $contact_validation_rules=array(
	    array(
			'field' => 'name',
			'label' => 'lang:ext_contact.name_label',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'email',
			'label' => 'lang:ext_contact.email_label',
			'rules' => 'trim|required|valid_email'
		),
		array(
			'field' => 'phone',
			'label' => 'lang:ext_contact.phone_label',
			'rules' => 'trim'
		),
		array(
			'field' => 'text',
			'label' => 'lang:ext_contact.message_label',
			'rules' => 'trim|required'
		)
	);
    
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->lang->load('ext_contact');
	}
	
	//Default function that loads the contact form
	public function index()
	{
		$data['message']='Form goes here';
		
		//load the form template
		$this->template->build('form_v',$data);
	}
	
	//Function to handle submit
	public function sendc()
	{
		$this->form_validation->set_rules($this->contact_validation_rules);
		
		if($this->form_validation->run())
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$message=$this->input->post('message');
			
			$this->load->library('email');

            $this->email->from($email, $name);
            $this->email->to('someone@example.com'); 
            
            $this->email->subject('Communication from website');
            $this->email->message('Testing the email class.');	

            $this->email->send();

		}
		
		// Set the values for the form inputs
		foreach ($this->contact_validation_rules as $rule)
		{
			$form_values->{$rule['field']} = set_value($rule['field']);
		}
	
		$this->template
		->append_metadata( css('extendedcontact.css', 'extendedcontact') )
		->build('form_v',$form_values);
	}
}

?>