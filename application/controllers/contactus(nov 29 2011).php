<?php
class Contactus extends CI_Controller {              
                                                 
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
        
//       if($this->form_validation->run() == FALSE)
//          {      
          //echo "this form submit";      
         //this will load all the contents to the home/index.php 
         $data['page_title'] = "Datapoint - Website Design and Development.";   
         $data['header']     = $this->load->view('header' ,'', true); 
         $data['content']    = $this->load->view('contact/index','', true); 
         $data['footer']     = $this->load->view('footer','', true);
         $this->load->view('main',$data);  
         
//           }
//        else
//            {
//                
               // echo "else form validation";
//        $name = $this->input->post('name');
//        $email = $this->input->post('email');
//        $subject = $this->input->post('subject');
//        $message = $this->input->post('message');
//        $this->email->from($_REQUEST['name'], $_REQUEST['email']);
//        $this->email->to('admin@datapoint.us');
//        $this->email->subject("CONTACT US");
//        $this->email->message($_REQUEST['name']."\n".$_REQUEST['email']."\n\n\n".$_REQUEST['message']);
//        $this->email->send();                   
//       
//        $data['msg']        = "Your Message Was Sent";               
//        $sent['page_title'] = "Datapoint - Website Design and Development.";   
//        $sent['header']     = $this->load->view('header' ,'', true); 
//        $sent['content']    = $this->load->view('contact/index','', true); 
//        $sent['footer']     = $this->load->view('footer','', true);        
//        
//        $this->load->view('main', $sent);
//        
//           }
                                
         
              
    }

                 

}
?>
