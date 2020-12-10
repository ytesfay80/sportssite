<header>
    <nav class="navbar grove-navbar" role="navigation">
      <div class="container">
             <div class="navbar-header ">
                    <a href="lottery.php" class="grove-toggle">   <i class="glyphicons show_lines"></i>  </a>
                    <a href="lottery.php" class="navbar-brand" id="logo"><strong><i>LottoShop</i></strong></a>
                </div>


    <ul class="nav nav-pills" style="margin-left: <?php if (isset($_SESSION['user_name'])) { echo "430px"; } else { echo "347px"; } ?>;">
       
        <?php if ($classLogin->isUserLoggedIn() === true) {?>
          
         <li class="disabled">
        <p class="toppage" style="color: red;"><img src="bitcoin.ico"></img> <?php $classLogin->userBalance(); ?> ( <img src="bitcoin.ico"></img> 0.0000 Pending )</p> 
        </li>
       
       <li>
        <a class="toppage" href="#" data-toggle="dropdown"><strong>Getting Started </strong><b class="caret"></b></a>
        <ul class="nav nav-pills dropdown-menu dropdown-menu2">
        <li><a href="#">How To Play?</a></li>
        <li><a href="#">General Rules</a></li><br>
        <li><a href="#">FAQ</a></li>
        </ul>
       </li>
             
        <li>        
        <a class="toppage" href="#" data-toggle="dropdown"><strong>
        <?php echo $_SESSION['user_name'] ?></strong><b class="caret"></b></a>
        <ul class="nav nav-pills dropdown-menu dropdown-menu2">
        <li><a href="#">Deposit/Withdraw</a></li>
        <li><a href="myaccount_trans.php">Account History</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
       
       
        
    
        
       <?php } else {?>
	      <li>
	      <a class="toppage" href="#"><strong>How to Play?</strong></a>
	      </li>
	      
	     <li>
	     <a class="toppage" href="#"><strong>Frequently Asked Questions</strong></a>
	     </li>

      
      <li>
        <a class="toppage" href="#"><strong>Lottery</strong></a>
      </li>
      
       
   <li>
        <a class="toppage" href="signin.php" style="background-color: #838383;"><strong><i>Sign In</i></strong></a>
   </li>
    
    <li>
        <a class="toppage" href="register.php" style="background-color: #838383;"><strong><i>Register</i></strong></a>
   </li>

      <?php } ?>
       
	

      
      </ul>

      
      
      
      
       </div>
       </div>
       </nav>
       </div>
       </header>