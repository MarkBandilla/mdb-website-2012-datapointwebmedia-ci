<?php    
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If API form is submitted   
				
				$name = $_REQUEST['name'] ;
				$contact = $_REQUEST['contact'] ;   
				$email = $_REQUEST['email'] ;   
				$service = $_REQUEST['service'] ;
				$web_development = $_REQUEST['web_development'] ;
				$company = $_REQUEST['company'] ;
				$projectdescrp = $_REQUEST['projectdescrp'] ;
				

        if ($name == '') $errors[] = "Please enter your Name"; 
        if ($contact == '') $errors[] = "Please enter your Contact"; 
        if ($email == '') $errors[] = "Please enter your email"; 
        if ($service == '') $errors[] = "Please enter your service"; 
        if ($web_development == '') $errors[] = "Please enter your Web Development"; 
        if ($company == '') $errors[] = "Please enter your Company"; 
        if ($projectdescrp == '') $errors[] = "Please enter your Project Description"; 
		
		 switch ($service) { 			 
                               
                            case 1:                     
                                $service = 'Web Development'; 
                                break; 
								
                            case 2:                     
                                $service = 'Software Development'; 
                                break; 
								
                            case 3:                     
                                $service = 'Business Outsourcing'; 
                                break;   
                                
                            default:              
                                 $service = $service;   
                 }
				 
				 
				 
				 switch ($web_development) { 	
				                                
                            case 1:                     
                                $web_development = 'Web FREE'; 
                                break; 
								
                            case 2:                     
                                $web_development = 'Web Pro'; 
                                break; 
								
                            case 3:                     
                                $web_development = 'Web Premium'; 
                                break;  
								
                            case 4:                     
                                $web_development = 'PSD to XHTML'; 
                                break;  
								
                            case 5:                     
                                $web_development = 'Web Design'; 
                                break;  
								
                            case 6:                     
                                $web_development = 'Web re-Design'; 
                                break;   
                                
                            default:              
                                $web_development = $web_development;   
                 }
				 							
		
if ($errors === "") {
	
	
				 
				$to = "admin@datapoint.us"; 
				$subject = "Quotes"; 
				$details = "\n"."Name :".$_REQUEST['name'].
						   "\n"."Contact :".$_REQUEST['contact'].
						   "\n"."email :".$_REQUEST['email'].
						   "\n"."Service :".$service.
						   "\n"."Project Description :".$web_development.
						   "\n\n"."Project Description :\n".$_REQUEST['projectdescrp'].
						   "\n\n"."Company :".$company;
						   
				$message = $details;    
				$headers = "From: ".$_REQUEST['email']; 
				$sent = mail($to, $subject, $message, $headers); 
				
                $errors[] 			= "email send";
				$name 				= "" ;
				$contact 			= "" ;   
				$email 				= "" ;   
				$service 			= "" ;
				$web_development	= "" ;
				$company 			= "" ;
				$projectdescrp 		= "" ;
				
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
            	<div id="quote" class="contents">
                <h1></h1>
                	<form  method="post" action="">
                    <ul>
                        <li>
<p style="color:#F00;">
<?php if (is_array($errors)): foreach ($errors as $error): ?>
<?php echo $error; ?><br />
<?php endforeach; endif; ?>
</p>
                            <h2>Project Information</h2>
                            <div class="leftlabel"><label>Select Service: *</label></div>
                                <div class="rightform">
                                	<select name="service" <?php if(is_array($errors)){if($service == ''){?>style="border:1px solid #F00;"<?php }}?> >
                                    <option value="<?=$service;?>"><?=$service;?></option>
                                    <option value="1">Web Development</option>
                                    <option value="2">Software Development</option>
                                    <option value="3">Business Outsourcing</option>
                                    </select>
                                </div>
                            <div class="leftlabel"><label>Select Project: *</label></div>
                            	<div class="rightform">
                                	<select name="web_development"  <?php if(is_array($errors)){if($web_development == ''){?>style="border:1px solid #F00;"<?php }}?> >
                                    <option value="<?=$web_development;?>"><?=$web_development;?></option>
                                    <option value="1">Web FREE</option>
                                    <option value="2">Web Pro</option>
                                    <option value="3">Web Premium</option>
                                    <option value="4">PSD to XHTML</option>
                                    <option value="5">Web Design</option>
                                    <option value="6">Web re-Design</option>
                                    </select>
                                </div>
                            <div class="leftlabel"><label>Project Description: *</label></div>
                            	<div class="rightform">
                                	<textarea name="projectdescrp" rows="4"  <?php if(is_array($errors)){if($projectdescrp == ''){?>style="border:1px solid #F00;"<?php }}?>  required placeholder="Description"><?=$projectdescrp;?></textarea>
                                </div>        
                        </li>
                        <div class="clear"></div>
                        <li>
                        	<h2>Customer Information</h2>
                            <div class="leftlabel"><label>Your Name: *</label></div>
                            	<div class="rightform"><input name="name" type="text" value="<?=$name;?>"  <?php if(is_array($errors)){if($name == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="Your Name" ></div>
                            <div class="leftlabel"><label>Contact Number: *</label></div>
                            	<div class="rightform"><input name="contact" type="text" value="<?=$contact;?>"  <?php if(is_array($errors)){if($contact == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="Contact Number" ></div>
                            <div class="leftlabel"><label>E-mail Address: *</label></div>
                            	<div class="rightform"><input name="email" type="email" value="<?=$email;?>"  <?php if(is_array($errors)){if($email == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="E-mail Address" ></div>
                            <div class="leftlabel"><label>Company Name: *</label></div>
                            	<div class="rightform"><input name="company" type="text" value="<?=$company;?>"  <?php if(is_array($errors)){if($company == ''){?>style="border:1px solid #F00;"<?php }}?> required placeholder="Company Name" ></div>
                        </li>
                        <li>
                        	<div class="rightform"><input type="submit" class="btnsubmit"></div>
                        </li>
                    </ul>

                    </form>
                    
                    <div id="reference">
                    	<h2>Reference</h2>
                        <label>Web Development</label>
                        <ul>
                        	<li>Web FREE</li>
                            <li>Web Pro</li>
                            <li>Web Premium</li>
                            <li>PSD to XHTML</li>
                            <li>Web Design</li>
                            <li>Web re-Design</li>
                            <li>add-on SEO</li>
                            <li>add-on SMS</li>
                            <li>add-on Flash</li>
                        </ul>
                        
                        <label>Software Development</label>
                        <ul>
                        	<li>Biometric DTR</li>
                            <li>Inventory System</li>
                            <li>SMS Blast</li>
                            <li>Add a software</li>
                        </ul>
                        
                        <label>Business Outsourcing</label>
                        <ul>
                        	<li>IT</li>
                            <li>Call Center</li>
                            <li>Internet Trafficing</li>
                            <li>Add a software</li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div><!-- contents -->
            </div><!-- main -->
    
    </div><!-- content -->