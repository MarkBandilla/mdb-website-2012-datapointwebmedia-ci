  <div id="content">
    	
        	<div id="banner">
            	<div class="main">
                    <ul class="follow">
                        <li><a href="#"><img src="<?=site_url()?>img/banner-fb.png" alt="" /></a></li>
                        <li><a href="#"><img src="<?=site_url()?>img/banner-tw.png" alt="" /></a></li>
                    </ul>
                </div><!-- main -->
            </div><!-- banner -->
            
            <div id="highlights" class="webdevelopment">
            	<div class="main">         
					<?php    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If API form is submitted   
                   					
					 $name = $_REQUEST['name'] ;
					 $messages = $_REQUEST['message'] ;
                    
                    $to = "admin@datapoint.us"; 
					 $subject = "Contact Us"; 
					 $email = $_REQUEST['email'] ;   
					 $details = $_REQUEST['name']."\n".$_REQUEST['email']."\n\n\n".$_REQUEST['message'];    
					 $message = $details;    
					 $headers = "From: ".$_REQUEST['email']; 
					 $sent = mail($to, $subject, $message, $headers) ; 
                     
         //if($sent) {print "Your mail was sent successfully"; } else {print "We encountered an error sending your mail"; }
                    
                    
                    //
                    //        $cli_debug = new Client();
                    //        $debug_subscription_id = (empty($saleID)) ? "Denied" : $saleID;                            
                    //        $cli_debug->sendEmail($post_vars, "TWEENS - POSTBACK $debug_subscription_id - $affid");   
                    
                    }         
                    ?>
                
         <div class="highlights" style=" font-size:12px; width:270px; height:420px; margin:auto; padding:20px 20px 20px 20px; -webkit-box-shadow: inset 300px 300px 25px  50px rgba(021, 222, 000, 0.1);
-moz-box-shadow: inset 300px 300px 25px 50px rgba(021, 222, 000, 0.1);
box-shadow: inset 300px 300px 25px 50px rgba(021, 222, 000, 0.1);  ">
        <form method="post" action="">
        <table >        
        	<tr>
            	<td style="text-align:center;"><b>Comments or Questions are Welcome</b></td>
            </tr>       
        	<tr>
            	<td style="text-align:center; padding:10px 0 10px 0;"><b>*</b>(denotes required field)</td>
            </tr>       
        	<tr>
            	<td style="padding:10px 0 10px 0;"><br />Name <b>*</b></td>
            </tr>      
        	<tr>
            	<td><input type="text" name="name" id="name" size="30" value="your name" /></td>
            </tr>    
        	<tr>
            	<td style="padding:10px 0 10px 0;">Email Address <b>*</b></td>
            </tr>   
        	<tr>
            	<td><input type="text" name="email" id="email" size="30" value="your email address" /></td>
            </tr>   
        	<tr>
            	<td style="padding:10px 0 10px 0;">Message <b>*</b></td>
            </tr>
        	<tr>
            	<td><textarea name="message" id="message" cols="30" rows="10"  value=""></textarea></td>
            </tr>
            <tr>
            	<td style="text-align:center;"><p class="submit"><button type="submit">Submit</button></p></td>
            </tr>
            
            
        </table>
        </form>
        </div>       
                	
                    
                    
                    
                </div><!-- main -->
            </div>
            
            <br /><br />
            
            <div id="featured">
            	<div class="main">
                	<div class="content">
                    	<h1>Look at our Works</h1>
                        <h2>that were proud of</h2>
                        <p>We are group of developers and professionals that teamed-up to deliver the most advance solutions for your company.</p>
                        <a href="#"><img src="<?=site_url()?>img/featured-porfolio.png" alt="" /></a>
                    </div><!-- content -->
                	<div class="featured">
                        <div class="features">
                            <img src="<?=site_url()?>img/feature1.jpg" alt="" />
                            <img src="<?=site_url()?>img/feature2.jpg" alt="" />
                            <img src="<?=site_url()?>img/feature3.jpg" alt="" />
                            <img src="<?=site_url()?>img/feature4.jpg" alt="" />
                            <img src="<?=site_url()?>img/feature5.jpg" alt="" />
                            <img src="<?=site_url()?>img/feature6.jpg" alt="" />
                        </div><!-- features -->
                    </div><!-- featured -->
                </div><!-- main -->
            </div>
        
        	<div id="clients">
            	<div class="main">
                	<div class="content">
                    	<h1>Our dear Clients</h1>
                        <h2>And their testimonials</h2>
                        <p>We are dedicated to give satisfaction to our clients, for they are our inspiration to make our projects better and better for us to become the best.</p>
                        <a href="#"><img src="<?=site_url()?>img/clients-quote.png"  alt="" /></a>
                    </div><!-- content -->
                    <div class="clients">
                        <ul class="clientlist">
                            <li><p><a href="#" id="client1"><img src="<?=site_url()?>img/client1.jpg" alt="" /></a></p></li>
                            <li><p><a href="#" id="client2"><img src="<?=site_url()?>img/client2.jpg" alt="" /></a></p></li>
                            <li><p><a href="#" id="client3"><img src="<?=site_url()?>img/client3.jpg" alt="" /></a></p></li>
                            <li><p><a href="#" id="client4"><img src="<?=site_url()?>img/client4.jpg" alt="" /></a></p></li>
                            <li><p><a href="#" id="client5"><img src="<?=site_url()?>img/client5.jpg" alt="" /></a></p></li>
                            <li><p><a href="#" id="client6"><img src="<?=site_url()?>img/client6.jpg" alt="" /></a></p></li>
                        </ul>
                        <ul class="clientrepage">
                            <li class="active"><a href="#"><img src="<?=site_url()?>img/pagination.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=site_url()?>img/pagination.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=site_url()?>img/pagination.png" alt="" /></a></li>
                            <li><a href="#"><img src="<?=site_url()?>img/pagination.png" alt="" /></a></li>
                        </ul>
                    </div><!-- clients -->
                </div><!-- main -->
            </div>
    </div><!-- content -->