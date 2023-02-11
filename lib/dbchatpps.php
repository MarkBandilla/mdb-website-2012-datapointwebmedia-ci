<?php

class DBC
{                                        
                                           
    protected $_hostname = 'localhost';
    protected $_username = 'root';
    protected $_password = '';
    protected $_database = 'twwd';  
     
    /*  
    protected $_hostname = 'localhost';
    protected $_username = 'toprankg_auricx';
    protected $_password = '111111';
    protected $_database = 'toprankg_jchat';    
    */      
                      
    public function __construct()
    {
        mysql_connect($this->_hostname, $this->_username, $this->_password) or die ('Server connection failed');
        mysql_select_db($this->_database) or die ('Server connection failed');
    }
    
	public function viewAffid($u)
	 {
			$data = array();
			$result = mysql_query("SELECT * FROM twwd_users WHERE user_name='".$u."'");
			$rows   = mysql_fetch_array($result);                                 
			$data[] = $rows;
			return $data;
	 }    
	
}
    
    