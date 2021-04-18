<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;">BOD Details</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            

            <div class="s-12 m-12 l-12 margin-m-bottom-30">
                <h3>-</h3>
                <hr>
                <div class="line">
                    
                    <div class="s-8 m-8 l-8 margin-m-bottom-30">
                        <h3 class="pages-title"><?php echo $bodDetailsSingle->name;?></h3> 
                        <br>
                        <h3>Designation: <?php echo $bodDetailsSingle->designation;?></h3>
                        <h3>Phone: <?php echo $bodDetailsSingle->phone;?></h3>
                        <h3>Email: <?php echo $bodDetailsSingle->email;?></h3>
                    </div>
                    
                    <div class="s-4 m-4 l-4 margin-m-bottom-30">
                        <img src="<?php echo base_url().$bodDetailsSingle->bod_image;?>" style="max-height: 250px;"/>
                    </div>

                </div>
                <div class="line">
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <p>
                            <?php echo $bodDetailsSingle->details;?>
                        </p>
                    </div>
                </div>

                
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>