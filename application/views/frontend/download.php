<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Catalogue</h1>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">

        <?php foreach ($catalogueList as $value): ?>
            <div class="s-12 m-6 l-3 border-1">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                    <div class="image-hover-overlay background-primary"> 
                        <div class="image-hover-overlay-content text-center padding-2x">
                            <a href="<?php echo base_url().$value->catalogue_image;?>" download class="ownlink download">Download</a>  
                            <a href="<?php echo base_url().'category-details/'.$value->id;?>" class="ownlink view">View</a>  
                        </div> 
                    </div> 
                    <?php
                        $filename = $value->catalogue_image;
                        $extntion = pathinfo($filename, PATHINFO_EXTENSION);
                        if($extntion == 'pdf'){
                            echo '<a class="cat-download-link" href=" '.base_url().$value->catalogue_image.' "><img src=" '.base_url().'assets/frontend/img/pdf_icon.png " /></a>';
                        }elseif($extntion == 'doc' || $extntion == 'docx'){
                            echo '<a class="cat-download-link" href=" '.base_url().$value->catalogue_image.' "><img src=" '.base_url().'assets/frontend/img/doc_icon.png " /></a>';
                        }else{
                    ?>
                        <img class="cat-image-main" src="<?php echo base_url().$value->catalogue_image;?>" alt="" title="<?php echo $value->catalogue_image;?>" />
                    <?php } ?>
                    
                    <div class="cat-text-area">
                        <h3 class="cat-title"><?php echo $value->title;?></h3>
                        <p><?php echo substr($value->details, 0, 50);?></p>
                    </div>
                </div>	
            </div>
        <?php endforeach;?>
            
        </div>  
        </div>
    </div> 
    </article>
</main>