<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/Lumitech_constraction.jpg" style="height: 50px;"/>Lumitech Contruction</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            <div class="s-12 m-2 l-2 margin-m-bottom-30">

                <ul class="products-ul">
                    <?php
                        $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '4' AND NOT (status <=> '0') ")->result();
                        foreach ($producstMenu as $productCat): 
                    ?>
                        <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="s-12 m-10 l-10 margin-m-bottom-30">
                
                <h3>Lumitech Engineering Ltd. is a sister concern of 2B Tex Corporation has started Civil Construction business in different Government and private Entities in 2015.</h3>
                <hr>
                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <h3 class="pages-title">Finished Projects of 2B Tex Corporation :</h3> 
                        <br>
                        <ul style="list-style-type: square; margin: 15px 10px;">
                            <li><h3>supplying & laying LT cable & Renovation Electrical works of Dormitory building at “Technical Teacher Training College” under Tejgaon Thana Dhaka.</h3></li>
                            <li><h3>Renovation & Renovation Electrical works of Tejgaon Govt. Girls high school in/c, 5.0 HP Centrifugal water pump motor set under Tejgaon Thana Dhaka.</h3></li>
                            <li><h3>Supplying & lnstallation of Digital Sound system & Renovation Electrical ttrcrks of Hall Rcom at Tejgaon Govt. High school under Tejgaon Thana Dhaka</h3></li>
                        </ul>
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <img src="<?php base_url();?>assets/frontend/img/pages_img/constraction_1.png" style="float:right;"/>
                        <h4>Ongoing Projects of 2B Tex Corporation:</h4>
                        <h5>Construction of Madrasa Building with Foundation including Sanitary Water Supply & Internal Electrification Work at Latifpur Darul Ulam Madrasa.</h5>
                    </div>

                </div>

                
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>