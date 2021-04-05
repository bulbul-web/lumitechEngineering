<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">catalogue Update</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">catalogue Update</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <!-- <a href="<?php echo base_url();?>product-purchese-list" class="btn btn-outline-primary waves-effect waves-light"> Product List</a> -->
                <a href="<?php echo base_url();?>edit-catalogue/<?php echo $catalogueDetailsSingle->id;?>" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>catalogue-list" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">catalogue Update</div>
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
			 
             <form name="catalogue-update" id="catalogueUpdate" action="<?php echo base_url();?>catalogue-update" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="email">Title:</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $catalogueDetailsSingle->title; ?>" >
                                <input type="hidden" name="id" class="form-control" value="<?php echo $catalogueDetailsSingle->id; ?>" >
                                <?php echo form_error('title', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">catalogue Details:</label>
                                <textarea name="details" class="form-control" required=""><?php echo $catalogueDetailsSingle->details;?></textarea>
                                <?php echo form_error('details', '<div class="error">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="email">Long Details:</label>
                                <textarea name="details_long" class="form-control" required=""><?php echo $catalogueDetailsSingle->details_long;?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">catalogue Image:</label>
                                <input type="file" name="catalogue_image" class="form-control" value="" >
                                <input type="hidden" name="old_catalogue_image" class="form-control" value="<?php echo $catalogueDetailsSingle->catalogue_image;?>" >
                                <?php echo form_error('catalogue_image', '<div class="error">', '</div>'); ?>
                                <?php
                                    $filename = $catalogueDetailsSingle->catalogue_image;
                                    $extntion = pathinfo($filename, PATHINFO_EXTENSION);
                                    if($extntion == 'pdf'){
                                        echo '<a class="cat-download-link" href=" '.base_url().$catalogueDetailsSingle->catalogue_image.' " download><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>';
                                    }elseif($extntion == 'doc' || $extntion == 'docx'){
                                        echo '<a class="cat-download-link" href=" '.base_url().$catalogueDetailsSingle->catalogue_image.' " download><i class="fa fa-file-text-o" aria-hidden="true"></i></a>';
                                    }else{
                                ?>
                                    <a href="<?php echo base_url().$catalogueDetailsSingle->catalogue_image;?>" download><img src="<?php echo base_url().$catalogueDetailsSingle->catalogue_image;?>" style="height: 50px;" /></a>
                                <?php } ?>
                                
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
    document.forms['catalogue-update'].elements['status'].value=<?php echo $catalogueDetailsSingle->status; ?>;
</script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'details_long' );
</script>
   