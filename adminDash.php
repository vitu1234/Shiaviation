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

$sql_fetch_user_orders= "SELECT 
`user`.`name` AS `name`,
`user`.`email` AS `email`,
`user_service`.`created_at` AS `created_at`,
`user_service`.`additional_info` AS `additional_info`,
`service`.`title` AS `title`
FROM
((`sh_aviation`.`tbl_user_service` `user_service`
JOIN `sh_aviation`.`tbl_users` `user` ON ((`user_service`.`user_id` = `user`.`id`)))
JOIN `sh_aviation`.`tbl_services` `service` ON ((`user_service`.`service_id` = `service`.`id`)))";
$sql_fetch_user_orders_run = mysqli_query($conn, $sql_fetch_user_orders);
$sql_fetch_user_orders_rows = mysqli_num_rows($sql_fetch_user_orders_run);
?>
 <!-- MAIN -->
 <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
        <img src="img/users/<?php echo $profile_image ?>" style="height:100px;width:100px;margin-left:auto;margin-right:auto;margin-top:50px;border-radius:100%;" class="text-center"/>
        <h4 class="animated-element slow text-extra-thin text-white text-s-size-20 text-m-size-30 text-size-40 text-line-height-1 margin-bottom-10 margin-top-30">
            Admin
          </h4>
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-10 margin-top-30">
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
              <!-- <div class="s-12 m-4 l-2">
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
              </div> -->
              <!-- Content -->
              <div class="s-12 m-12 l-12">
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

              </div> 
            </div>      
          </div>                                                                                                     
        </section>
     


</article>
</main>
<?php include 'includes/footer.php'; ?> 

        
   
