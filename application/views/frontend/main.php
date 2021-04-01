<!-- MAIN -->
<main role="main">
    <!-- Main Carousel -->
    <section class="section background-dark">
    <div class="line">
        <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
        <?php 
            $sliders = $this->db->query("SELECT * FROM tbl_sliders Where  NOT (status <=> '0')  ORDER BY order_by ASC")->result();
            foreach($sliders as $slide):
        ?>
            <div class="item">
                <div class="s-12 center">
                <img src="<?php echo base_url().$slide->slider_img;?>" alt="">
                <div class="carousel-content">
                    <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                        <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"><?php echo $slide->title?></p>
                        <p class="text-white text-size-16 margin-bottom-40"><?php echo $slide->description?></p>  
                    </div>                  
                    </div>
                </div>
                </div>
            </div>
        
        <?php
            endforeach;
        ?>

        </div>  
    </div>
    </section>
    
    <!-- Section 1 -->
    <section class="section section-services background-white"> 
    <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Services</span></h2>
    <div class="line">
        <div class="margin">
        <?php 
            $service_result = $this->db->query("SELECT * FROM tbl_services WHERE status = 1 ORDER BY id DESC")->result();
            foreach($service_result as $service):
        ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px;">
                <img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt="">
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo $service->details;?></p> 
                <a class="text-more-info text-primary-hover" href="<?php echo base_url().'service-details-page/'.$service->id;?>">Read more</a>                
            </div>
        <?php endforeach;?>

        
        </div>
    </div>
    </section>


    <!-- Section Project Completed -->
    <section class="section project-completed background-white"> 
        <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Our completed <span class="text-primary"><a href="<?php echo base_url().'all-projects';?>">Projects</a></span></h2>
        <div class="line">
            <div class="margin">
            <?php 
                $service_result = $this->db->query("SELECT * FROM tbl_services WHERE status = 1 ORDER BY id DESC")->result();
                foreach($service_result as $service):
            ?>
                <div class="s-6 m-6 l-3 margin-m-bottom project-ara">
                    <img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt="">
                    <div class="text-center">
                        <h2 class="text-thin"><?php echo $service->title;?></h2>
                        <p><?php echo $service->details;?></p> 
                        <a class="text-more-info text-primary-hover" href="<?php echo base_url().'service-details-page/'.$service->id;?>">Read more</a>                
                    </div>
                </div>
            <?php endforeach;?>

            
            </div>
        </div>
    </section>

    
    <!-- Section 2 -->
    <section class="section background-primary text-center">
        <div class="line">
            <div class="s-12 m-10 l-8 center">
                <h2 class="headline text-thin text-s-size-30">PROJECT CYCLE</h2>
                <p class="text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
            </div>
        </div>  
    </section>
    
    <!-- Section 3 -->
    <section class="section background-white">
    <div class="full-width text-center">
        <img class="center margin-bottom-30" style="margin-top: -210px;" src="<?php echo base_url();?>assets/frontend/img/bio.png" alt="">
        
        <!-- <div class="line">
            <h2 class="headline text-thin text-s-size-30">Fully <span class="text-primary">Responsive</span> HTML5 Template</h2>
            <p class="text-size-20 text-s-size-16 text-thin">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
            <i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
            <p class="text-size-20 text-s-size-16 text-thin text-primary">Try resize your browser window</p>
        </div>  -->

    </div>  
    </section>
    <hr class="break margin-top-bottom-0">
    
    <!-- Section 4 --> 
    <section class="section background-white">
    <div class="line">
        <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">NEWS</span></h2>
        <div class="carousel-default owl-carousel carousel-wide-arrows">
        <div class="item">
            <div class="margin"> 
            <div class="s-12 m-12 l-6">
                <div class="image-border-radius margin-m-bottom">
                <div class="margin">
                    <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-05.jpg" alt=""></a>
                    </div>
                    <div class="s-12 m-12 l-8 margin-m-bottom">
                    <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                    </div>
                </div>  
                </div>
            </div>
            <div class="s-12 m-12 l-6">
                <div class="image-border-radius">
                <div class="margin">
                    <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-03.jpg" alt=""></a>
                    </div>
                    <div class="s-12 m-12 l-8">
                    <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                    </div>
                </div>  
                </div>
            </div> 
            </div>
        </div>

        <div class="item"> 
            <div class="margin"> 
            <div class="s-12 m-12 l-6">
                <div class="image-border-radius margin-m-bottom">
                <div class="margin">
                    <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
                    </div>
                    <div class="s-12 m-12 l-8 margin-m-bottom">
                    <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                    </div>
                </div>  
                </div>
            </div>
            <div class="s-12 m-12 l-6">
                <div class="image-border-radius">
                <div class="margin">
                    <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-02.jpg" alt=""></a>
                    </div>
                    <div class="s-12 m-12 l-8">
                    <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                    </div>
                </div>  
                </div>
            </div> 
            </div>
        </div>

        <div class="item">
            <div class="margin"> 
            <div class="s-12 m-12 l-6">
                <div class="image-border-radius margin-m-bottom">
                <div class="margin">
                    <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-01.jpg" alt=""></a>
                    </div>
                    <div class="s-12 m-12 l-8 margin-m-bottom">
                    <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                    </div>
                </div>  
                </div>
            </div>
            <div class="s-12 m-12 l-6">
                <div class="image-border-radius">
                <div class="margin">
                    <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
                    </div>
                    <div class="s-12 m-12 l-8">
                    <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                    </div>
                </div>  
                </div>
            </div> 
            </div>
        </div>
        </div>
    </div>    
    </section>


    <!-- Section 5 --> 
    <section class="section section-client background-white">
    <div class="line">
        <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Our Valid <span class="text-primary">Clients</span></h2>
        <div class="carousel-client owl-carousel carousel-wide-arrows">
        
        
        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>

        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>

        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>

        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>
        
        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>

        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>

        <div class="item"> 
            <div class="s-6 m-4 l-12 margin-m-bottom">
                <a class="image-hover-zoom" href="/"><img src="<?php echo base_url();?>assets/frontend/img/blog-06.jpg" alt=""></a>
            </div>
        </div>


        
        

        </div>
    </div>    
    </section>
    
</main>