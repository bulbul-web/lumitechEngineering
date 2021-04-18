<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">bod Add</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">bod Add</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="<?php echo base_url();?>bod-add" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>bod-list" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">bod Add</div>
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
			 
             <form name="bod-save" id="bodSave" action="<?php echo base_url();?>bod-save" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">


                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" required />
                                <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control" value="<?php echo set_value('designation'); ?>" />
                            </div>
                            
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" />
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" />
                            </div>

                            <div class="form-group">
                                <label for="email">Details:</label>
                                <textarea name="details" class="form-control"><?php echo set_value('details'); ?></textarea>
                            </div>
                            
                                                        
                            <div class="form-group">
                                <label for="email">bod Image:</label>
                                <input type="file" name="bod_image" class="form-control" value="" >
                                <?php echo form_error('bod_image', '<div class="error">', '</div>'); ?>
                                <span class="alert alert-danger text-center">Image size will be rounded</span>
                            </div>

                        </div>

                       
                    </div><!----row--->

                    <div class="row">
                        <div class="col-md-12">
                            <center><button type="submit" id="savebtn" class="btn btn-success btn-sm waves-effect waves-light m-1">Submit</button></center>
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

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'details' );
    </script>