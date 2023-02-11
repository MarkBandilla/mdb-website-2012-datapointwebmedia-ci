<?php       
       /*
        #ccbill POST VARS                                                                                               
         */
         
        $subscription_id                = $_POST['subscription_id'];

        if($subscription_id !="") { echo "have value";
$accountingAmount1 = $_REQUEST['accountingAmount'];
//        $address                        = $_REQUEST['address'];
//        $affiliate                      = $_REQUEST['affiliate'];
//        $affiliate_id                   = $_REQUEST['affiliate_id'];
//        $affiliate_system               = $_REQUEST['affiliate_system'];
//        $allowedTypes                   = $_REQUEST['allowedTypes'];
//        $baseCurrency                   = $_REQUEST['baseCurrency'];
//        $cardType                       = $_REQUEST['cardType'];
//        $ccbill_referer                 = $_REQUEST['ccbill_referer'];
//        $city                           = $_REQUEST['city'];
//        $clientAccnum                   = $_REQUEST['clientAccnum'];
//        $clientDrivenSettlement         = $_REQUEST['clientDrivenSettlement'];
//        $clientSubacc                   = $_REQUEST['clientSubacc'];
//        $consumerUniqueld               = $_REQUEST['consumerUniqueld'];
//        $country                        = $_REQUEST['country'];
//        $currencyCode                   = $_REQUEST['currencyCode'];
//        $customer_fname                 = $_REQUEST['customer_fname'];
//        $customer_lname                 = $_REQUEST['customer_lname'];
//        $denialId                       = $_REQUEST['denialId'];
//        $email                          = $_REQUEST['email'];
//        $formName                       = $_REQUEST['formName'];
//        $initialFormattedPrice          = $_REQUEST['initialFormattedPrice'];
//        $initialPeriod                  = $_REQUEST['initialPeriod'];
//        $initialPrice                   = $_REQUEST['initialPrice'];
//        $ip_address                     = $_REQUEST['ip_address'];
//        $password                       = $_REQUEST['password'];
//        $paymentAccount                 = $_REQUEST['paymentAccount'];
//        $phone_number                   = $_REQUEST['phone_number'];
//        $price                          = $_REQUEST['price'];
//        $productDesc                    = $_REQUEST['productDesc'];
//        $reasonForDecline               = $_REQUEST['reasonForDecline'];
//        $reasonForDeclineBeforeOverride = $_REQUEST['reasonForDeclineBeforeOverride'];
//        $reasonForDeclineCode           = $_REQUEST['reasonForDeclineCode'];
//        $reasonForDeclineCodeBeforeOverride= $_REQUEST['reasonForDeclineCodeBeforeOverride'];
//        $rebills                        = $_REQUEST['rebills'];
//        $recurrinFormattedPrice         = $_REQUEST['recurrinFormattedPrice'];
//        $recurringPeriod                = $_REQUEST['recurringPeriod'];
//        $recurringPrice                 = $_REQUEST['recurringPrice'];
//        $referer                        = $_REQUEST['referer'];
//        $referringUrl                   = $_REQUEST['referringUrl'];
//        $reservationId                  = $_REQUEST['reservationId'];
//        $responseDigest                 = $_REQUEST['responseDigest'];
//        $start_date                     = $_REQUEST['start_date'];
//        $state                          = $_REQUEST['state'];
//        $subscription_id                = $_REQUEST['subscription_id'];
//        $typeId                         = $_REQUEST['typeId'];
//        $username                       = $_REQUEST['username'];
//        $zipcode                        = $_REQUEST['zipcode'];
                                                             
                                                              
                                                                                            
                       
                       
                       
//        $postback = array (                          
//        'accountingAmount'              =>  $accountingAmount,
//        'address'                       =>  $address,
//        'affiliate'                     =>  $affiliate,
//        'affiliate_id'                  =>  $affiliate_id,
//        'affiliate_system'              =>  $affiliate_system,
//        'allowedTypes'                  =>  $allowedTypes,
//        'baseCurrency'                  =>  $baseCurrency,
//        'cardType'                      =>  $cardType,
//        'ccbill_referer'                =>  $ccbill_referer,
//        'city'                          =>  $city,
//        'clientAccnum'                  =>  $clientAccnum,
//        'clientDrivenSettlement'        =>  $clientDrivenSettlement,
//        'clientSubacc'                  =>  $clientSubacc,
//        'consumerUniqueld'              =>  $consumerUniqueld,
//        'country'                       =>  $country,
//        'currencyCode'                  =>  $currencyCode,
//        'customer_fname'                =>  $customer_fname,
//        'customer_lname'                =>  $customer_lname,
//        'denialId'                      =>  $denialId,
//        'email'                         =>  $email,
//        'formName'                      =>  $formName,
//        'initialFormattedPrice'         =>  $initialFormattedPrice,
//        'initialPeriod'                 =>  $initialPeriod,
//        'initialPrice'                  =>  $initialPrice,
//        'ip_address'                    =>  $ip_address,
//        'password'                      =>  $password,
//        'paymentAccount'                =>  $paymentAccount,
//        'phone_number'                  =>  $phone_number,
//        'price'                         =>  $price,
//        'productDesc'                   =>  $productDesc,
//        'reasonForDecline'              =>  $reasonForDecline,
//        'reasonForDeclineBeforeOverride' => $reasonForDeclineBeforeOverride,
//        'reasonForDeclineCode'          =>  $reasonForDeclineCode,
//        'reasonForDeclineCodeBeforeOverride' =>$reasonForDeclineCodeBeforeOverride,
//        'rebills'                       =>  $rebills,
//        'recurrinFormattedPrice'        =>  $recurrinFormattedPrice,
//        'recurringPeriod'               =>  $recurringPeriod,
//        'recurringPrice'                =>  $recurringPrice,
//        'referer'                       =>  $referer,
//        'referringUrl'                  =>  $referringUrl,
//        'reservationId'                 =>  $reservationId,
//        'responseDigest'                =>  $responseDigest,
//        'start_date'                    =>  $start_date,
//        'state'                         =>  $state,
//        'subscription_id'               =>  $subscription_id,
//        'typeId'                        =>  $typeId,
//        'username'                      =>  $username,
//        'zipcode'                       =>  $zipcode

//        );                                  
         
                                     
        //if(!$subscription_id ="") { 
        
            // Import DB library
            require 'lib/db.php';
            $db = new DB();     
            
            echo    $subscription_id;

        // redirect the link              
        //$details=$db->agentLink($postback);  
       
        } else { echo "no value";}                                                        
      
