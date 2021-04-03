<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Sevice Details</h1>
        </header>
        <div class="section background-white">

            
                
            



            <div class="line">

                <div class="s-12 m-2 l-2 margin-m-bottom-30">
                    <!-- <?php
                        if (isset($productsMenu)):
                            echo $productsMenu;
                        endif;
                    ?> -->
                    <ul class="products-ul">
                        <?php
                            $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '$singleProductsInfo->service_id' ")->result();
                            foreach ($producstMenu as $productCat): 
                        ?>
                            <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="s-12 m-10 l-10 margin-m-bottom-30">
                    
                    <div class="margin text-center">

                        <?php foreach ($allProducts as $productByCatID): ?>
                            <div class="s-12 m-12 l-4 min-height-400px margin-bottom">
                                <div class="padding-2x custom-padding-2x block-bordered border-radius">
                                <img src="<?php echo base_url().$productByCatID->product_image;?>" />
                                <h2 class="text-thin"><?php echo $productByCatID->product_name;?></h2>
                                <p class="margin-bottom-30"><?php echo $productByCatID->details;?></p>
                                <a class="button border-radius background-primary text-size-12 text-white text-strong" href="<?php echo base_url().'product-details/'.$productByCatID->id;?>">GET MORE INFO</a>
                                </div>
                            </div>
                        <?php endforeach;?>

                        

                    </div>
                    
                    
                </div>
            
            </div>
        </div> 
    </article>
</main>