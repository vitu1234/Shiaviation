<?php include 'includes/header.php'; ?> 
<?php 
if(isset($_SESSION['user_email'])){

  $loggedin = true;
  }else{
  $loggedin = false;

  header('location:index.php');
  
  }

//fetching all selling brands
$sql_fetch_all_services= " SELECT serv.isAvailable as isAvailable, serv.id as id, serv.title as serv_title, serv.description as serv_desc, typee.title as type_title, typee.description as type_desc FROM tbl_services as serv, tbl_service_type as typee where serv.service_type_id = typee.id ";
$sql_fetch_all_services_run = mysqli_query($conn, $sql_fetch_all_services);
$sql_fetch_all_services_rows = mysqli_num_rows($sql_fetch_all_services_run);

$sql_fetch_all_users= " SELECT * FROM tbl_users ";
$sql_fetch_all_users_run = mysqli_query($conn, $sql_fetch_all_users);
$sql_fetch_all_users_rows = mysqli_num_rows($sql_fetch_all_users_run);

$sql_fetch_user_orders= " SELECT * FROM sh_aviation.orders";
$sql_fetch_user_orders_run = mysqli_query($conn, $sql_fetch_user_orders);
$sql_fetch_user_orders_rows = mysqli_num_rows($sql_fetch_user_orders_run);
?>
 <!-- MAIN -->
 <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            <?php echo $name; ?>
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>


             <!-- Section 1 -->
             <section class="section background-white">      
          <div class="line"> 
            <div class="margin">
              <!-- Sidebar -->
              <div class="s-12 m-4 l-2">
                <aside class="aside-left">                  
                  <div class="aside-nav background-primary-hightlight">                    
                    <ul class="chevron">                      
                      <li><a href="#orders">Orders</a></li> 
                      <li><a href="#users">Users</a></li> 
                      <li><a href="#services">Services</a></li> 
                      <li><a href="#profile">Profile</a></li> 
                                                        
                    </ul>                  
                  </div>
                </aside>  
              </div>
              <!-- Content -->
              <div class="s-12 m-8 l-10">
              <div id="orders"></div>  
    
    <h2>Ordered Services</h2>
    <div class="line">
      <table>
      <thead>
      <tr>
      <th>User Name</th>
      <th>Email</th>
      <th>Service Ordered</th>
     
      </tr>
      </thead>
      <tbody>
      <?php while ($sql_fetch_user_orders_data = mysqli_fetch_assoc($sql_fetch_user_orders_run)) {?>
                    <tr>
                    <td><?php echo $sql_fetch_user_orders_data['name']; ?></td>
                    <td><?php echo $sql_fetch_user_orders_data['email']; ?></td>
                    <td><?php echo $sql_fetch_user_orders_data['title']; ?></td>
                    </tr>
              <?php }?>
      </tbody>
      </table>
      </div> 

    <hr class="break">
           
        
                  <div id="users"></div>  
    
                  <h2>Users</h2>
                  <h2 class="text-right"><a href="addAdmin.php" class="button border-radius text-white background-primary">Add User</a></h2>
                  <div class="line">
                    <table>
                    <thead>
                    <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>isAdmin</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                    <?php
              while ($sql_fetch_all_users_data = mysqli_fetch_assoc($sql_fetch_all_users_run)) {?>
                    <tr>
                    <td><?php echo $sql_fetch_all_users_data['name']; ?></td>
                    <td><?php echo $sql_fetch_all_users_data['email']; ?></td>
                    <td><?php echo $sql_fetch_all_users_data['isAdmin']; ?></td>
                    </tr>
              <?php }?>
               
                    </tbody>
                    </table>
                    </div> 

                  <hr class="break">
                  <div id="services"></div>  
    
                  <h2>Services</h2>
                  <h2 class="text-right"><a href="addService.php" class="button border-radius text-white background-primary">Add service</a></h2>
                  <div class="line">
                    <table>
                    <thead>
                    <tr>
                    <th>Service Name</th>
                    <th>Service Group</th>
                    <th>Description</th>
                    <th>isAvailable</th>
                    <th>Action</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                      <?php
              while ($sql_fetch_all_services_data = mysqli_fetch_assoc($sql_fetch_all_services_run)) {?>

                    <tr>
                    <td><?php echo $sql_fetch_all_services_data['serv_title']; ?></td>
                    <td><?php echo $sql_fetch_all_services_data['type_title']; ?></td>
                    <td><?php echo $sql_fetch_all_services_data['serv_desc']; ?></td>
                    <td><?php echo $sql_fetch_all_services_data['isAvailable']; ?></td>
                    <td><a href="editService.php?id=<?php echo $sql_fetch_all_services_data['id']; ?>&type=<?php echo $sql_fetch_all_services_data['type_title']; ?>&isAvailable=<?php echo $sql_fetch_all_services_data['isAvailable']; ?>" class="button border-radius text-white background-green">Edit</a></td>
                    </tr>
              <?php }?>
                  
                    </tbody>
                    </table>
                    </div> 

                  <hr class="break">
                  <div id="profile"></div>  
                  <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <!-- <h3 class="text-size-30 margin-bottom-40 text-center"><b>Your profile</b></h3>
            <form class="customform " method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                <div class="s-12 m-12 l-12">
                    <input name="name" class="required name" value="<?php echo $name ?>"  placeholder="Your name" title="Your name" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="email" class="required email" value="<?php echo $user_email ?>"  placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="password" class="required password" placeholder="New password" title="Your password" type="password" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Edit</button></div>
              </div>    
            </form> -->
            <hr class="break">

            <div class="line">       
               
               <div class="s-12"><a href="logout.php" class="button border-radius text-white background-red" type="submit">Logout</a></div>
             </div> 
</div>                                                                                                                                                                                        
          </div>
        </section> 
              </div> 
            </div>      
          </div>                                                                                                     
        </section>
     


</article>
</main>
<?php include 'includes/footer.php'; ?> 

        
   
