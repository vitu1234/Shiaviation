<?php include 'includes/header.php'; ?> 

<?php
if(isset($_SESSION['user_email'])){

  $loggedin = true;
  }else{
  $loggedin = false;

  header('location:index.php');
  
  }
//add new service
if (isset($_POST['add_service'])) {
	$title=$_POST['title'];
	$type=$_POST['type'];
	$isAvailable=$_POST['isAvailable'];
	$description=$_POST['description'];


		 $sql_new_product = " INSERT INTO tbl_services (id , title , service_type_id , isAvailable , description) VALUES(NULL , '$title' , '$type' , '$isAvailable' , '$description') ";
		 $sql_new_product_run = mysqli_query($conn , $sql_new_product);

		   if ($sql_new_product_run) {
				 //if adding is successful
				 $_SESSION['notification']="<div class=\"alert alert-success\">
				 New service added successfully.
				 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
			   </div>";
		   }else{
			 //if adding  has failed
			   $_SESSION['notification']="<div class=\"alert alert-danger\">
							 Adding service has failed.
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
            Add Service
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        <?php echo $_SESSION['notification']; ?>


        <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Add Service</b></h3>
            <form class="customform " method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                <div class="s-12 m-12 l-12">
                    <input name="title" class="required name"  placeholder="Title" title="Title" type="text" />
                  </div>
                  
                  <div class="s-12 m-12 l-12">

                  <select name="type" class="required select"  id="">
                      <option value="">Select type</option>
                      <option value="1">Flight support services</option>
                      <option value="2">Travel Services</option>
                      <option value="3">Aviation Quality and Safety</option>
                  </select>
                  </div>
                  <div class="s-12 m-12 l-12">

                  <select name="isAvailable" class="required select"  id="">
                      <option value="">Availability</option>
                      <option value="yes">Available</option>
                      <option value="no">Not Available</option>
                  </select>
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="description" class="required "  placeholder="Short description" title="Short description" type="text" />
                  </div>
                
                 
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><input value="Add" class="button border-radius text-white background-primary" type="submit" name="add_service"/></div>
              </div>    
            </form>
</div>                                                                                                                                                                                        
          </div>
        </section> 

</article>
</main>
<?php include 'includes/footer.php'; ?>    
