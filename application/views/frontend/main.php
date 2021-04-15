
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
                        <p class="text-white text-size-16 margin-bottom-40"><?php echo substr($slide->description, 0, 50)?></p>
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

    <center>
        <font style="color: green; font-weight: bold;">
            <?php
                $message = $this->session->userdata('message');
                //echo $message;
                if (isset($message)) {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
            ?>
        </font>
    </center>
    
    <!-- Section 1 -->
    <section class="section section-services background-white"> 
    <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Services</span></h2>
    <div class="line">
        <div class="margin">

            <?php $service = $this->db->query("SELECT * FROM tbl_services WHERE  id = '1' ")->row(); ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px; min-height: 390px;">
                <a href="<?php echo base_url().'lumitech-power'?>"><img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt=""></a>
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo substr($service->details, 0, 50);?>...</p> 
                <a class="text-more-info text-primary-hover" style="font-weight: bold;" href="<?php echo base_url().'lumitech-power'?>">Details</a>                
            </div>

            <?php $service = $this->db->query("SELECT * FROM tbl_services WHERE  id = '2' ")->row(); ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px; min-height: 390px;">
                <a href="<?php echo base_url().'lumitech-professional-lighting'?>"><img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt=""></a>
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo substr($service->details, 0, 50);?>...</p> 
                <a class="text-more-info text-primary-hover" style="font-weight: bold;" href="<?php echo base_url().'lumitech-professional-lighting'?>">Details</a>                
            </div>
            
            <?php $service = $this->db->query("SELECT * FROM tbl_services WHERE  id = '3' ")->row(); ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px; min-height: 390px;">
                <a href="<?php echo base_url().'lumitech-chemicals-and-dyes'?>"><img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt=""></a>
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo substr($service->details, 0, 50);?>...</p> 
                <a class="text-more-info text-primary-hover" style="font-weight: bold;" href="<?php echo base_url().'lumitech-chemicals-and-dyes'?>">Details</a>                
            </div>
            
            <?php $service = $this->db->query("SELECT * FROM tbl_services WHERE  id = '4' ")->row(); ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px; min-height: 390px;">
                <a href="<?php echo base_url().'lumitech-construction'?>"><img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt=""></a>
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo substr($service->details, 0, 50);?>...</p> 
                <a class="text-more-info text-primary-hover" style="font-weight: bold;" href="<?php echo base_url().'lumitech-construction'?>">Details</a>                
            </div>
            
            <?php $service = $this->db->query("SELECT * FROM tbl_services WHERE  id = '5' ")->row(); ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px; min-height: 390px;">
                <a href="<?php echo base_url().'lumitech-organic'?>"><img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt=""></a>
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo substr($service->details, 0, 50);?>...</p> 
                <a class="text-more-info text-primary-hover" style="font-weight: bold;" href="<?php echo base_url().'lumitech-organic'?>">Details</a>                
            </div>
            
            <?php $service = $this->db->query("SELECT * FROM tbl_services WHERE  id = '6' ")->row(); ?>
            <div class="s-12 m-12 l-4 margin-m-bottom" style="margin: 15px 0px; min-height: 390px;">
                <a href="<?php echo base_url().'lumitech-denim-fabric-and-garments'?>"><img class="margin-bottom" src="<?php echo base_url().$service->service_image;?>" alt=""></a>
                <h2 class="text-thin"><?php echo $service->title;?></h2>
                <p><?php echo substr($service->details, 0, 50);?>...</p> 
                <a class="text-more-info text-primary-hover" style="font-weight: bold;" href="<?php echo base_url().'lumitech-denim-fabric-and-garments'?>">Details</a>                
            </div>
        
        
        </div>
    </div>
    </section>


    <!-- Section Project Completed -->
    <section class="section project-completed background-white"> 
        <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Our completed <span class="text-primary"><a href="<?php echo base_url().'all-projects';?>">Projects</a></span></h2>
        <div class="line">
            <div class="margin">
            <?php 
                $project_result = $this->db->query("SELECT * FROM tbl_projects WHERE status = 1 ORDER BY id DESC")->result();
                foreach($project_result as $project):
            ?>
                <div class="s-6 m-6 l-3 margin-m-bottom project-ara">
                    <img class="margin-bottom" src="<?php echo base_url().$project->project_image;?>" alt="">
                    <div class="text-center">
                        <h2 class="text-thin"><?php echo $project->title;?></h2>
                        <p><?php echo $project->details;?></p> 
                        <a class="text-more-info text-primary-hover" href="<?php echo base_url().'project-details/'.$project->id;?>">Read more</a>                
                    </div>
                </div>
            <?php endforeach;?>

            
            </div>
        </div>
    </section>

    
    <!-- Section 2 -->
    <!-- <section class="section background-primary text-center">
        <div class="line">
            <div class="s-12 m-10 l-8 center">
                <h2 class="headline text-thin text-s-size-30">PROJECT CYCLE</h2>
                <p class="text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
            </div>
        </div>  
    </section> -->
    
    <!-- Section 3 -->
    <!-- <section class="section background-white">
    <div class="full-width text-center">
        <img class="center margin-bottom-30" style="margin-top: -210px;" src="<?php echo base_url();?>assets/frontend/img/bio.png" alt="">
        
    </div>  
    </section> -->
    <hr class="break margin-top-bottom-0">
    
    <!-- Section 4 --> 
    <section class="section background-white">
    <div class="line">
        <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary"><a href="<?php echo base_url().'all-news';?>">NEWS</a></span></h2>
        <div class="carousel-default owl-carousel carousel-wide-arrows">

        <?php 
            $news_result = $this->db->query("SELECT * FROM tbl_news WHERE status = 1 ORDER BY id DESC")->result();
            foreach($news_result as $news):
        ?>            
            <div class="item"> 
                <div class="margin">
                    <div class="s-12 m-12 l-12">
                        <div class="image-border-radius">
                            <div class="margin">
                                <div class="s-12 m-12 l-4 margin-m-bottom">
                                    <a class="image-hover-zoom" href="#"><img src="<?php echo base_url().$news->news_image;?>" alt=""></a>
                                </div>
                                <div class="s-12 m-12 l-8">
                                    <h3><a class="text-dark text-primary-hover" href="<?php echo base_url().'news-details/'.$news->id?>"><?php echo $news->title;?></a></h3>
                                    <p><?php echo $news->details;?></p>
                                    <a class="text-more-info text-primary-hover" href="<?php echo base_url().'news-details/'.$news->id?>">Read more</a>
                                </div>
                            </div>  
                        </div>
                    </div> 
                </div>
            </div>
        
        <?php endforeach;?>
        
        </div>
    </div>    
    </section>


    <!-- Section 5 --> 
    <section class="section section-client background-white">
    <div class="line">
        <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Our Valid <span class="text-primary">Clients</span></h2>
        <div class="carousel-client owl-carousel carousel-wide-arrows">
        
        <?php 
            $client_result = $this->db->query("SELECT * FROM tbl_client WHERE status = 1 ORDER BY id DESC")->result();
            foreach($client_result as $client):
        ?> 
            <div class="item"> 
                <div class="s-6 m-4 l-12 margin-m-bottom">
                    <a class="image-hover-zoom" href="#"><img src="<?php echo base_url().$client->client_image;?>" alt=""></a>
                </div>
            </div>
        <?php endforeach;?>

        
        </div>
    </div>    
    </section>
    
</main>