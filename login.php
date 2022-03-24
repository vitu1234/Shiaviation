<?php include 'includes/header.php';

$_SESSION['notification']="";



//registering a new customer/member
if (isset($_POST['login'])) {
	# get the data into variables
	$email = $_POST['email'];
	$password = $_POST['password'];

	//verify if the member  exists
	$sql_fetch_member = " SELECT * FROM tbl_users WHERE email = '$email' ";
	$sql_fetch_member_run = mysqli_query($conn, $sql_fetch_member);
	$sql_fetch_member_rows = mysqli_num_rows($sql_fetch_member_run);

	if ($sql_fetch_member_rows >0) {
		# if the member exists, proceed with checking the  password
		$sql_fetch_member_data = mysqli_fetch_assoc($sql_fetch_member_run);
        $db_password = $sql_fetch_member_data['password'];
        $isAdmin = $sql_fetch_member_data['isAdmin'];
        $name = $sql_fetch_member_data['name'];
        $user_id = $sql_fetch_member_data['id'];
        $profile_image = $sql_fetch_member_data['profile_image'];
        $phone_number = $sql_fetch_member_data['mobile_number'];
        $address = $sql_fetch_member_data['address'];
		if ($password == $db_password) {
				 # if login is successfull
				 	$_SESSION['user_email']=$email;
				 	$_SESSION['isAdmin']=$isAdmin;
				 	$_SESSION['name']=$name;
           $_SESSION['user_id']=$user_id;
           $_SESSION['profile_image']=$profile_image;
           $_SESSION['phone_number']=$phone_number;
           $_SESSION['address']=$address;
           if($isAdmin == 'yes'){
            header('location:adminDash.php');

           }else{
            header('location:userDash.php');

           }
					exit();
			
		}else {
			# if passwords dont match , dont proceed
			$_SESSION['notification']="<div class=\"alert alert-danger\">
                                  Incorrect password! Try again.
                                  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                </div>";
		}
	}else {
		# if the user already exists, dont proceed
		$_SESSION['notification']="<div class=\"alert alert-danger\">
                                  This email is not registered with Ablaze! <a href=\"register.php\">Register</a> if you're new.
                                  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                </div>";
	}
}

?> 
  <!-- MAIN -->
  <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Login
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        <?php echo $_SESSION['notification']; ?>

        <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Login</b></h3>
            <form class="customform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-12">
                    <input name="email" class="required email"  placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="password" class="required password" placeholder="Your password" title="Your password" type="password" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><input  class="button border-radius text-white background-primary" type="submit" name="login" value="Login" /></div>
              </div>    
            </form>
            <h3 class="text-center">Do not have an account? <a href="register.php">Click here to register</a></h3 >
            <hr>
            <h3 class="text-center">Forgot Password? <a href="resetPassword.php" class="button border-radius text-white background-info">Reset Password</a></h3 >


</div>                                                                                                                                                                                        
          </div>
        </section> 

</article>
</main>
<?php include 'includes/footer.php'; ?>    
