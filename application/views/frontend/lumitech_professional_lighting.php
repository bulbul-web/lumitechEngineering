<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/Professional_lighting.jpg" style="height: 50px;"/>Lumitech Professional Lighting</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            <div class="s-12 m-2 l-2 margin-m-bottom-30">

                <ul class="products-ul">
                    <?php
                        $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '2' AND NOT (status <=> '0') ")->result();
                        foreach ($producstMenu as $productCat): 
                    ?>
                        <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="s-12 m-10 l-10 margin-m-bottom-30">
                
                <h3>Lumitech Management have almost 12 years experience in commercial lighting segment. we are experienced in production, assembling and quality controlling. They are specialist in LED lighting. we directly go to customers’ site, analyses customer requirements and accordingly they give solution. we are expert both in Corporate/Industrial and Project Lighting.</h3>
                <hr>
                <div class="line">

                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <h3 class="pages-title">Corporate/Industrial Lighting :</h3> 
                        <br>
                        
                    </div>
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/professional-lighting_1.png"/>
                    </div>

                </div>

                <div class="line">

                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <h3 class="pages-title">Corporate/Industrial Lighting :</h3> 
                        <br>
                        <h3>We have supplied LED Lights in different Corporate offices, Garments and Industries in Bangladesh.</h3>
                        <hr>
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/professional_lighting_2.jpg"/>
                        <hr>
                        <h3>Major Corporate Customers are - Akij, Pepsi, Cocola, Transcom, Beximco, Incepta, Popular, LEED Certified Garments, AKH Group, Lyric, Basundhara, Pallmal, Rangs, Amtranet, Abed Textile, BDG Group, Bengal Group, Fakir Fashion, Unilever, Walton, KSRM, BSRM etc.</h3>
                    </div>
                    
                </div>
                
                <div class="line">

                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <hr>
                        <h3 class="pages-title">Project Lighting – AC Street Light & Flood/High Mast Light :</h3> 
                        <br>
                        <p>Project Lighting division is experienced and specialized for supplying and installation of Street Light & Flood/High Mast Light for different City Corporations, Pouroshovas,  Upazilas & Stadium under Government Tender. As per tenderer requirement we supplied Lights of EU, USA and others country origin.</p>
                        <h4>Our Product & Service:</h4>
                        <ul style="list-style-type: square; margin: 15px 10px;">
                            <li>We provide proper design and Implementation of this project as per customer requirement.</li>
                            <li>We can Provide for this project (Overhead cable with laying, GI Pole fabrication, Lighting Arm design & Fabrication, Wire Rack, Shackle Insulator, Earthing and Other Related Civil Work, Garden Lighting) etc.</li>
                            <li>We can provide installation support and Ensure the after sales service support.</li>
                        </ul>
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/professional_lighting_3.jpg" />
                        
                    </div>
                    
                </div>

                <hr>
                <div class="line">

                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <br>
                        <p>We have Supply and Installed 5,135 LED Street Light in different City Corporations, Upazilas and Industries in Bangladesh </p>
                        <br>
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/professional_lighting_4.jpg" />
                        <p>Sylhet City Corporation, Jessore City Corporation, Narayangonj City Corporation and Mymensingh City Corporation, where we supplied and installed Street Lights. Supplied High mast light at Chittagong Port. Also supplied Explosion Proof Light at Meghna Petroleum.</p>
                    </div>
                    
                </div>
                <hr>

                
            </div>


            
        </div>  
        </div>
    </div> 
    </article>
</main>