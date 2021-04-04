<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">client Update</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">client Update</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <!-- <a href="<?php echo base_url();?>product-purchese-list" class="btn btn-outline-primary waves-effect waves-light"> Product List</a> -->
                <a href="<?php echo base_url();?>edit-client/<?php echo $clientDetailsSingle->id;?>" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>client-list" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">client Update</div>
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
			 
             <form name="client-update" id="clientUpdate" action="<?php echo base_url();?>client-update" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                            
                            <input type="hidden" name="id" class="form-control" value="<?php echo $clientDetailsSingle->id; ?>" >
                            <div class="form-group">
                                <label for="email">client Image:</label>
                                <input type="file" name="client_image" class="form-control" value="" >
                                <input type="hidden" name="old_client_image" class="form-control" value="<?php echo $clientDetailsSingle->client_image;?>" >
                                <?php echo form_error('client_image', '<div class="error">', '</div>'); ?>
                                <span class="alert alert-danger text-center">Image size will be (500 x 333)</span><br/>
                                <img src="<?php echo base_url().$clientDetailsSingle->client_image;?>" style="height: 50px;" />
                            </div>
                            
                            

                            <div class="form-group">
                                <label for="email">Status</label>
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
    document.forms['client-update'].elements['status'].value=<?php echo $clientDetailsSingle->status; ?>;
</script>
   