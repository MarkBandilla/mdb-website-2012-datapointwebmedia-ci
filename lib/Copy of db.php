<?php

class DB
{                                        
                                           
    protected $_hostname = 'localhost';
    protected $_username = 'root';
    protected $_password = '';
    protected $_database = 'jchat';  
    
      
//    protected $_hostname = 'localhost';
//    protected $_username = 'toprankg_auricx';
//    protected $_password = '111111';
//    protected $_database = 'toprankg_jchat';    
                            
    public function __construct()
    {
        mysql_connect($this->_hostname, $this->_username, $this->_password) or die ('Server connection failed');
        mysql_select_db($this->_database) or die ('Server connection failed');
    }
    
	 
     public function checkMember($form)
    {
        $username = $form['username'];
        $password = $form['password'];
        
        $sql = "SELECT *
                FROM user
                WHERE username = '$username' AND password = '$password'";
                
        $result = mysql_query($sql);
        
        if (mysql_num_rows($result)) {
            return mysql_fetch_assoc($result);    
        }
        return false;
    }
	  	
    public function addLink($form)
    {  
        if (!$this->isExistingLink($form)) {    
        $site_id       = $form['site_id'];
        $affid         = $form['affid'];
        $sales_type    = $form['type']; 
        $link          = $form['link'];   
        
        
            $sql = "INSERT INTO link 
                    (site_id, affid, sales_type, link) 
                    VALUES 
                    ('$site_id', '$affid', '$sales_type', '$link')";     
            
            $result = mysql_query($sql) or die(mysql_error());
            if (mysql_affected_rows()) {
                return mysql_insert_id();
            }      
            return false;
        } 
        return false;
    }
    
    public function isExistingLink($form)
    {
        $site_id       = $form['site_id'];
        $affid         = $form['affid'];
        $sales_type    = $form['type'];
        $link          = $form['link'];
        
        $sql = "SELECT site_id, affid, sales_type, link 
                FROM link 
                WHERE site_id = '$site_id' and affid = '$affid' and sales_type = '$sales_type' and link = '$link'    ";
                                                                                                              
        $result = mysql_query($sql)  or die(mysql_error());
        
        if (mysql_num_rows($result)) {
            return mysql_fetch_assoc($result);
        }
        return false;
    }
           
    
    public function agentLink($postback)
    {           
        
        $site_id       = $postback['site_id'];
        $affid         = $postback['affid'];
        $sales_type    = $postback['type'];
        
      $sql = "SELECT link
                FROM link 
                WHERE site_id = '$site_id' and affid = '$affid' and sales_type = '$sales_type' "; 
      $result = mysql_query($sql);
      $ans=mysql_fetch_array($result);
        if ($ans) {  
                return $ans;
          //return mysql_fetch_array($result);    
        }                            
               
        return false;
    }   
                                       
                    
        public function addCampaign($form)
    {  
        if (!$this->isExistingCampaign($form)) {    
        $campaign       = $form['campaign'];    
        
        
            $sql = "INSERT INTO campaign 
                    (campaign) 
                    VALUES 
                    ('$campaign')";     
            
            $result = mysql_query($sql) or die(mysql_error());
            if (mysql_affected_rows()) {
                return mysql_insert_id();
            }      
            return false;
        } 
        return false;
    }    
    
    public function isExistingCampaign($form)
    {                                            
        $campaign    = $form['campaign'];
        
        $sql = "SELECT campaign
                FROM campaign 
                WHERE campaign = '$campaign'";
                                                                                                              
        $result = mysql_query($sql)  or die(mysql_error());
        
        if (mysql_num_rows($result)) {
            return mysql_fetch_assoc($result);
        }
        return false;
    }            
    
       
    
                                  
	public function viewLinks()
    {    

    $result = mysql_query("SELECT * FROM link") or trigger_error('Query failed: '. mysql_error());
    $numrows = mysql_num_rows($result);

    $rowsperpage = 30;
    $totalpages = ceil($numrows / $rowsperpage);
 
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentpage = (int) $_GET['page'];
    } else {
    $currentpage = 1;
    }

    if ($currentpage > $totalpages) {
    $currentpage = $totalpages;
    }
    if ($currentpage < 1) {
    $currentpage = 1;
    }

