<?php include 'includes/header.php'; 

if(isset($_SESSION['user_email'])){

  $loggedin = true;
  }else{
  $loggedin = false;

  header('location:index.php');
  
  }?> 

  <!-- MAIN -->
  <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/9.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Edit User
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>

        <section class="section background-white" >  
          <div class="line background-white"> 
          <div class="s-12 m-12 l-12 ">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Edit User</b></h3>
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

                  <select name="type" class="required select"  id="">
                      <option value="">admin</option>
                      <option value="">user</option>
                  </select>
                  </div>
                  <div class="s-12 m-12 l-12">
                      <label for="image">Upload new image</label>
                    <input name="image" class=" email" type="file" />
                  </div>

                  <div class="s-12 m-12 l-12">
                    <input name="password" class="required password" placeholder="Put new password"  type="password" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
               
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Edit</button></div>
              </div>    
            </form>
</div>                                                                                                                                                                                        
          </div>
        </section> 

</article>
</main>
<?php include 'includes/footer.php'; ?>    
