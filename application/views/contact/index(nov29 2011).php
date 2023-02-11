					<?php    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If API form is submitted   
                   					
					 $name = $_REQUEST['name'] ;
					 $messages = $_REQUEST['message'] ;
					 $contact = $_REQUEST['contact'] ;   
					 $email = $_REQUEST['email'] ;   
					                     
                     $to = "admin@datapoint.us"; 
					 $subject = "Contact Us"; 
					 $details = "name :".$_REQUEST['name']."\n email :".$_REQUEST['email']."\n contact :".$_REQUEST['contact']."\n\n\n".$_REQUEST['message'];    
					 $message = $details;    
					 $headers = "From: ".$_REQUEST['email']; 
					 $sent = mail($to, $subject, $message, $headers); 
                     
         //if($sent) {print "Your mail was sent successfully"; } else {print "We encountered an error sending your mail"; }
                    
                    
                    //
                    //        $cli_debug = new Client();
                    //        $debug_subscription_id = (empty($saleID)) ? "Denied" : $saleID;                            
                    //        $cli_debug->sendEmail($post_vars, "TWEENS - POSTBACK $debug_subscription_id - $affid");      
					
		 
                    
                    }         
                    ?>
                
        <div id="content">
    	
        	<div id="banner">
            	<div class="main">
                    <ul class="follow">
                        <li><a href="#"><img src="<?=site_url()?>img/banner-fb.png" /></a></li>
                        <li><a href="#"><img src="<?=site_url()?>img/banner-tw.png" /></a></li>
                    </ul>
                </div><!-- main -->
            </div><!-- banner -->
            
            <div class="main">
            	<div id="contact" class="contents">
                <h1></h1>
                	<form method="post" action="">
                    <ul>
                        <li>
                        	<h2>Contact Form</h2>
                            <p>Comments or Questions are Welcome</p>
                            <div class="leftlabel"><label>Your Name: </label></div>
                            	<div class="rightform"><input type="text" name="name" id="name"></div>
                            <div class="leftlabel"><label>Contact Number: </label></div>
                            	<div class="rightform"><input type="text" name="contact" id="name"></div>
                            <div class="leftlabel"><label>E-mail Address: </label></div>
                            	<div class="rightform"><input type="text" name="email" id="email"></div>
                            <div class="leftlabel"><label>Message: </label></div>
                            	<div class="rightform">
                                	<textarea name="message" id="message" rows="4"></textarea>
                                </div> 
                        </li>
                        <li>
                        	<div class="rightform"><input type="submit" class="btnsubmit"></div>
                        </li>
                    </ul>

                    </form>
                    
                    <div id="reference">
                    	<h2>Contact Details</h2>
                        <label>E-mail</label>
                        <ul>
                        	<li>contact@datapoint.us</li>
                        </ul>
                        <label>Support</label>
                        <ul>
                        	<li>support@datapoint.us</li>
                        </ul>
                        <label>Job Inquiries</label>
                        <ul>
                        	<li>jobs@datapoint.us</li>
                        </ul>
                        
                        <p>For service inquiries, please go to <b>GET A QUOTE</b> section.</p>
                    </div>
                    
                    <div class="clear"></div>
                    
                </div><!-- contents -->
            </div><!-- main -->
  
    </div><!-- content -->
    