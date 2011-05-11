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
		return TRUE;
	}
	
	//Uninstall function
	public function uninstall()
	{
		return TRUE;
	}
	
	public function upgrade($oldversion)
	{
		return TRUE;
	}
	
	public function help()
	{
		return "Help content is being worked on..";
	}
}



?>