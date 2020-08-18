<?php include 'includes/header.php'; 
$sql_fetch_user_orders= " SELECT * FROM sh_aviation.orders";
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
                      <li><a href="#profile">Profile</a></li> 
                                                        
                    </ul>                  
                  </div>
                </aside>  
              </div>
              <!-- Content -->
              <div class="s-12 m-8 l-10">
           
        
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
                    <input name="name" class="required name"  placeholder="Your name" title="Your name" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="email" class="required email"  placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="password" class="required password" placeholder="Choose password" title="Your password" type="password" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Edit</button></div>
              </div>    
            </form> -->
            <hr class="break">

            <div class="line">       
               
               <div class="s-12"><a href="logout.php" class="button border-radius text-white background-red" >Logout</a></div>
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

        
   
