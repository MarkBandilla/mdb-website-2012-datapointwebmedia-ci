<?php    
			if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If API form is submitted   
							
			 $name = $_REQUEST['name'] ;
			 $messages = $_REQUEST['message'] ;
			 $contact = $_REQUEST['contact'] ;   
			 $email = $_REQUEST['email'] ;  
			 
			 
			if ($name == '') $errors[] = "Please enter your Name"; 
			if ($contact == '') $errors[] = "Please enter your Contact"; 
			if ($email == '') $errors[] = "Please enter your email"; 
			if ($messages == '') $errors[] = "Please enter your messages"; 
			

			if ($errors === "") {
					
						 $to = "admin@datapoint.us"; 
						 $subject = "Contact Us"; 
						 $details = "name :".$_REQUEST['name']."\n email :".$_REQUEST['email']."\n contact :".$_REQUEST['contact']."\n\n\n".$_REQUEST['message'];    
						 $message = $details;    
						 $headers = "From: ".$_REQUEST['email']; 
						 $sent = mail($to, $subject, $message, $headers); 
						//if($sent) {print "Your mail was sent successfully"; } else {print "We encountered an error sending your mail"; }
						//        $cli_debug = new Client();
						//        $debug_subscription_id = (empty($saleID)) ? "Denied" : $saleID;                            
						//        $cli_debug->sendEmail($post_vars, "TWEENS - POSTBACK $debug_subscription_id - $affid"); 
						
                $errors[] 			= "email send";
				$name 				= " " ;
				$contact 			= " " ;   
				$email 				= " " ;   
				$message			= " " ;  
						
			}
			
			}         
?>
                
        <div id="content">
    	
        	<div id="banner">
            	<div class="main">
                    <ul class="follow">
                        <li><a href=""><img src="<?=site_url()?>img/banner-fb.png" /></a></li>
                        <li><a href=""><img src="<?=site_url()?>img/banner-tw.png" /></a></li>
                    </ul>
                </div><!-- main -->
            </div><!-- banner -->
            
            <div class="main">
            	<div id="contact" class="contents">
                <h1></h1>
                	<form method="post" action="">
                    <ul>
                        <li>
                        <p style="color:#F00;">
<?php if (is_array($errors)): foreach ($errors as $error): ?>
<?php echo $error; ?><br />
<?php endforeach; endif; ?>
</p>
                        
                        
                        	<h2>Contact Form</h2>
                            <p>Comments or Questions are Welcome</p>
                            <div class="leftlabel"><label>Your Name: </label></div>
                            	<div class="rightform"><input type="text" name="name" id="name" value="<?=$name;?>" <?php if(is_array($errors)){if($name == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="Your Name" ></div>
                            <div class="leftlabel"><label>Contact Number: </label></div>
                            	<div class="rightform"><input type="text" name="contact" id="name" value="<?=$contact;?>" <?php if(is_array($errors)){if($contact == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="Contact Number" ></div>
                            <div class="leftlabel"><label>E-mail Address: </label></div>
                            	<div class="rightform"><input type="email" name="email" id="email" value="<?=$email;?>" <?php if(is_array($errors)){if($email == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="E-mail Address" ></div>
                            <div class="leftlabel"><label>Message: </label></div>
                            	<div class="rightform">
                                	<textarea name="message" id="message" rows="4" <?php if(is_array($errors)){if($messages == ''){?>style="border:1px solid #F00;"<?php }}?>  required  placeholder="message" ><?=$message;?></textarea>
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
    