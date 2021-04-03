<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Product Update</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Update</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <!-- <a href="<?php echo base_url();?>product-purchese-list" class="btn btn-outline-primary waves-effect waves-light"> Product List</a> -->
                <a href="<?php echo base_url();?>edit-product/<?php echo $productSingleDetails->id;?>" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>products-list" class="btn btn-outline-primary waves-effect waves-light" >  Back </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Product Update</div>
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
			 
                <form name="products-update" id="productsUpdate" action="<?php echo base_url();?>products-update" method="post" enctype="multipart/form-data">
                    
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
                                <select id="productCategoryId" name="product_category_id" class="form-control" required="">
                                   
                                </select>
                                <?php echo form_error('product_category_id', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Name:</label>
                                <input type="text" name="product_name" class="form-control" value="<?php echo $productSingleDetails->product_name; ?>" >
                                <input type="hidden" name="id" class="form-control" value="<?php echo $productSingleDetails->id; ?>" >
                                <?php echo form_error('product_name', '<div class="error">', '</div>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Details:</label>
                                <textarea id="editor" name="details" class="form-control"><?php echo $productSingleDetails->details; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Product Image:</label>
                                <input type="file" name="product_image" class="form-control" value="" >
                                <input type="hidden" name="old_product_image" class="form-control" value="<?php echo $productSingleDetails->product_image;?>" >
                                <?php echo form_error('product_image', '<div class="error">', '</div>'); ?>
                                <span class="alert alert-danger text-center">Image size will be (768 x 450)</span><br/>
                                <img src="<?php echo base_url().$productSingleDetails->product_image;?>" style="height: 50px;" />
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
    document.forms['products-update'].elements['product_category_id'].value=<?php echo $productSingleDetails->product_category_id; ?>;
    document.forms['products-update'].elements['service_id'].value=<?php echo $productSingleDetails->service_id; ?>;
    document.forms['products-update'].elements['status'].value=<?php echo $productSingleDetails->status; ?>;
</script>
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
   