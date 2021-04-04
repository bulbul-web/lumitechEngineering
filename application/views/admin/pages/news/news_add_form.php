<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">news Add</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">news Add</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="<?php echo base_url();?>news-add" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>news-list" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">news Add</div>
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
			 
             <form name="news-save" id="newsSave" action="<?php echo base_url();?>news-save" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                            
                            <div class="form-group">
                                <label for="email">Title:</label>
                                <input type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?>" >
                                <?php echo form_error('title', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">news Details:</label>
                                <textarea id="editor" name="details" class="form-control" required=""><?php echo set_value('details'); ?></textarea>
                                <?php echo form_error('details', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">news Image:</label>
                                <input type="file" name="news_image" class="form-control" value="" >
                                <?php echo form_error('news_image', '<div class="error">', '</div>'); ?>
                                <span class="alert alert-danger text-center">Image size will be (768 x 450)</span>
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