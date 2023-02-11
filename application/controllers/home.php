<?php
class Home extends CI_Controller {              
                                                 
        function Home()
       {
            parent::__construct();
            // Your own constructor code
       }
             
         function index()
         {                               
         $this->load->helper('url');
        
        
         //this will load all the contents to the home/index.php 
         $data['page_title'] = "Datapoint - Website Design and Development.";   
         $data['header']     = $this->load->view('header' ,'', true); 
         $data['content']    = $this->load->view('home/index','', true); 
         $data['footer']     = $this->load->view('footer','', true);
         $this->load->view('main',$data);                                  
        
         }

                 

}
?>
