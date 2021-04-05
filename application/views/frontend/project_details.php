<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Project Details</h1>
        </header>
        <div class="section background-white">

            
                
            



            <div class="line">

                <div class="s-12 m-12 l-12 margin-m-bottom-30">
                    <h2 class="text-size-30 text-center"><?php echo $projectDetailsSingle->title;?></h2>
                    
                    <center>
                        <img class="margin-bottom details-page-img" src="<?php echo base_url().$projectDetailsSingle->project_image;?>" alt="">
                    </center>
                    <p>
                        <?php echo $projectDetailsSingle->details;?>
                    </p> 
					<div>
                        <?php echo $projectDetailsSingle->details_long;?>
                    </div>
                    
                    
                </div>
            
            </div>
        </div> 
    </article>
</main>