?>

 
 
 <div id="content">
        
            <div id="banner">
                <div class="main">
                    <ul class="follow">
                        <li><a href=""><img src="img/banner-fb.png" /></a></li>
                        <li><a href=""><img src="img/banner-tw.png" /></a></li>
                    </ul>
                </div><!-- main -->
            </div><!-- banner -->
            
            <div class="main">
                <div id="members" class="contents">
                <h1></h1>                            
                    <form >
                    <ul>
                        <li>                              
                        <h2>Welcome Client</h2> 
                            <p> Thank you very much for your payment we wil be contacting you in regaurds as what you would like to do. Any concern or update please email us in support@datapoint.us .</p>
                            
                        </li>
                       
                    </ul>                     
                                                           
                              
                            
                    </form>
                    
                    <div id="reference">
                        <h2>WHO WE ARE</h2>    
                        <p>Nam odio dolor, sodales et rutrum sed, tincidunt vitae nunc. In urna libero, rhoncus iaculis adipiscing condimentum, hendrerit eleifend leo. Mauris rutrum consequat risus in porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec sit amet dignissim nunc. Nullam viverra, libero adipiscing fringilla pharetra, dui est dictum magna, luctus semper lacus dui ut urna. Nulla vel urna dui. In dictum sodales nisi, at tincidunt lacus convallis vel.</p>
                        
                        <h2>WHAT WE ARE</h2>                      
                        <p>Etiam tempus euismod scelerisque. Mauris ullamcorper aliquet tortor, nec ultrices arcu aliquet nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et feugiat nulla. Aliquam porttitor volutpat ante sit amet fringilla. Duis venenatis mauris a massa pellentesque tincidunt eget eu nisl. Etiam id volutpat libero. Aenean vehicula cursus nulla. Nunc venenatis bibendum est nec molestie. Curabitur est tellus, rhoncus euismod lobortis vitae, mattis in tortor. Nullam sed velit justo. Etiam vestibulum tellus ac justo imperdiet semper.</p>
                    </div>
                    
                    <div class="clear"></div>
                    
                </div><!-- contents -->
            </div><!-- main -->
    </div><!-- content -->