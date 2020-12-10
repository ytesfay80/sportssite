<?php
 
 /**
  * Class login
  * handles the user login/logout/session
  */
 class Login
 {
     /**
      * @var object The database connection
      */
   public $db_connection;

     public $user_name = "";
     /**
      * @var string The user's password 
      */
     public $user_password = "";
     
     public $user_email = "";
     
     public $user_id = "";
     /**
      * @var boolean The user's login status
     */
     public $user_is_logged_in = false;
    
     /**
      * @var array Collection of error messages
      */
     public $errors = array();
     /**
      * @var array Collection of success / neutral messages
      */
     public $messages = array();
 
     /**
      * the function "__construct()" automatically starts whenever an object of this class is created,
      * you know, when you do "$login = new Login();"
      */
     public function __construct()
     {
         // TODO: adapt the minimum check like in 0-one-file version
 $this->user_is_logged_in = $user_is_logged_in;
        // create/read session
         session_start();
 
         // check the possible login actions:
         // 1. logout (happen when user clicks logout button)
         // 2. login via session data (happens each time user opens a page on your php project AFTER he has sucessfully logged in via the login form)
         // 3. login via post data, which means simply logging in via the login form. after the user has submit his login/password successfully, his
         //    logged-in-status is written into his session data on the server. this is the typical behaviour of common login scripts.
          
         // if user tried to log out
         if (isset($_GET["logout"])) {
             $this->doLogout();
         }
         // if user has an active session on the server
         elseif (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) {
             $this->loginWithSessionData();
         }
         // if user just submitted a login form
         elseif (isset($_POST["submit"])) {
             $this->loginWithPostData();
         }
     }
 
     /**
      * log in with session data
      */
     private function loginWithSessionData()
     {
         // set logged in status to true, because we just checked for this:
         // !empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)
         // when we called this method (in the constructor)
         $this->user_is_logged_in = true;
     }
 
     /**
     * log in with post data
      */
     public function loginWithPostData()
     {
       if (empty($_POST['user_name'])) {
            $this->errors[] = "Username field was empty.";
        } if (empty($_POST['user_password'])) {
             $this->errors[] = "Password field was empty.";
         }
         // if POST data (from login form) contains non-empty user_name and non-empty user_password
         if (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {
         
                  $this->db_connection = new mysqli('localhost', 'root', '1', 'test');

 
             // create a database connection, using the constants from config/db.php (which we loaded in index.php)
               if ($this->db_connection->connect_errno) {
             echo "Connection Failed " . $this->db_connection->connect_errno . "";
             }
 
    
 
             // if no connection errors (= working database connection)
             if (!$this->db_connection->connect_errno) {
 
                 // escape the POST stuff
                 $this->user_name = $this->db_connection->real_escape_string($_POST['user_name']);
                 $this->user_password = $this->db_connection->real_escape_string($_POST['user_password']);
                 
 
                 // database query, getting all the info of the selected user
                 $sql = "SELECT *
                         FROM members
                         WHERE user_name = '{$this->user_name}' AND user_password = '{$this->user_password}'";
                 $query = $this->db_connection->query($sql);
                $result = $query->fetch_object();
             
               

                // if the username exists and if the password is a correct match
                 if (($query->num_rows == 1) && ($this->user_password === $result->user_password)) {
			  
			  $_SESSION['user_id'] = $result->user_id;
			  $_SESSION['user_email'] = $result->user_email;		 
			  $_SESSION['user_name'] = $result->user_name;
			  $_SESSION['user_balance'] = $result->user_balance;

			  $_SESSION['user_logged_in'] = 1;
			  
			  $_SESSION['user_login_status'] = 1;
			  
			  
			  setcookie("_time", "cookie_value", time() + 3600);

			
			//redirect to this page if the user has logged in successfully
			header("Location: lottery.php");
			
			
                     } 
                     
                   else {
                         $this->errors[] = "Wrong username password combination";
                        }
                        
                      
                        

                        
                 
             }
         } 
       
         // Dont use this anymore now it is being echoed on the lottery page
       //  foreach ($this->errors as $error) {
       //  echo "$error";
       //  }
     }
     
     
     public function userBalance() {
       $this->db_connection = new mysqli('localhost', 'root', '1', 'test');


                 $sql = "SELECT *
                         FROM members
                         WHERE user_id = '{$_SESSION['user_id']}'";
                 $query = $this->db_connection->query($sql);
                $result = $query->fetch_object();
                echo $result->user_balance;
             
     }
 
 public function accountHistory() {
       $this->db_connection = new mysqli('localhost', 'root', '1', 'test');


                 $sql = "SELECT *
                         FROM members
                         WHERE user_id = '{$_SESSION['user_id']}'";
                 $query = $this->db_connection->query($sql);
               
               while ($row = $query->fetch_object()) {
               
              
             }
     }
     public function transactions() {
       $this->db_connection = new mysqli('localhost', 'root', '1', 'test');


                 $sql = "SELECT *
                         FROM transactions
                         WHERE member_id = ? ";
                         
                         $stmt = $this->db_connection->prepare($sql);
			 $num = 1;
			 $stmt->bind_param('i', $num);
			 
			 $stmt->execute();
			 $stmt->bind_result($member_id, $result, $ticket_id);
			 $stmt->store_result();
			 

			 

               while ($row = $stmt->fetch()) { 
               global $member_id, $result, $ticket_id;
              
            			 			 printf("Error: %s.\n", $stmt->errno);

                 }  
     }
 
     /**
      * perform the logout
      */
     public function doLogout()  {
         session_start();
	 $_SESSION = array();
	 unset($_SESSION);
	 session_destroy();
	 setcookie("_time", "null", time() - 3600);
	  
	  $this->user_is_logged_in = false;
	 
	 header("Location: lottery.php");
         
         }
 
     /**
      * simply return the current state of the user's login
      * @return boolean user's login status
      */
     public function isUserLoggedIn()
     {
         
         if ((isset($_SESSION['user_login_status'])) && ($_SESSION['user_login_status'] == 1)) {
            return $this->user_is_logged_in = true;
         }
         else {
          return $this->user_is_logged_in = false;
          }
     }
 }
?>