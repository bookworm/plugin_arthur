<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

class plgSystemArthur extends JPlugin
{
	public function __construct($subject, $config = array())
	{
		parent::__construct($subject, $config);             
		
		define('ARTHUR', true);  
	}
}