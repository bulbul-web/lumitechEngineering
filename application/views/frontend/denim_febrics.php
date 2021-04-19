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
                <h3>Lumitech Engineering Ltd. has started Denim Fabric and Padimate Garment business in this year.</h3>
                <hr>
                <div class="line">
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <h3 class="pages-title">Denim Febrics</h3> 
                        <br>
                        
                    </div>
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/denim-fabrics_1.jpg"/>
                    </div>

                </div>

                
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>