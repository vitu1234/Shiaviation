<?php include 'includes/header.php'; 
// $sql_fetch_user_orders= " SELECT * FROM sh_aviation.orders";
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

if(isset($_SESSION['user_email'])){

  $loggedin = true;
  }else{
  $loggedin = false;

  header('location:index.php');
  
  }
?> 
 <!-- MAIN -->
 <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
        <img src="img/users/<?php echo $profile_image?>" style="height:100px;width:100px;margin-left:auto;margin-right:auto;margin-top:50px;border-radius:100%;" class="text-center"/>

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
          
              <!-- Content -->
              <div class="s-12 m-12 l-12">
           
        
                  <div id="orders"></div>  
    
                  <h2>Your Orders</h2>
                  <div class="line">
                    <table>
                    <thead>
                    <tr>
                    <th>Service Name</th>
                    <th>Additional Info</th>
                    <th>Progress</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($sql_fetch_user_orders_data = mysqli_fetch_assoc($sql_fetch_user_orders_run)) {
                      if( $sql_fetch_user_orders_data['email'] == $user_email){?>
                    <tr>
                    <td><?php echo $sql_fetch_user_orders_data['title']; ?> </td>
                    <td><?php echo $sql_fetch_user_orders_data['additional_info']; ?></td>
                    <td></td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                    </table>
                    </div> 

              </div> 
            </div>      
          </div>                                                                                                     
        </section>
     


</article>
</main>
<?php include 'includes/footer.php'; ?> 

        
   
