<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @author Charles Sewe
 * @copyright 2011
 */

class Extendedcontact_m extends MY_Model{
	
	//get the extended contact settings
	
	function get_contacts_settings()
	{
		$result=$this->db->get_where('extendedcontact',array('id'=>1));
		
		return $result->row();
	}
	
	//update settings
	
	function update_settings($subject,$emailto,$postalzip,$email,$tel,$mobile,$fax,$town_city,$street_address)
	{
		$data = array(
               'subject' => $subject,
               'emailto' => $emailto,
               'postal_zip' => $postalzip,
               'email'=>$email,
               'tel'=>$tel,
               'mobile'=>$mobile,
               'fax'=>$fax,
               'town_city'=>$town_city,
               'street_address'=>$street_address
            );

        $this->db->where('id', 1);
        return $result=$this->db->update('extendedcontact', $data);
	}
}


?>