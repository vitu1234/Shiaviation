<?php include 'includes/header.php'; ?> 
<?php 

if(isset($_SESSION['user_email'])){

  $loggedin = true;
  }else{
  $loggedin = false;

  header('location:index.php');
  
  }
//fetching all selling brands
$id = $_GET['id'];
$type = $_GET['type'];
$isAvailable = $_GET['isAvailable'];
$sql_fetch_single_service= " SELECT * FROM tbl_services where id = $id";
$sql_fetch_single_service_run = mysqli_query($conn, $sql_fetch_single_service);
$sql_fetch_single_service_rows = mysqli_num_rows($sql_fetch_single_service_run);
?>

<?php
//edit new service
if (isset($_POST['edit_service'])) {
	$title=$_POST['title'];
	$type=$_POST['type'];
	$isAvailable=$_POST['isAvailable'];
  $description=$_POST['description'];
  
  
  $sql_edit_service = " UPDATE tbl_services SET title = '$title',service_type_id = '$type',isAvailable = '$isAvailable',description = '$description' WHERE id = '$id' ";


		 $sql_edit_service_run = mysqli_query($conn , $sql_edit_service);

		   if ($sql_edit_service_run) {
				 //if adding is successful
				 $_SESSION['notification']="<div class=\"alert alert-success\">
				 New service edited successfully.
				 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
			   </div>";
		   }else{
			 //if adding  has failed
			   $_SESSION['notification']="<div class=\"alert alert-danger\">
							 Editing service has failed.
							 <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
						   </div>";
       }
       
       header("Location:/adminDash.php");
 
  }?>

  <!-- MAIN -->
  <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Edit Service
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>

        <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Edit Service</b></h3>
            <?php
              while ($sql_fetch_single_services_data = mysqli_fetch_assoc($sql_fetch_single_service_run)) {?>
            <form class="customform " method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                <div class="s-12 m-12 l-12">
                    <input name="title" class=" name"  value="<?php echo $sql_fetch_single_services_data['title']; ?>" type="text" />
                  </div>
                  
                  <div class="s-12 m-12 l-12">

                  <select name="type" class=" select" >
                      <option value="<?php echo $sql_fetch_single_services_data['service_type_id']; ?>"><?php echo $type;?></option>
                      <option value="1">Flight support services</option>
                      <option value="2">Travel Services</option>
                      <option value="3">Aviation Quality and Safety</option>
                  </select>
                  </div>
                  <div class="s-12 m-12 l-12">

                  <select name="isAvailable" class=" select"  id="">
                      <option value="<?php echo $sql_fetch_single_services_data['isAvailable']; ?>"><?php echo $isAvailable;?></option>
                      <option value="yes">Available</option>
                      <option value="no">Not Available</option>
                  </select>
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="description" value="<?php echo $sql_fetch_single_services_data['description']; ?>" type="text" />
                  </div>
                
                 
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit" name="edit_service">Edit</button></div>
              </div>    
            </form>
              <?php }?>
</div>                                                                                                                                                                                        
          </div>
        </section> 

</article>
</main>
<?php include 'includes/footer.php'; ?>    
