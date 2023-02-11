<?php
class Web_development extends CI_Controller {              
    
    public function index()
    {                           
         $this->load->helper('url');               
         //this will load all the contents to the home/index.php 
         $data['page_title'] = "Datapoint - Website Design and Development.";   
         $data['header']     = $this->load->view('header' ,'', true); 
         $data['content']    = $this->load->view('development/index','', true); 
         $data['footer']     = $this->load->view('footer','', true);
         $this->load->view('main',$data);      
    }
                                
                 

}
?>
