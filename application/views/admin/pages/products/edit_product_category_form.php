<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Products Category Update</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products Category Update</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="<?php echo base_url();?>edit-product-category/<?php echo $CategoryListSingle->id;?>" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>products-category" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Products Category Update</div>
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
			 
             <form name="products-category-update" id="productsCategoryUpdate" action="<?php echo base_url();?>products-category-update" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="email">Title:</label>
                                <select name="service_id" class="form-control">
                                    <?php 
                                        $service_result = $this->db->query("SELECT * FROM tbl_services WHERE status = 1 ORDER BY id ASC")->result();
                                        foreach($service_result as $service):
                                    ?>
                                        <option value="<?php echo $service->id;?>"><?php echo $service->title;?></option>
                                    <?php endforeach;?>
                                </select>
                                
                                <?php echo form_error('title', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Products Category Name:</label>
                                <input type="text" name="category_name" class="form-control" value="<?php echo $CategoryListSingle->category_name; ?>" >
                                <input type="hidden" name="id" class="form-control" value="<?php echo $CategoryListSingle->id; ?>" >
                                <?php echo form_error('category_name', '<div class="error">', '</div>'); ?>
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
                            <center><button type="submit" class="btn btn-success btn-sm waves-effect waves-light m-1">Update</button></center>
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
        document.forms['products-category-update'].elements['service_id'].value=<?php echo $CategoryListSingle->service_id; ?>;
        document.forms['products-category-update'].elements['status'].value=<?php echo $CategoryListSingle->status; ?>;
    </script>
   