<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
    <header class="section background-primary text-center">
        <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Contact US</h1>
    </header>
    <div class="section background-white"> 
        <div class="line">
        <div class="margin">
            
            <!-- Company Information -->
            <div class="s-12 m-12 l-6">
            <h2 class="text-uppercase text-strong margin-bottom-30">Company Information</h2>
            <div class="float-left">
                <i class="icon-placepin background-primary icon-circle-small text-size-20"></i>
            </div>
            <div class="margin-left-80 margin-bottom">
                <h4 class="text-strong margin-bottom-0">Company Address</h4>
                <p><?php echo $companyInfo->company_add_1?><br>
                <!-- <?php echo $companyInfo->company_add_2?><br> -->
                </p>               
            </div>
            <div class="float-left">
                <i class="icon-paperplane_ico background-primary icon-circle-small text-size-20"></i>
            </div>
            <div class="margin-left-80 margin-bottom">
                <h4 class="text-strong margin-bottom-0">E-mail</h4>
                <p><?php echo $companyInfo->email_1?><br>
                <?php echo $companyInfo->email_2?>
                </p>              
            </div>
            <div class="float-left">
                <i class="icon-smartphone background-primary icon-circle-small text-size-20"></i>
            </div>
            <div class="margin-left-80">
                <h4 class="text-strong margin-bottom-0">Phone Numbers</h4>
                <p><?php echo $companyInfo->mobile_1?><br>
                <?php echo $companyInfo->mobile_2?><br>
                <?php echo $companyInfo->mobile_3?>
                </p>             
            </div>
            </div>
            
            <!-- Contact Form -->
            <div class="s-12 m-12 l-6">
            <h2 class="text-uppercase text-strong margin-bottom-30">Contact Us</h2>
            <form name="msge-send" id="msgeSend" action="<?php echo base_url();?>msge-send" method="post" enctype="multipart/form-data" class="customform text-white">
                <div class="line">
                    <div class="margin">
                    
                    <div class="s-12 m-12 l-12">
                        <input name="company_name" class="required border-radius" placeholder="Your company Name" title="Your company Name" type="text" required="" />
                    </div>

                    <div class="s-12 m-12 l-6">
                        <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                        <input name="name" class="required name border-radius" placeholder="Your name" title="Your name" type="text" />
                    </div>
                    <div class="s-12 m-12 l-12">
                        <input name="phone" class="required border-radius" placeholder="Your Phone Number" title="Your Phone Number" type="text" required="" />
                    </div>
                    </div>
                </div>
                <div class="s-12">
                    <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" type="submit">Send a massege</button></div> 
            </form>
            </div>  
        </div>  
        </div> 
    </div> 
    </article>
    <div class="background-primary padding text-center">
    <a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a> 
    <a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
    <a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
    <a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
    </div>
    <!-- MAP -->
    <div class="s-12 grayscale center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.848383684271!2d90.41671731445722!3d23.82398989187924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ5JzI2LjQiTiA5MMKwMjUnMDguMSJF!5e0!3m2!1sen!2sbd!4v1616846378392!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</main>