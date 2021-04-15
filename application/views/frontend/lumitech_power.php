<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <p class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="display: inline-flex;"><img src="<?php echo base_url();?>assets/frontend/img/icon/Power.jpg" style="height: 50px;"/>Lumitech Power</p>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">


            <div class="s-12 m-2 l-2 margin-m-bottom-30">

                <ul class="products-ul">
                    <?php
                        $producstMenu = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id = '1' AND NOT (status <=> '0') ")->result();
                        foreach ($producstMenu as $productCat): 
                    ?>
                        <li><a href="<?php echo base_url().'products/'.$productCat->id;?>"><?php echo $productCat->category_name?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="s-12 m-10 l-10 margin-m-bottom-30">
                
                <p>Lumitech management have 10 years experience in renewable energy business. Under this division we supply and installed Solar Home System ; Off-Grid, On-Grid & Hybrid  Solar System; Solar Irrigation Pump; Solar System for Net-Metering; Solar Street Light under guidance of IDCOL and SREDA.</p>
                <hr>
                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <h3 class="pages-title">IDCOL & SREDA Approved Products :</h3> 
                        <br>
                        <h4>1. Solar Panel (30Wp to 330Wp)</h4>
                        <h4>2. Charge Controller</h4>
                        <h4>3. Off-Grid, On-Grid & Hybrid Inverter</h4>
                        <h4>4. Solar Integrated Street Light (15W, 20W & 30W)</h4>
                        <h4>5. LiFePO4 Battery for Solar Street Light</h4>
                        <h4>6. Irrigation Pump</h4>
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/power_1.jpg" style="float:right;"/>
                    </div>

                </div>

                <div class="line">
                    
                    <div class="s-12 m-12 l-12 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/power_2.jpg" style="float:right;"/>
                    </div>
                    
                </div>

                
                <div class="line">

                    <div class="s-7 m-7 l-7 margin-m-bottom-30">
                        <h3 class="pages-title">Our Services :</h3> 
                        <br>
                        <ul style="list-style-type: square; margin: 15px 10px;">
                            <li><h3>We can provide design for Solar System under IDCOL & SREDA guide lines, System commissioning work (1KWp to 500KWp) with battery/With out Battery Back up. Also provide major product which is related of this system (Solar PV Module, Charge Controller (PWM + MPPT), On Grid, Off Grid, Hybrid Inverter, Battery, Bi Directional Inverter) and other related structure & accessories</h3></li>
                            <li><h3>We can provide design for Solar Street Light under IDCOL & SREDA guide lines, System commissioning work (15W,20W,30W LED Street Light). We provide full related product (Solar PV Module, LED DC Street Light with Battery & Controller), GI Pole with Fabrication and Civil Related Work and other related accessories.</h3></li>
                            <li><h3>We design, supply and installed Solar Irregation project (Solar PV Module, Pump Controller, Submersible/Surface Pump, Solar Frame, Boring) etc under IDCOL and SREDA guide lines.</h3></li>
                        </ul>
                    </div>
                    
                    <div class="s-5 m-5 l-5 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/power_3.jpg" style="float:right; margin-top: 15px;"/>
                    </div>
                    
                </div>

                <div class="line">

                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <h3 class="pages-title">Management Experience :</h3> 
                        <br>
                        <ul style="list-style-type: square; margin: 15px 10px;">
                            <li><h3>Our managements have experienced to set up 179 branch offices and installed 100,643 nos. SHS, total capacity around 8.5 MW in different Rural Off-Grid areas of Bangladesh.</h3></li>
                            <li><h3>Have installed 1425 nos. Solar Roof Top System (total capacity 2.45 MW) in the Roof of different House Buildings and industries of different cities and industrial areas of Bangladesh.</h3></li>
                            <li><h3>Have installed 15,705 nos. Solar Street Lights in different Off Grid and On Grid areas of Bangladesh</h3></li>
                            <li><h3>Have installed 62 nos. Solar Irrigation Pump in different Off Grid and On Grid areas of Bangladesh as a replacement of Diesel Pump.</h3></li>
                            <li><h3>To implement the GREEN ENERGY in all Base Transmission Station (BTS), have installed 213 nos. Solar, Battery and Generator hybrid systems.</h3></li>
                            <li><h3>Have installed “Cement-Brick” and “Fiber-Glass” bio digester model Biogas plant. Mostly installed in Poultry Firms, Cattle Firm and House hold. Capacity: Small Scale ( 2.4-4.8 CM) and Medium Scale ( 7.5 to 20 CM) .</h3></li>
                        </ul>
                    </div>
                    
                    <div class="s-6 m-6 l-6 margin-m-bottom-30">
                        <img src="<?php echo base_url();?>assets/frontend/img/pages_img/power_4.jpg" style="float:right; margin-top: 15px;"/>
                    </div>
                    
                </div>

                
            </div>

            
        </div>  
        </div>
    </div> 
    </article>
</main>