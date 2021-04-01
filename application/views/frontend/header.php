
<header role="banner">    
    <!-- Top Bar -->
    <div class="top-bar background-white">
    <div class="line">
        <div class="s-12 m-6 l-6">
        <div class="top-bar-contact">
            <p class="text-size-12">Contact Us: <?php echo $companyInfo->mobile_1;?> | <a class="text-orange-hover" href="mailto:<?php echo $companyInfo->email_1;?>"><?php echo $companyInfo->email_1;?></a></p>
        </div>
        </div>
        <div class="s-12 m-6 l-6">
        <div class="right">
            <ul class="top-bar-social right">
            <li><a href="/"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
            <li><a href="/"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
            <li><a href="/"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
            <li><a href="/"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
    
    <!-- Top Navigation -->
    <nav class="background-white background-primary-hightlight">
    <div class="line">
        <div class="s-12 l-2">
        <a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url().$companyInfo->logo_header;?>" alt=""></a>
        </div>
        <div class="top-nav s-12 l-10">
        <p class="nav-text"></p>
        <ul class="right chevron">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <!-- <li><a href="<?php base_url();?>products">Products</a></li> -->
            <li><a href="<?php base_url();?>about">About</a></li>
            <li><a>Products</a>
                <ul>

                    <!-- <li><a>Service 1</a>
                        <ul>
                            <li><a>Service 1 A</a></li>
                            <li><a>Service 1 B</a></li>
                        </ul>
                    </li> -->
                    <?php 
                        $service_result = $this->db->query("SELECT * FROM tbl_services WHERE status = 1 ORDER BY id ASC")->result();
                        foreach($service_result as $service):
                    ?>
                        <li><a href="<?php echo base_url().'service-details-page/'.$service->id;?>"><?php echo $service->title;?></a></li>
                    <?php endforeach;?>
                </ul>
            </li>
            <li><a href="<?php base_url();?>gallery">Cateloge</a></li>
            <li><a href="<?php base_url();?>contact">Contact</a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>