<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/febric_garments.png" style="height: 50px;"/>Lumitech Denim Fabric and Garments</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            <!-- <div class="s-12 m-2 l-2 margin-m-bottom-30">

                <ul class="products-ul">
                    <?php
                        $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '6' AND NOT (status <=> '0') ")->result();
                        foreach ($producstMenu as $productCat): 
                    ?>
                        <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                    <?php endforeach;?>
                </ul>
            </div> -->

            <div class="s-12 m-12 l-12 margin-m-bottom-30">
                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <div class="denim-garments-section">
                            <a href="<?php echo base_url();?>denim-febrics"><img src="<?php echo base_url();?>assets/frontend/img/pages_img/denim-fabric-and-garments.jpg"/></a>
                            <h3>Denim Febrics</h3>
                        </div>
                        
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <div class="denim-garments-section">
                            <a href="<?php echo base_url();?>ready-germents"><img src="<?php echo base_url();?>assets/frontend/img/pages_img/ready_garments.jpg"/></a>
                            <h3>Ready Germents</h3>
                        </div>
                    </div>

                </div>

                
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>