<?php include 'includes/header.php'; ?>
<?php


//fetching all selling brands
$sql_fetch_all_services= " SELECT * FROM tbl_service_type ";
$sql_fetch_all_services_run = mysqli_query($conn, $sql_fetch_all_services);
$sql_fetch_all_services_rows = mysqli_num_rows($sql_fetch_all_services_run);


?>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Carousel -->
      <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark">
        <div class="item">
          <div class="s-12 center">
            <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
            <div class="section text-center background-image-zoom-out">
              <!-- ZOOMED Carousel Image -->
              <div class="background-image background-image-object" style="background-image:url(img/6.jpg)"></div>
                            
              <div class="line">
                <p class="text-extra-thin animated-carousel-element text-white text-s-size-30 text-m-size-40 text-size-60 margin-bottom-40 margin-top-130">
                  SH Aviation is an independent<br>
                  Malawi owned company
                </p>
              </div>

              <div class="margin-top-60 line text-center">
                <div class="margin2x">
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element slow icon-eye icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element text-strong text-size-20 margin-top-bottom-30">Our Vision</h3>
                      <p class="animated-element slow margin-bottom-30 text-white">To become a platinum and first class leader in Aviation Industry.</p>
                    </div>
                  </div>
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element icon-sli-layers icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element slow text-strong text-size-20 margin-top-bottom-30">Our Mission</h3>
                      <p class="animated-element margin-bottom-30 text-white">To offer excellent and uncompromised services to our customers.</p>
                    </div>
                  </div>
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element slow icon-sli-microphone icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element text-strong text-size-20 margin-top-bottom-30">Our Slogan</h3>
                      <p class="animated-element slow margin-bottom-30 text-white">Enjoy the height as we take care of the ground works.</p>
                    </div>
                  </div>
                </div>    
              </div>
            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="s-12 center">
            <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
            <div class="section text-center background-image-zoom-out">
              <!-- ZOOMED Carousel Image -->
              <div class="background-image background-image-object" style="background-image:url(img/5.jpg)"></div>
              
              <div class="line">
                <p class="text-extra-thin animated-carousel-element text-white text-s-size-30 text-m-size-40 text-size-60 margin-bottom-40 margin-top-130">
                  We provide platinum and first class<br>
                  services in Aviation Industry
                </p>
              </div>

              <div class="margin-top-60 line text-center">
                <div class="margin2x">
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element slow icon-eye icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element text-strong text-size-20 margin-top-bottom-30">Our Vision</h3>
                      <p class="animated-element slow margin-bottom-30 text-white">To become a platinum and first class leader in Aviation Industry.</p>
                    </div>
                  </div>
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element icon-sli-layers icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element slow text-strong text-size-20 margin-top-bottom-30">Our Mission</h3>
                      <p class="animated-element margin-bottom-30 text-white">To offer excellent and uncompromised services to our customers.</p>
                    </div>
                  </div>
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element slow icon-sli-microphone icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element text-strong text-size-20 margin-top-bottom-30">Our Slogan</h3>
                      <p class="animated-element slow margin-bottom-30 text-white">Enjoy the height as we take care of the ground works.</p>
                    </div>
                  </div>
                </div>    
              </div>
            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="s-12 center">
            <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
            <div class="section text-center background-image-zoom-out">
              <!-- ZOOMED Carousel Image -->
              <div class="background-image background-image-object" style="background-image:url(img/9.jpg)"></div>
              
              <div class="line">
                <p class="text-extra-thin animated-carousel-element text-white text-s-size-30 text-m-size-40 text-size-60 margin-bottom-40 margin-top-130">
                  Enjoy the height<br>
                  as we take care of the ground works
                </p>
              </div>

              <div class="margin-top-60 line text-center">
                <div class="margin2x">
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element slow icon-eye icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element text-strong text-size-20 margin-top-bottom-30">Our Vision</h3>
                      <p class="animated-element slow margin-bottom-30 text-white">To become a platinum and first class leader in Aviation Industry.</p>
                    </div>
                  </div>
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element icon-sli-layers icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element slow text-strong text-size-20 margin-top-bottom-30">Our Mission</h3>
                      <p class="animated-element margin-bottom-30 text-white">To offer excellent and uncompromised services to our customers.</p>
                    </div>
                  </div>
                  <div class="m-12 l-4 margin-bottom-40">
                    <div class="block">
                      <i class="animated-element slow icon-sli-microphone icon2x background-primary icon-circle text-white center background-transparent"></i>
                      <h3 class="animated-element text-strong text-size-20 margin-top-bottom-30">Our Slogan</h3>
                      <p class="animated-element slow margin-bottom-30 text-white">Enjoy the height as we take care of the ground works.</p>
                    </div>
                  </div>
                </div>    
              </div>
            </div>
          </div>
        </div>             
      </div>
      
      
    
      
      <!-- Section 2 -->
      <section class="section background-white">  
        <div class="line text-center">
          <i class="icon-pen text-primary text-size-40"></i>
          <h2 class="text-size-50 text-m-size-40">Our <b>Objectives</b></h2>
          <hr class="break background-primary break-small break-center margin-bottom-50">
        </div>
        <div class="line"> 
          <div class="margin">
            <div class="s-12 m-6 margin-bottom">
              <div class="hover-zoom">
                <a href="about.php" class="background-image section-block s-12" style="background-image:url(img/product-01.jpg)">
                  <h3 class="text-strong text-white">Customer Service</h3> 
                  <p class="text-white">To make all applications and approval processes for our customers hustle free and to assist them in full utilization of services offered by SH Aviation.</p> 
                </a>
              </div>	
            </div>
            <div class="s-12 m-6 margin-bottom">
              <div class="hover-zoom">
                <a href="about.php" class="background-image section-block s-12" style="background-image:url(img/product-02.jpg)">
                  <h3 class="text-strong text-white">Service Provision</h3> 
                  <p class="text-white">We aim to provide all services required by the customer under one roof and to embody the motto of <em><i>Enjoy the heights as we take care of the ground works.</i></em>.</p> 
                </a>
              </div>		
            </div>
            <div class="s-12 m-6 margin-bottom">
              <div class="hover-zoom">
                <a href="about.php" class="background-image section-block s-12" style="background-image:url(img/product-03.jpg)">
                  <h3 class="text-strong text-white">Query Handling</h3> 
                  <p class="text-white">To handle all queries efficiently, swiftly and accurately in order to maintain a good working relationship with our customers.</p> 
                </a>
              </div>		
            </div>
            <div class="s-12 m-6 margin-bottom">
              <div class="hover-zoom">
                <a href="about.php" class="background-image section-block s-12" style="background-image:url(img/product-04.jpg)">
                  <h3 class="text-strong text-white">Knowledge Enhancement</h3> 
                  <p class="text-white">To continually improve our aviation knowledge base, in order to provide accurate operational information to all customers.</p> 
                </a>
              </div>		
            </div>
          </div>  
        </div>  
      </section> 
      
      <!-- Section 3 -->
      <section class="section background-parallax-container" data-image-src="img/parallax-04.jpg">  
        <div class="line">
          <div class="s-12 m-12 l-7 center">
            <div class="frame-block border-primary">
              <h3 class="text-primary text-size-30 margin-bottom-20 text-center">Our <b>Goals</b></h3>
              <ol class="text-white">
                <li>To achieve maximum growth of our customers and service providers.</li><br>
                <li>To grow SH Aviation network beyond Africa.</li><br>
                <li>To serve our customers with honesty and integrity.</li><br>
              </ol>
              
              <!-- <a href="about-us.html"><i class="icon-sli-paper-plane text-primary text-size-40 margin-top-30"></i></a> -->
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 4 -->
      <section class="section background-white">
        <div class="line text-center">
          <i class="icon-sli-diamond text-primary text-size-40"></i>
          <h2 class="text-size-50 text-m-size-40">Our <b>Services</b></h2>
          <hr class="break background-primary break-small break-center margin-bottom-50">
        </div>
        <div class="line">
          <div class="margin2x">
            <div class="m-12 l-6">
              <div class="margin2x">
                <?php
              while ($sql_fetch_all_services_data = mysqli_fetch_assoc($sql_fetch_all_services_run)) {?>
                <div class="l-12 xl-12 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-plane text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20"><?php echo $sql_fetch_all_services_data['title']; ?> </h3>
                    <p><?php echo $sql_fetch_all_services_data['description']; ?>  </p>
                    <a class="text-more-info text-primary" href="services.php">Read more</a>                
                  </div>
                </div>
              <?php }?>
                <!-- <div class="l-12 xl-12 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-layers text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Travel Services</h3>
                    <p>We assist our customers in meeting their unique travel requirements within Africa </p>
                    <a class="text-more-info text-primary" href="services.php">Read more</a>                
                  </div>
                </div>
                <div class="l-12 xl-12 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-share text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Aviation Quality and Safety</h3>
                    <p>We assist in the setting up of new airlines</p>
                    <a class="text-more-info text-primary" href="services.php">Read more</a>                 
                  </div>
                </div> -->
              </div>
            </div>
              
            <div class="m-12 l-6">
              <img src="img/a8.jpg" alt="">
            </div>
          </div>    
        </div>
      </section>
      
      <!-- Section 5 -->
      <!-- <section class="background-primary full-width">        
        <div class="m-12 l-6 xl-5 xxl-4">
          <img class="full-img" src="img/img-02.jpg"/>
        </div>         
        <div class="m-12 l-6 xl-7 xxl-8">
          <div class="l-12 xl-11 xxl-8 padding-2x">
            <h2 class="text-l-size-40 text-size-50 text-white"><b>Why</b> choose us</h2>
            <p class="margin-bottom">We provide excellent flight support services to customers with professionalism.</p>
         
          </div>  
        </div>
      </section> -->
      <section class="section-small-padding background-dark text-center">
        <div class="line">
          <div class="s-12 m-12 l-9 center margin-bottom-30">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-10"><b>Why</b> choose us</h3>
            <p class="margin-bottom">We provide excellent flight support services to customers with professionalism.</p>
          </div>
        </div>            
        <div class="line">  
          <div class="s-12 m-12 l-3 center">
            <a href="contact.php" class="s-12 button border-radius background-primary text-size-20 text-white">Contact Us</a>
          </div>
        </div>
      </section>  
      
      <!-- Section 8 -->
      <section class="section background-white">
        <div class="line text-center">
          <i class="icon-sli-people text-primary text-size-40"></i>
          <h2 class="text-dark text-size-50 text-m-size-40">Our <b> Team</b></h2>
          <hr class="break background-primary break-small break-center margin-bottom-50">
        </div>
        <div class="line">    
          <div class="carousel-blocks owl-carousel">                                                                                              
                   
            <div class="item">                                                                                                                                                                                                     
              <div class="image-border-radius image-with-hover-overlay">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content padding">
                    <p>Self-motivated, innovative and forward thinking person.</p>
                  </div> 
                </div>  
                <img src="img/hastings.png"/>
              </div>                                                                                                                                                                                                              
              <div class="margin-top">                                                                                                                                         
                <h4 class="text-strong margin-bottom-10">Hastings Laison Jailosi</h4>                        
                <p class="margin-bottom-10 text-primary text-uppercase">Operations Director</p>                                                                                                                                          
                <!-- <div class="line">
                  <a href="/"><i class="icon-facebook_circle text-primary-hover text-size-25"></i></a> <a href="/"><i class="icon-instagram_circle text-primary-hover text-size-25"></i></a>
                </div>                                                                                                                                                                                                                                            -->
              </div>                                                                                                                                                            
            </div>              
            <div class="item">                                                                                                                                                                                                     
              <div class="image-border-radius image-with-hover-overlay">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content padding">
                    <p>Her commitment as a Malawian Sales and Marketing plus Business Development professional has shaped her experiences in the profession.</p>
                  </div> 
                </div>  
                <img src="img/selina.png"/>
              </div>                                                                                                                                                                                                              
              <div class="margin-top">                                                                                                                                         
                <h4 class="text-strong margin-bottom-10">Sellina Mhango</h4>                        
                <p class="margin-bottom-10 text-primary text-uppercase">Commercial Director</p>                                                                                                                                          
                <!-- <div class="line">
                  <a href="/"><i class="icon-linked_in_circle text-primary-hover text-size-25"></i></a> <a href="/"><i class="icon-instagram_circle text-primary-hover text-size-25"></i></a>
                </div>                                                                                                                                                                                                                                           -->
              </div>                                                                                                                                                           
            </div>              
                       
                                                                                                                       
          </div>
        </div>
      </section> 
      
  
      
    </main>
  <?php include 'includes/footer.php'; ?>