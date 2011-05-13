<?php defined('BASEPATH') or exit('No direct scripts allowed');

/**
 * @author charles sewe
 * @copyright 2011
 */
class Module_ExtendedContact extends Module{
	
	public $version="1.0";

    public function info()
    {
	    return array(
		              'name'=>array('en'=>'Extended Contact'),
					  'description'=>array('en'=>'A simple contact module with extended functionality'),
					  'frontend'=>TRUE,
					  'backend'=>TRUE,
					  'menu'=>FALSE);
    }
    
    //Install function
    public function install()
    {
		$this->db->query("
 CREATE TABLE `extendedcontact` (
  `id` int(1) NOT NULL auto_increment,
  `subject` varchar(150) default NULL,
  `emailto` varchar(150) default NULL,
  `postal_zip` varchar(50) default NULL,
  `email` varchar(150) default NULL,
  `tel` varchar(100) default NULL,
  `mobile` varchar(100) default NULL,
  `fax` varchar(100) default NULL,
  `town_city` varchar(100) default NULL,
  `street_address` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


		");
$this->db->query("INSERT INTO `extendedcontact` (`id`, `subject`, `emailto`, `postal_zip`, `email`, `tel`, `mobile`, `fax`, `town_city`, `street_address`) VALUES
(1, 'email from mywebsite contact form', 'emailto@mywebsite.com', 'P.O. Box xxxx ', 'info@mywebsite.com', 'xxxxxx', 'xxxxxx', 'xxxxxx', 'example city', 'Please change this street address');");
		// It worked!
		return TRUE;
	}
	
	//Uninstall function
	public function uninstall()
	{
		$this->db->query("DROP TABLE extendedcontact");
		return TRUE;
	}
	
	public function upgrade($oldversion)
	{
		return TRUE;
	}
	
	public function help()
	{
		return "Emails are not being sent? Go to line 78 of extendedcontact.php file in the controller folder and remove the @ to show the error message that has been suppressed.<br/>
		Full help file is being worked on...
		";
	}
}



?>