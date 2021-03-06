
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
            <li><a>About Lumitech</a>
                <ul>
                    <li><a href="<?php echo base_url();?>introduction">Introduction</a></li>
                    <li><a href="<?php base_url();?>about">Mission, Vission & Core Value</a></li>
                    <li><a href="<?php base_url();?>key-milestone">Key Milestone</a></li>
                    <li><a href="<?php base_url();?>bod">BOD</a></li>
                </ul>
            </li>
            <li><a>Products & Service</a>
                <ul>

                    <!-- <li><a>Service 1</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>gallery">Service 1 A</a></li>
                            <li><a href="<?php echo base_url();?>contact">Service 1 A</a></li>
                        </ul>
                    </li> -->

                    <!-- <?php 
                        //$service_result = $this->db->query("SELECT * FROM tbl_services WHERE status = 1 ORDER BY id ASC")->result();
                        //foreach($service_result as $service):
                    ?>
                        <li><a href="<?php echo base_url().'service-details-page/'.$service->id;?>"><?php echo $service->title;?></a></li>
                    <?php //endforeach;?> -->

                        <li><a href="<?php echo base_url();?>lumitech-chemicals-and-dyes">Lumitech Chemicals and Dyes</a></li>
                        <li><a href="<?php echo base_url();?>lumitech-professional-lighting">Lumitech Professional Lighting</a></li>
                        <li><a href="<?php echo base_url();?>lumitech-power">Lumitech Power</a></li>
                        <li><a href="<?php echo base_url();?>lumitech-construction">Lumitech Construction</a></li>
                        <li><a href="<?php echo base_url();?>lumitech-organic">Lumitech Organic</a></li>
                        <li><a href="<?php echo base_url();?>lumitech-denim-fabric-and-garments">Lumitech Denim fabric and Garments</a></li>
                </ul>
            </li>
            <li><a href="<?php base_url();?>download">Download</a></li>
            <li><a href="<?php base_url();?>contact">Contact</a></li>
            <li><a>Carrier</a>
                <ul>
                    <li><a href="<?php base_url();?>working-invironment">Working Invironment</a></l>
                    <li><a href="<?php base_url();?>job-vacancy">Job Vacancy</a></l>
                </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>