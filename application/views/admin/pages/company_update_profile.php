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
                <!-- <a href="<?php echo base_url();?>product-purchese-list" class="btn btn-outline-primary waves-effect waves-light"> Product List</a> -->
                <a href="<?php echo base_url();?>edit-slider/<?php echo $sliderListSingle->id;?>" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>slider" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
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
			 
             <form name="slider-update" id="sliderUpdate" action="<?php echo base_url();?>slider-update" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="email">Title:</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $sliderListSingle->title; ?>" >
                                <input type="hidden" name="id" class="form-control" value="<?php echo $sliderListSingle->id; ?>" >
                                <?php echo form_error('title', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Description:</label>
                                <input type="text" name="description" class="form-control" value="<?php echo $sliderListSingle->description; ?>" >
                                <?php echo form_error('description', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Slider Image:</label>
                                <input type="file" name="slider_img" class="form-control" value="" >
                                <input type="hidden" name="old_slider_img" class="form-control" value="<?php echo $sliderListSingle->slider_img;?>" >
                                <?php echo form_error('slider_img', '<div class="error">', '</div>'); ?>
                                <span class="alert alert-danger text-center">Image size will be (1300 x 468)</span><br/>
                                <img src="<?php echo base_url().$sliderListSingle->slider_img;?>" style="height: 50px;" />
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Order By</label>
                                <input type="number" name="order_by" class="form-control" value="<?php echo $sliderListSingle->order_by; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="email">Order By</label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
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

<script>
    document.forms['slider-update'].elements['status'].value=<?php echo $sliderListSingle->status; ?>;//for active inactive.
</script>
   