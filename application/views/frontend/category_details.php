<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Category Details</h1>
        </header>
        <div class="section background-white">

            
                
            



            <div class="line">

                <div class="s-12 m-12 l-12 margin-m-bottom-30">
                    <h2 class="text-size-30 text-center"><?php echo $catalogueDetailsSingle->title;?></h2>
                    
                    <center>
                        <?php 
                            $filename = $catalogueDetailsSingle->catalogue_image;
                            $extntion = pathinfo($filename, PATHINFO_EXTENSION);
                            if($extntion == 'pdf'):
                        ?>
                            <img class="margin-bottom details-page-img" style="width: 150px" src="<?php echo base_url()?>assets/frontend/img/pdf_icon.png" />
                        <?php elseif($extntion == 'doc'):?>
                            <img class="margin-bottom details-page-img" style="width: 150px" src="<?php echo base_url()?>assets/frontend/img/doc_icon.png" />
                        <?php else:?>
                            <img class="margin-bottom details-page-img" src="<?php echo base_url().$catalogueDetailsSingle->catalogue_image;?>" alt="">
                        <?php endif;?>
                        <a href="<?php echo base_url().$catalogueDetailsSingle->catalogue_image;?>" download class="linkdownload">Download</a>  
                    </center>
                    <p>
                        <?php echo $catalogueDetailsSingle->details;?>
                    </p> 
                    <div>
                        <?php echo $catalogueDetailsSingle->details_long;?>
                    </div>
                    
                    
                </div>
            
            </div>
        </div> 
    </article>
</main>