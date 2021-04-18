<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Board of Directory</h1>
        </header>
        <div class="section background-white"> 
            <div class="line">
                <div class="margin">
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <div class="line">

                            <?php 
                                $allBod = $this->db->query("select * from tbl_bod where status = '1' ")->result();
                                foreach ($allBod as $value) {
                            ?>

                                <div class="s-4 m-3 l-3 margin-m-bottom-30">
                                    <div class="bod-section">
                                        <center><a href="<?php echo base_url();?>bod-details/<?php echo $value->id?>"><img src="<?php echo base_url().$value->bod_image;?>"/></a></center>
                                        <h6><?php echo $value->name;?></h6>
                                    </div>
                                    
                                </div>
                            
                            <?php } ?>

                        </div>

                        
                        
                    </div>
                </div>
            </div>

        </div> 
    </article>
</main>