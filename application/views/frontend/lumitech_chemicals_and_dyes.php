<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/chemicals_and_dyes.jpg" style="height: 50px;"/>Lumitech Chemicals & Dyes</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            <div class="s-12 m-2 l-2 margin-m-bottom-30">

                <ul class="products-ul">
                    <?php
                        $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '3' AND NOT (status <=> '0') ")->result();
                        foreach ($producstMenu as $productCat): 
                    ?>
                        <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="s-12 m-10 l-10 margin-m-bottom-30">
                
                <h3>In 2015 , 2B Tex Corporation, mother company of Lumitech Engineering Ltd. has successfully started Industrial Chemicals and Dyes business targeting huge potential market in Textile and Garments sectors. At present monthly average turnover is around TK. 50 Lac. </h3>
                <hr>
                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <h3 class="pages-title">Textile Dyes we are marketing :</h3> 
                        <br>
                        <h4>1. Sulphur Dyes</h4>
                        <ol style="list-style-type: upper-roman; margin: 15px 10px;">
                            <li>Apsul Black RF</li>
                            <li>Colsul Black E-RL</li>
                            <li>Colsul Yellow ECO</li>
                            <li>Colsul Blue E-RL</li>
                            <li>Colsul Brown ECO</li>
                            <li>Colsul Bordeaux ECO</li>
                        </ol> 
                        <h4>2. Dispense Dyes</h4>
                        <h4>3. Indigo Dyes</h4>
                        <h4>4. Pigment Dyes</h4>
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/chemicals_dyes_1.jpg" style="float:right;"/>
                    </div>

                </div>

                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <h3 class="pages-title">Textile Chemicals we are marketing :</h3> 
                        <br>
                        <ol style="list-style-type: upper-roman; margin: 15px 10px;">
                            <li>Detergent</li>
                            <li>Wetting Agent</li>
                            <li>Silicon Softener</li>
                            <li>Softener</li>
                            <li>Fixing Agent</li>
                            <li>Levelling Agent</li>
                            <li>Sequestering</li>
                        </ol>
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/chemicals_dyes_2.jpg" style="float:right;"/>
                    </div>
                    
                </div>
                
                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <h3 class="pages-title">Our Supply Partners :</h3> 
                        <br>
                        <ul style="list-style-type: square; margin: 15px 10px;">
                            <li>Oxford Technologies Australia (Denim)</li>
                            <li>Noga Biochem (China)</li>
                            <li>Totas International Trading Company Limited (Taiwan)</li>
                            <li>Cargill (Turkey)</li>
                            <li>Fixing Agent</li>
                            <li>Levelling Agent</li>
                            <li>Sequestering</li>
                        </ul>
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/chemicals_dyes_3.jpg" style="float:right; margin-top: 15px;"/>
                    </div>
                    
                </div>
                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>