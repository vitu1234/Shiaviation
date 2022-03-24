<?php include 'includes/header.php'; 
if (isset($_POST['register_user'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile_number=$_POST['mobile_number'];
  $address=$_POST['physical_address'];
	$image = $_FILES["image"]["name"];
  

  move_uploaded_file($_FILES["image"]["tmp_name"],"img/users/".$image);



		 $sql_new_product = "INSERT INTO tbl_users (id ,name,email,isAdmin,profile_image,mobile_number,address,password) VALUES(NULL,'$name','$email','no','$image','$mobile_number','$address','$password') ";
		 $sql_new_product_run = mysqli_query($conn , $sql_new_product);

		   if ($sql_new_product_run) {
                
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
                $image = $sql_fetch_member_data['profile_image'];
                if ($password == $db_password) {
                         # if login is successfull
                             $_SESSION['user_email']=$email;
                             $_SESSION['isAdmin']=$isAdmin;
                             $_SESSION['name']=$name;
                             $_SESSION['user_id']=$user_id;
                             $_SESSION['profile_image']=$image;
                            header('location:index.php');
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
		   }else{
			 //if adding  has failed
			   $_SESSION['notification']="<div class=\"alert alert-danger\">
							 Adding user has failed.
							 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
               </div>";
               echo 'failed'. mysqli_error($conn);
           }
           


           
 
  }?> 

  <!-- MAIN -->
  <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Register
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>

        <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Register</b></h3>
            <form class="customform " method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                <div class="s-12 m-6 l-6">
                    <input name="name" class="required name"  placeholder="Your name" title="Your name" type="text" />
                  </div>
                  <div class="s-12 m-6 l-6">
                    <input name="email" class="required email"  placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-6 l-6">
                    <input name="mobile_number" class="required mobile_number"  placeholder="Your Phone number" title="Your Phone number" type="text" />
                  </div>
                  <div class="s-12 m-6 l-6">
                    <input name="physical_address" class="required"  placeholder="Your physical address" title="Your address" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                      <label for="image">Profile image</label>
                    <input name="image"  type="file" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="password" class="required password" placeholder="Choose password" title="Your password" type="password" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><input value="Register" name="register_user" class="button border-radius text-white background-primary" type="submit"/></div>
              </div>    
            </form>
            <h3 class="text-center">Already have an account? <a href="login.php">Click here to login</a></h3 >
</div>                                                                                                                                                                                        
          </div>
        </section> 

</article>
</main>
<?php include 'includes/footer.php'; ?>    
