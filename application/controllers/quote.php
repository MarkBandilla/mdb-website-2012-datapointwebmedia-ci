<?php
class Quote extends CI_Controller {              
                                                 
        function Home()
       {
            parent::__construct();
            // Your own constructor code
       }
             
        public function index()
    {                          
        $this->load->helper('url');             
        $this->load->library(array('email', 'form_validation'));
        $this->load->helper(array('email', 'form')); 
        
         $data['page_title'] 		= "Datapoint - Website Design and Development.";   
         $data['header']     		= $this->load->view('header' ,'', true); 
         $body['errors']	 		=""; 
         $body['web_development']	=""; 
         $body['service']	 		=""; 
         $body['projectdescrp']	 	=""; 
         $body['name']	 			=""; 
         $body['email']	 			=""; 
         $body['contact']	 		=""; 
         $body['company']	 		=""; 
         $data['content']    		= $this->load->view('quote/index',$body, true); 
         $data['footer']     		= $this->load->view('footer','', true);
         $this->load->view('main',$data);  
         
              
    }

                 

}
?>
