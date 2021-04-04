<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Company Information</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Company Information</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
               
            <a href="<?php echo base_url();?>company-info/1" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Company Information</div>
             <div class="card-body">
             <div class="alert alert-danger text-center">
                        
					<?php
					$message = $this->session->userdata('message');
					//echo $message;
					if (isset($message)) {
						echo $message;
						$this->session->unset_userdata('message');
					}
					?>
				</div>
			 
             <form name="company-update" id="companyUpdate" action="<?php echo base_url();?>company-update" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="email">Mobile 1:</label>
                                <input type="text" name="mobile_1" class="form-control" value="<?php echo $companyInfoSingle->mobile_1; ?>" >
                                <input type="hidden" name="id" class="form-control" value="<?php echo $companyInfoSingle->id; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="email">Mobile 2:</label>
                                <input type="text" name="mobile_2" class="form-control" value="<?php echo $companyInfoSingle->mobile_2; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Mobile 3:</label>
                                <input type="text" name="mobile_3" class="form-control" value="<?php echo $companyInfoSingle->mobile_3; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email 1:</label>
                                <input type="text" name="email_1" class="form-control" value="<?php echo $companyInfoSingle->email_1; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email 2:</label>
                                <input type="text" name="email_2" class="form-control" value="<?php echo $companyInfoSingle->email_2; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Company address 1:</label>
                                <input type="text" name="company_add_1" class="form-control" value="<?php echo $companyInfoSingle->company_add_1; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Company address 2:</label>
                                <input type="text" name="company_add_2" class="form-control" value="<?php echo $companyInfoSingle->company_add_2; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Our Philosophy:</label>
                                <input type="text" name="philosophy" class="form-control" value="<?php echo $companyInfoSingle->philosophy; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">About Company:</label>
                                <input type="text" name="about_company" class="form-control" value="<?php echo $companyInfoSingle->about_company; ?>" >
                            </div>
                            
                           
                            <div class="form-group">
                                <label for="email">Header Logo:</label>
                                <input type="file" name="logo_header" class="form-control" value="" >
                                <input type="hidden" name="old_logo_header" class="form-control" value="<?php echo $companyInfoSingle->logo_header;?>" >
                                <span class="alert alert-danger text-center">Image size will be (736 x 220)</span><br/>
                                <img src="<?php echo base_url().$companyInfoSingle->logo_header;?>" style="height: 50px;" />
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Footer Image:</label>
                                <input type="file" name="footer_img" class="form-control" value="" >
                                <input type="hidden" name="old_footer_img" class="form-control" value="<?php echo $companyInfoSingle->footer_img;?>" >
                                <span class="alert alert-danger text-center">Image size will be (500 x 333)</span><br/>
                                <img src="<?php echo base_url().$companyInfoSingle->footer_img;?>" style="height: 50px;" />
                            </div>
                            
                           

                        </div>

                       
                    </div><!----row--->

                    <div class="row">
                        <div class="col-md-12">
                            <center><button type="submit" id="savebtn" class="btn btn-success btn-sm waves-effect waves-light m-1">Update</button></center>
                        </div>
                    </div>


                </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   