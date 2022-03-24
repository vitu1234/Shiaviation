<?php include 'includes/header.php'; 

$sql_fetch_one_services= " SELECT * FROM tbl_services where service_type_id = 1";
$sql_fetch_one_services_run = mysqli_query($conn, $sql_fetch_one_services);
$sql_fetch_one_services_rows = mysqli_num_rows($sql_fetch_one_services_run);

$sql_fetch_two_services= " SELECT * FROM tbl_services where service_type_id = 2";
$sql_fetch_two_services_run = mysqli_query($conn, $sql_fetch_two_services);
$sql_fetch_two_services_rows = mysqli_num_rows($sql_fetch_two_services_run);

$sql_fetch_three_services= " SELECT * FROM tbl_services where service_type_id = 3";
$sql_fetch_three_services_run = mysqli_query($conn, $sql_fetch_three_services);
$sql_fetch_three_services_rows = mysqli_num_rows($sql_fetch_three_services_run);

$sql_fetch_four_services= " SELECT * FROM tbl_services where service_type_id = 4";
$sql_fetch_four_services_run = mysqli_query($conn, $sql_fetch_four_services);
$sql_fetch_four_services_rows = mysqli_num_rows($sql_fetch_four_services_run);


$sql_fetch_all_services= " SELECT * FROM tbl_services where isAvailable = 'yes'";
$sql_fetch_all_services_run = mysqli_query($conn, $sql_fetch_all_services);
$sql_fetch_all_services_rows = mysqli_num_rows($sql_fetch_all_services_run);



if (isset($_POST['order_service'])) {
	$user_id=$user_id;
	$service_id=$_POST['service_id'];
	$additional_info=$_POST['additional_info'];



		 $sql_new_product = " INSERT INTO tbl_user_service (user_id , service_id, additional_info ) VALUES('$user_id' , '$service_id', '$additional_info') ";
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
            Our Services
          </h1>
          <!-- <p class="animated-element text-white">Duis autem vel eum iriure dolor in hendrerit in</p> -->
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section background-white">      
          <div class="line">
            <div class="margin2x">
             
              <div class="s-12 m-6 l-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-support text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">FLIGHT SUPPORT SERVICES</h3>
                  <p>We arrange and coordinate ground handling services for our customers such as</p> 
                  <ul>
                  <?php while ($sql_fetch_one_services_data = mysqli_fetch_assoc($sql_fetch_one_services_run)) {?>
                      <li>
                      <?php echo $sql_fetch_one_services_data['title']; ?> - <?php echo $sql_fetch_one_services_data['description']; ?> 
                      </li>
                  <?php }?>
                     
                      
                  </ul>                 
                </div>
              </div>

              <div class="s-12 m-6 l-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-plane text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">TRAVEL SERVICES</h3>
                  <p>We assist our customers in meeting their unique travel requirements within Africa such as</p>    
                  <ul> 
                  <?php while ($sql_fetch_two_services_data = mysqli_fetch_assoc($sql_fetch_two_services_run)) {?>
                      <li>
                      <?php echo $sql_fetch_two_services_data['title']; ?> 
                      </li>
                  <?php }?>
                  </ul>   
                          
                </div>
              </div>

              <div class="s-12 m-12 l-12 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-star text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">AVIATION QUALITY AND SAFETY</h3>
                  <ul> 
                  <?php while ($sql_fetch_three_services_data = mysqli_fetch_assoc($sql_fetch_three_services_run)) {?>
                      <li>
                      <?php echo $sql_fetch_three_services_data['title']; ?>
                      </li>
                  <?php }?>
                  </ul>                  
                </div>
              </div>

              <div class="s-12 m-12 l-12 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-user text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">AVIATION TRAINING</h3>
                  <ul> 
                  <?php while ($sql_fetch_four_services_data = mysqli_fetch_assoc($sql_fetch_four_services_run)) {?>
                      <li>
                      <?php echo $sql_fetch_four_services_data['title']; ?>
                      </li>
                  <?php }?>
                  </ul>                  
                </div>
              </div>
           
            </div>
          </div>       
        </section>
        
        <!-- Section 2 -->
        <section class="section background-image" style="background-image:url(img/9.jpg)">  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <?php if($loggedin){?>
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Order a Service</b> as <?php echo $name ?></h3>
            <form class="customform " method="post" enctype="multipart/form-data">
              <!-- <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input name="email" class="required email"  placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input name="name" class="required name" placeholder="Your name" title="Your name" type="text" />
                  </div>
                </div>
              </div>             -->
                              
              <div class="line">       
                <div class="s-12">
                  <!-- <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" /> -->
                  <select name="service_id" class=" select"  id="">
                  <?php while ($sql_fetch_all_services_data = mysqli_fetch_assoc($sql_fetch_all_services_run)) {?>
                      <option value=" <?php echo $sql_fetch_all_services_data['id']; ?>"> <?php echo $sql_fetch_all_services_data['title']; ?></option>
                  <?php }?>
                  </select>
                </div>
                <div class="s-12">
                  <textarea name="additional_info" class="message" placeholder="Any other info" rows="3"></textarea>
                </div>
                <div class="s-12"><input value="Order" name="order_service" class="button border-radius text-white background-primary" type="submit"/></div>
              </div>    
            </form>
            <?php }else{ ?>
            <h2 class="text-center"><a href="login.php">Login</a>  to order a service</h2 >
            <?php } ?>
</div>                                                                                                                                                                                        
          </div>
        </section>         
      </article>
    </main>

<?php include 'includes/footer.php'; ?>




  
    