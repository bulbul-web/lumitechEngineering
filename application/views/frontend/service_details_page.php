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
                    <?php
                        if (isset($productsMenu)):
                            echo $productsMenu;
                        endif;
                    ?>
                </div>

                <div class="s-12 m-10 l-10 margin-m-bottom-30">
                    <h2 class="text-size-30 text-center"><?php echo $serviceListSingle->title?></h2>
                    
                    <center>
                        <img class="margin-bottom details-page-img" src="<?php echo base_url().$serviceListSingle->service_image;?>" alt="">
                    </center>
                    <p>
                        <?php echo $serviceListSingle->details?>
                    </p> 
                    
                    
                </div>
            
            </div>
        </div> 
    </article>
</main>