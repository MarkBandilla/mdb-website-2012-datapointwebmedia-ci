<?php           

class DB{                                        
                                           
//    protected $_hostname = 'localhost';
//    protected $_username = 'root';
//    protected $_password = '';
//    protected $_database = 'datapoint';  
    
      
    protected $_hostname = 'localhost';
    protected $_username = 'toprankg_auricx';
    protected $_password = '111111';
    protected $_database = 'toprankg_datapoint';    
                            
    public function __construct()
    {
        mysql_connect($this->_hostname, $this->_username, $this->_password) or die ('Server connection failed');
        mysql_select_db($this->_database) or die ('Server connection failed');
    }
    
	 
   	
    public function addPostbackdata($form)
    {  
        
                                                                            
            $accountingAmount                  = $form['accountingAmount'];   
            $address1                  = $form['address1'];                  
            $affiliate                  = $form['affiliate'];                  
            $affiliate_id                  = $form['affiliate_id'];                  
            $affiliate_system                  = $form['affiliate_system'];                  
            $allowedTypes                  = $form['allowedTypes'];                  
            $baseCurrency                  = $form['baseCurrency'];                  
            $cardType                  = $form['cardType'];                  
            $ccbill_referer                  = $form['ccbill_referer'];                  
            $city                  = $form['city'];                  
            $clientAccnum                  = $form['clientAccnum'];                  
            $clientDrivenSettlement                  = $form['clientDrivenSettlement'];                  
            $clientSubacc                  = $form['clientSubacc'];                  
            $consumerUniqueld                  = $form['consumerUniqueld'];                  
            $country                  = $form['country'];                  
            $currencyCode                  = $form['currencyCode'];                  
            $customer_fname                  = $form['customer_fname'];                  
            $customer_lname                  = $form['customer_lname'];                  
            $denialId                  = $form['denialId'];                  
            $email                  = $form['email'];                  
            $formName                  = $form['formName'];                  
            $initialFormattedPrice                  = $form['initialFormattedPrice'];                  
            $initialPeriod                  = $form['initialPeriod'];                  
            $initialPrice                  = $form['initialPrice'];                  
            $ip_address                  = $form['ip_address'];                  
            $password                 = $form['password'];                  
            $paymentAccount                  = $form['paymentAccount'];                  
            $phone_number                  = $form['phone_number'];                  
            $price                  = $form['price'];                  
            $productDesc                  = $form['productDesc'];                  
            $reasonForDecline                  = $form['reasonForDecline'];                  
            $reasonForDeclineBeforeOverride                  = $form['reasonForDeclineBeforeOverride'];                                
            $reasonForDeclineCode                  = $form['reasonForDeclineCode'];                                
            $reasonForDeclineCodeBeforeOverride                  = $form['reasonForDeclineCodeBeforeOverride'];                                
            $rebills                  = $form['rebills'];                                
            $recurrinFormattedPrice                  = $form['recurrinFormattedPrice'];                                
            $recurringPeriod                  = $form['recurringPeriod'];                                
            $recurringPrice                  = $form['recurringPrice'];                                
            $referer                  = $form['referer'];                                
            $referringUrl                  = $form['referringUrl'];                                
            $reservationId                  = $form['reservationId'];                                
            $responseDigest                  = $form['responseDigest'];                                
            $start_date                  = $form['start_date'];                                
            $state                  = $form['state'];                                
            $subscription_id                  = $form['subscription_id'];                                
            $typeId                  = $form['typeId'];                                
            $username                  = $form['username'];                                
            $zipcode                  = $form['zipcode'];  
            $date               = date("Y-m-j H:i:s");    ///DATE IN THE SERVER                         
                                                      
        
        
            $sql = "INSERT INTO clientdataform 
                    (accountingAmount, address1, affiliate, affiliate_id, affiliate_system, allowedTypes, baseCurrency, cardType, ccbill_referer, city, clientAccnum, clientDrivenSettlement, clientSubacc, consumerUniqueld, country, currencyCode, customer_fname, customer_lname, denialId, email, formName, initialFormattedPrice, initialPeriod, initialPrice, ip_address, password, paymentAccount, phone_number, price, productDesc, reasonForDecline, reasonForDeclineBeforeOverride, reasonForDeclineCode, reasonForDeclineCodeBeforeOverride, rebills, recurrinFormattedPrice, recurringPeriod, recurringPrice, referer, referringUrl, reservationId, responseDigest, start_date, state, subscription_id, typeId, username, zipcode, date 
                    ) 
                    VALUES 
                    (
                     '$accountingAmount ', '$address1', '$affiliate', '$affiliate_id', '$affiliate_system', '$allowedTypes', '$baseCurrency', '$cardType', '$ccbill_referer', '$city', '$clientAccnum', '$clientDrivenSettlement', '$clientSubacc', '$consumerUniqueld', '$country', '$currencyCode', '$customer_fname', '$customer_lname', '$denialId', '$email', '$formName', '$initialFormattedPrice', '$initialPeriod', '$initialPrice', '$ip_address', '$password', '$paymentAccount', '$phone_number', '$price', '$productDesc', '$reasonForDecline', '$reasonForDeclineBeforeOverride', '$reasonForDeclineCode', '$reasonForDeclineCodeBeforeOverride', '$rebills', '$recurrinFormattedPrice', '$recurringPeriod', '$recurringPrice', '$referer', '$referringUrl', '$reservationId', '$responseDigest', '$start_date', '$state', '$subscription_id', '$typeId', '$username', '$zipcode', '$date')";     
            
            
            $result = mysql_query($sql) or die(mysql_error());
            if (mysql_affected_rows()) {
                return mysql_insert_id();
            }      
            return false;     
    }      
    
}
    
    