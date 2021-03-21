<?php
class Register {

public $reg_user = "";
public $reg_password = "";
public $db_connection;
public $errors = array();
public $messages = array();

public function __construct() {

} //end construct

public function registerUser() {
if (empty($_POST['reg_username'])) {
$this->errors[] = "Please choose a username";

}
if (empty($_POST['reg_password'])) {
$this->errors[] = "Please choose a password";
}
if (empty($_POST['reg_password_repeat'])) {
$this->errors[] = "Make sure you enter your password in both fields";
}
if ($_POST['reg_password'] !== $_POST['reg_password_repeat']) {
$this->errors[] = "Passwords don't match";
}
if ((strlen($_POST['reg_username']) < 2 || (strlen($_POST['reg_username']) > 32)))  {
$this->errors[] = "Min. Username Length is 2. Max. Username Length is 32";
}
if ((strlen($_POST['reg_password']) < 6 || (strlen($_POST['reg_password']) > 32)))  {
$this->errors[] = "Min. Pass Length is 6. Max. Password Length is 32";
}
if (count($this->errors) == 0) {
$this->db_connection = new mysqli('localhost', 'root', '1', 'test');

  if (!$this->db_connection->connect_errno) {
 
                 // escape the POST stuff
                 $this->user_name = $this->db_connection->real_escape_string($_POST['reg_username']);
                 $this->user_password = $this->db_connection->real_escape_string($_POST['reg_password']);
                 
                $sql_check = "SELECT user_name
			 FROM members
			 WHERE user_name = '{$this->user_name}'";
		 
		 $query_check = $this->db_connection->query($sql_check);
             
               

                // if the username exists and if the password is a correct match
                 if ($query_check->num_rows == 1) {
                 $this->errors[] = "Username Exists";
                 } 
                 if (count($this->errors) == 0)  {
                 $sql_insert = "INSERT INTO members (user_name, user_password)
				 VALUES ('{$this->user_name}', '{$this->user_password}')"; 
				 
		  $query_insert = $this->db_connection->query($sql_insert);
		  
                  if ($query_insert === FALSE) {
                  $this->messages[] = "Register failed. Please Try Again"; 
                  } else {
                  header('Location: signin.php');
                  $this->messages[] = "Successful Login"; 
                  }
                  } //end else


} //end if connect_errno
} //end if (count)
} //end registerUser








} // end class







?>