    $offset = ($currentpage - 1) * $rowsperpage;

    $data = array();  
    $result = mysql_query("SELECT * FROM link LIMIT $offset, $rowsperpage") or trigger_error('Query failed: '. mysql_error());

    while ($rows = mysql_fetch_array($result)) {

    $data[] = $rows; 

    }
    //echo ' <b>Pages:</b> ';

    $range = 3;

    echo "<div style='text-align:center; height:20px; padding-top:10px;'>";
    if ($currentpage > 1) {                                                  
    echo "<a href='{$_SERVER['PHP_SELF']}?page=1'>First</a> ";
    $prevpage = $currentpage - 1;
    echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'>| Prev </a> ";
    }

    for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
    if (($x > 0) && ($x <= $totalpages)) {
    if ($x == $currentpage) {
    echo " [<b>$x</b>] ";
    } else {
    echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
    }
    } 
    }

    if ($currentpage != $totalpages) {
    $nextpage = $currentpage + 1;
    echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'> Next |</a> ";
    echo " <a href='{$_SERVER['PHP_SELF']}?page=$totalpages'>Last</a> <br /><br /><br />";
     
    }
    echo "</div >";
    
    return $data; 
   } 
    
    
	public function deleteLinks($id)
	{
		$sql  = "DELETE FROM link WHERE id = $id";
		$result = mysql_query($sql) or die (mysql_error());
	} 
	
	
	 //will UPDATE Records  
	 public function updateLinks($form)
	 {   
			$siteid        = $form['site_id'];
			$affid         = $form['affid'];
			$salestype     = $form['type']; 
			$link          = $form['link'];
			$id            = $form['id'];  
			
			$sql = "UPDATE link SET  sales_type ='".$salestype."', affid ='".$affid."', site_id ='".$siteid."', link = '".$link."' WHERE id = '".$id."'";   
			$result = mysql_query($sql) or die(mysql_error());
	 }
	 //will show ID    
	public function viewLinkID($id)
	 {
			$data = array();
			$result = mysql_query("SELECT * FROM link WHERE id='".$id."'");
			$rows   = mysql_fetch_array($result);       
			$data[] = $rows;
			return $data;
	 }    
	 //function for UPDATE
	 public function viewUpdate()
	 {
		$data = array();
		$result = mysql_query("SELECT * FROM link ");            
		$rows = mysql_fetch_array($result);
		$data[] = $rows;
		return $data; 
	 }   
	
    
	
    public function viewCampaign()
    {                                                                                        
                                          
        $data = array();
        $sql = "SELECT * FROM campaign";                                                                                                                 
        $result = mysql_query($sql) or die(mysql_error());          
        
           
        while(($rows = mysql_fetch_assoc($result)))
        {
          $data[] = $rows;
                            
        }                 
          return $data; 
    }
                   
                             
                            
                                 
  public function viewSearch($form)
    {                                  
    
     
        $affid       = $form['affid']; 
        $site_id       = $form['site_id'];      
        
        
        if($affid==""){        
            $where1 ="";          
        } else { 
            $where1 = "affid = '$affid'" ;
        }
        
        if($site_id==""){ 
            
            $where2 ="";   
                                    
        } elseif($affid=="" || site_id==""){
            
            $where2= "site_id =  $site_id"; 
        
        }else {    
                
            $where2 ="AND site_id = $site_id";  
             
        }                  
        
       $where_condition = $where1 . $where2;        
                                                            
        $data = array();                             
        //$sql = "SELECT * FROM link WHERE affid ='$affid' ";
        if ($affid=="" && $site_id==""){
            $sql = "SELECT * FROM link order by site_id limit 10 "; 
            
        } else {$sql = "SELECT * FROM link WHERE $where_condition ";}  
             
                                                                                          
        $result = mysql_query($sql) or die(mysql_error());          
        
           
        while(($rows = mysql_fetch_assoc($result)))
        {
          $data[] = $rows;
                            
        }                 
          return $data;   
                                                                 
   } 
   
   
   
      //POSTBACK DATA INPUT POSTBACK DATA   
        public function addPostback($form)
    {  
        if (!$this->isExistingPost($form)) {    
        $campaign_id        = $form['campaign_id'];
        $site_id            = $form['site_id'];
        $subscription_id    = $form['subscription_id']; 
        $amount             = $form['amount']; 
        $client_id          = $form['client_id']; 
        $status             = $form['status'];   
        $date               = date("Y-m-j H:i:s");    ///DATE IN THE SERVER
        
        
            $sql = "INSERT INTO postcwm 
                    (campaign_id, site_id, subscription_id, amount, client_id, status, date_sales) 
                    VALUES 
                    ('$campaign_id', '$site_id', '$subscription_id', '$amount', '$client_id', '$status', '$date')";     
            
            $result = mysql_query($sql) or die(mysql_error());
            if (mysql_affected_rows()) {
                return mysql_insert_id();
            }      
            return false;
        } 
        return false;
    }
    
    public function isExistingPost($form)
    {                                            
        $affid              = $form['affid'];
        $site_id            = $form['site_id'];
        $subscription_id    = $form['subscription_id'];   
        $client_id          = $form['client_id']; 
        $amount             = $form['amount']; 
        
        $sql = "SELECT campaign_id, site_id, subscription_id, amount, client_id 
                FROM postcwm 
                WHERE subscription_id = '$subscription_id' and client_id = '$client_id' and amount = '$amount'";
                                                                                                              
        $result = mysql_query($sql)  or die(mysql_error());
        
        if (mysql_num_rows($result)) {
            return mysql_fetch_assoc($result);
        }
        return false;
    }
    
     //VIEW CHATSALES 
     public function viewChatsales()
    {    

            $result = mysql_query("SELECT
                            `postcwm`.`post_id`,
                            `postcwm`.`campaign_id`,
                            `postcwm`.`site_id`,
                            `postcwm`.`subscription_id`,
                            `postcwm`.`amount`,
                            `postcwm`.`client_id`,
                            `postcwm`.`status`,
                            `postcwm`.`date_sales`,
                            `affiliate`.`affid`
                            FROM
                            `postcwm`
                            Inner Join `affiliate` ON `postcwm`.`campaign_id` = `affiliate`.`campaign_id`
                            WHERE
                            `postcwm`.`status` =  'sales'
                            ORDER BY 
                            postcwm.date_sales DESC   
            
            ") or trigger_error('Query failed: '. mysql_error());
            $numrows = mysql_num_rows($result);

            $rowsperpage = 300;
            $totalpages = ceil($numrows / $rowsperpage);
         
            if (isset($_GET['page']) && is_numeric($_GET['page'])) {
            $currentpage = (int) $_GET['page'];
            } else {
            $currentpage = 1;
            }

            if ($currentpage > $totalpages) {
            $currentpage = $totalpages;
            }
            if ($currentpage < 1) {
            $currentpage = 1;
            }

            $offset = ($currentpage - 1) * $rowsperpage;

            $data = array();  
            $result = mysql_query("SELECT
                            `postcwm`.`post_id`,
                            `postcwm`.`campaign_id`,
                            `postcwm`.`site_id`,
                            `postcwm`.`subscription_id`,
                            `postcwm`.`amount`,
                            `postcwm`.`client_id`,
                            `postcwm`.`status`,
                            `postcwm`.`date_sales`,
                            `affiliate`.`affid`
                            FROM
                            `postcwm`
                            Inner Join `affiliate` ON `postcwm`.`campaign_id` = `affiliate`.`campaign_id`
                            WHERE
                            `postcwm`.`status` =  'sales'
                            ORDER BY 
                            postcwm.date_sales DESC      
            
            LIMIT $offset, $rowsperpage") or trigger_error('Query failed: '. mysql_error());

            while ($rows = mysql_fetch_array($result)) {

            $data[] = $rows; 

            }
            //echo ' <b>Pages:</b> ';

            $range = 3;

            echo "<div style='text-align:center; height:20px; padding-top:10px;'>";
            if ($currentpage > 1) {                                                  
            echo "<a href='{$_SERVER['PHP_SELF']}?page=1'>First</a> ";
            $prevpage = $currentpage - 1;
            echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'>| Prev </a> ";
            }

            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
            if (($x > 0) && ($x <= $totalpages)) {
            if ($x == $currentpage) {
            echo " [<b>$x</b>] ";
            } else {
            echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
            }
            } 
            }

            if ($currentpage != $totalpages) {
            $nextpage = $currentpage + 1;
            echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'> Next |</a> ";
            echo " <a href='{$_SERVER['PHP_SELF']}?page=$totalpages'>Last</a> <br /><br /><br />";
             
            }
            echo "</div >";
            
            return $data;                 
                                                                 
   }       
    
    
     //will UPDATE Records  
     public function updatePostcwm($form)
     {     
        $post_id            = $form['post_id'];
        $campaign_id        = $form['campaign_id']; 
        $site_id            = $form['site_id'];
        $subscription_id    = $form['subscription_id'];
        $amount             = $form['amount'];
        $client_id          = $form['client_id'];
        $status             = $form['status'];    
        
        $sql = "UPDATE postcwm SET  status ='ok' WHERE post_id = '$post_id' ";   
        $result = mysql_query($sql) or die(mysql_error());
     } 
   
        public function addAffiliates($form)
    {  
  
        $campaign_id   = $form['campaign_id'];
        $affid         = $form['affid'];    
                                                       
            $sql = "INSERT INTO affiliate 
                    (campaign_id, affid) 
                    VALUES 
                    ('$campaign_id', '$affid')";     
            
            $result = mysql_query($sql) or die(mysql_error());
            if (mysql_affected_rows()) {
                return mysql_insert_id();
            }      
            return false;  
    }
    
       public function viewAffidspost($campaign)
    {                               
        $data = array();                                                        
       //$sql = "SELECT * FROM postcwm WHERE status ='sales'";   
        $sql ="SELECT
                    `affid`
                    FROM
                    `affiliate` 
                    WHERE
                    `campaign_id` =  '$campaign'";                                                                         
        $result = mysql_query($sql) or die(mysql_error()); 
           
        while(($rows = mysql_fetch_assoc($result)))
        {
          $data[] = $rows;  
        }                 
          return $data;   
                                                                 
   } 
   
   
   
   //AFFILIATE AND CAMPAIGN ID VERIFICATION
   
    public function viewComaff($form)
    {                                  
    
     
        $affid       = $form['affid']; 
        $campaign_id       = $form['campaign_id'];      
        
        
        if($affid==""){        
            $where1 ="";          
        } else { 
            $where1 = "affid = '$affid'" ;
        }
        
        if($campaign_id==""){ 
            
            $where2 ="";   
                                    
        } elseif($affid=="" || $campaign_id==""){
            
            $where2= "campaign_id =  $campaign_id"; 
        
        } else {    
                
            $where2 ="AND campaign_id = $campaign_id";  
             
        }                  
        
       $where_condition = $where1 . $where2;        
                                                            
        $data = array();                             
        //$sql = "SELECT * FROM link WHERE affid ='$affid' ";
        if ($affid=="" && $campaign_id==""){
            //$sql = "SELECT * FROM affiliate order by ids limit 10 ";             
       } else {
            $sql = "SELECT * FROM affiliate WHERE $where_condition ";
        }  
             
        if ($sql==""){  
                                               
        $result = mysql_real_escape_string($sql) or die(mysql_error()); 
                                                  
        }  else {
                                       
        $result = mysql_query($sql) or die(mysql_error());
                        
        }                                                               
                               
     
        while(($rows = mysql_fetch_assoc($result)))
        {
          $data[] = $rows;                             
          //echo $sql;  
        }                 
          return $data;   
                                                                 
   } 
    
    public function deleteAffid($form)
    {
        
        $ids       = $form['ids'];           
        $table       = $form['table'];     
        $sql  = "DELETE FROM $table  WHERE ids = $ids";
//        echo $table."<br />";
//        echo $ids."<br />" ;
//        echo "delete";
//        echo $sql;
        $result = mysql_query($sql) or die (mysql_error());
    } 
    
    
   
        public function addAffiliateswickvid($form)
    {  
  
        $AffiliateID   = $form['AffiliateID'];
        $affid         = $form['affid'];    
                                                       
            $sql = "INSERT INTO affiliatewickvid 
                    (AffiliateID, affid) 
                    VALUES 
                    ('$AffiliateID', '$affid')";     
            
            $result = mysql_query($sql) or die(mysql_error());
            if (mysql_affected_rows()) {
                return mysql_insert_id();
            }      
            return false;  
    }
    
   
   
   
	
	
    
    
}
    
    