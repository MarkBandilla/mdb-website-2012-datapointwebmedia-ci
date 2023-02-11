<?php
class Outsourcing extends CI_Controller {              
                                                 
        function Home()
       {
            parent::__construct();
            // Your own constructor code
       }
             
        public function index()
    {
        ?>
        <h1>OUTSOURCING</h1>
        <?                              
         $this->load->helper('url');
        
        
         //this will load all the contents to the home/index.php 
         $data['page_title'] = "Datapoint - Website Design and Development.";   
         $data['header']     = $this->load->view('navigation' ,'', true); 
         $data['content']    = $this->load->view('home/index','', true); 
         $data['footer']     = $this->load->view('footer','', true);
         $this->load->view('main',$data);      
    }

                 

}
?>
