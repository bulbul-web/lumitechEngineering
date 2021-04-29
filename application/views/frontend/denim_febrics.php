<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/febric_garments.png" style="height: 50px;"/>Denim Febrics</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            <div class="s-12 m-2 l-2 margin-m-bottom-30">

                <ul class="products-ul">
                    <?php
                        $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '6' AND NOT (status <=> '0') ")->result();
                        foreach ($producstMenu as $productCat): 
                    ?>
                        <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="s-12 m-10 l-10 margin-m-bottom-30">
                <h3>Lumitech Engineering Ltd. Recently has started Denim Fabric and Redimate Garments export in Turkey market.</h3>
                <hr>
                <div class="line">
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <h3 class="pages-title">Denim Febrics</h3> 
                        <br>
                        <h3>Manufacturing the denim fabric from 4 (Oz) to 15 (Oz) to encounter the real demands of global buyers which has already recognized for the global market to furnish denim industry requirement.</h3>
                        <hr>
                    </div>
                    
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_1.jpg"/>
                            <h4>Super Stretch Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_2.jpg"/>
                            <h4>Viscose Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_3.jpg"/>
                            <h4>Organic Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_4.jpg"/>
                            <h4>Yarn Dyed Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_5.jpg"/>
                            <h4>Knit Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_6.jpg"/>
                            <h4>Combray Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_7.jpg"/>
                            <h4>Dobby Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_8.jpg"/>
                            <h4>Tencel Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_9.jpg"/>
                            <h4>Raw Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_10.jpg"/>
                            <h4>Colored Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_11.jpg"/>
                            <h4>Ecru Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_12.jpg"/>
                            <h4>Poly Cotton Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_13.jpg"/>
                            <h4>Printed Denim</h4>
                        </div>
                    </div>
                    <div class="s-6 m-4 l-4 margin-m-bottom-30">
                        <div class="productarea">
                            <img src="<?php echo base_url();?>assets/frontend/img/pages_img/prod_14.jpg"/>
                            <h4>Slub Denim</h4>
                        </div>
                    </div>

                </div>

                
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>