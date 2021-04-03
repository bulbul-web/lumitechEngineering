<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Proudcts Add</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products Add</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="<?php echo base_url();?>products-add" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>products-list" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Products Add</div>
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
			 
             <form name="products-save" id="productsSave" action="<?php echo base_url();?>products-save" method="post" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="email">Service Category:</label>
                                <select id="serviceId" name="service_id" class="form-control">
                                    <?php foreach ($CategoryList as $category): ?>
                                        <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Category:</label>
                                <select id="productCategoryId" name="product_category_id" class="form-control">
                                   
                                </select>
                                <?php echo form_error('product_category_id', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Name:</label>
                                <input type="text" name="product_name" class="form-control" value="<?php echo set_value('product_name'); ?>" >
                                <?php echo form_error('product_name', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Details:</label>
                                <textarea id="editor" name="details" class="form-control"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Image:</label>
                                <input type="file" name="product_image" class="form-control" value="" >
                                <?php echo form_error('product_image', '<div class="error">', '</div>'); ?>
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
<script>
    $(document).ready(function(){
        $("#serviceId").change(function(){
            var serviceId = $("#serviceId").val();
            // alert(serviceId);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>get-product-category-by-serviceId/"+serviceId,
                success:function(data){
                    $("#productCategoryId").html(data);
                }
            });
            
        });
    });
</script>
   