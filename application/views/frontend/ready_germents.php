<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/febric_garments.png" style="height: 50px;"/>Ready Germents</p>
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
                
                <div class="line">
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <h3 class="pages-title">Ready Germents</h3> 
                        <br>
                        <h3>Lumitech Engineering Ltd. is a vertically integrated textile Bangladesh garments factory of top brands made in Bangladesh from solid T-shirts - plain t shirts to printed clothes, tank top, Polo shirt , Hoodies & Sweatshirts , Uniform, Sportswear, Under garments & Lingerie, Work wear, Jacket & Vest, Swim Shorts, Sleep wear, inner wear , Sweater & Pullover, Leggings, Shorts, Baby & Kids Wear, Woven Shirts, Jeans Pants, men's clothing, women clothing and Meaning, this group has consolidated all stages of production starting from knitting, dyeing, finishing to cutting, sewing and packing under one roof.</h3>
                        <hr>
                        
                    </div>
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/ready_garments_1.jpg"/>
                    </div>

                </div>

                
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>