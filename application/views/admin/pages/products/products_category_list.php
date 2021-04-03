<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Products Category</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products Category List</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="<?php echo base_url();?>products-category" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>products-category-add" class="btn btn-outline-primary waves-effect waves-light" >  Category Add </a>
            
            </div>
        </div>

     </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
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

                <div class="table-responsive">
                <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Service Category</th>
                        <th>Products Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach($productCategoryList as $value):
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td>
                            <?php 
                                $service_title = $this->db->query("SELECT a.*, b.title FROM tbl_products_category a, tbl_services b WHERE b.id = a.service_id AND a.id = '$value->id' ")->row();
                                echo $service_title->title;
                            ?>
                        </td>
                        <td><?php echo $value->category_name;?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Service Category</th>
                        <th>Products Category</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
            </div>
        </div>
    </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   