<?php include 'includes/header.php'; ?> 

<?php
if(isset($_SESSION['user_email'])){

  $loggedin = true;
  }else{
  $loggedin = false;

  header('location:index.php');
  
  }
//add new service
if (isset($_POST['add_user'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$isAdmin=$_POST['isAdmin'];
	$password=$_POST['password'];


		 $sql_new_product = " INSERT INTO tbl_users (id , name , email , isAdmin , image,password) VALUES(NULL , '$name' , '$email' , '$isAdmin' ,null, '$password') ";
		 $sql_new_product_run = mysqli_query($conn , $sql_new_product);

		   if ($sql_new_product_run) {
				 //if adding is successful
				 $_SESSION['notification']="<div class=\"alert alert-success\">
				 New user added successfully.
				 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
			   </div>";
		   }else{
			 //if adding  has failed
			   $_SESSION['notification']="<div class=\"alert alert-danger\">
							 Adding user has failed.
							 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
						   </div>";
		   }
 
  }?>
  <!-- MAIN -->
  <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Add User
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        <?php echo $_SESSION['notification']; ?>

        <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Add User</b></h3>
            <form class="customform " method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                <div class="s-12 m-12 l-12">
                    <input name="name" class="required name"  placeholder="Name" title="Name" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="email" class="required email"  placeholder="E-mail" title="E-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">

                  <select name="isAdmin" class="required select"  id="">
                      <option value="yes">admin</option>
                      <option value="no">user</option>
                  </select>
                  </div>
                  <!-- <div class="s-12 m-12 l-12">
                      <label for="image">Image</label>
                    <input name="image" class=" email" type="file" />
                  </div> -->

                  <div class="s-12 m-12 l-12">
                    <input name="password" class="required password" placeholder=" Password"  type="password" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><input class="button border-radius text-white background-primary" type="submit" value="Add User" name="add_user"/></div>
              </div>    
            </form>
</div>                                                                                                                                                                                        
          </div>
        </section> 

</article>
</main>
<?php include 'includes/footer.php'; ?>    
