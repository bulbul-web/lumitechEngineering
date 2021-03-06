<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">catalogue List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">catalogue List</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <!-- <a href="<?php echo base_url();?>product-purchese-list" class="btn btn-outline-primary waves-effect waves-light"> Product List</a> -->
                <a href="<?php echo base_url();?>catalogue-list" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
                <a href="<?php echo base_url();?>catalogue-add" class="btn btn-outline-primary waves-effect waves-light" >  catalogue Add </a>
            
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
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach($catalogueList as $value):
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td>
                            <?php
                                $filename = $value->catalogue_image;
                                $extntion = pathinfo($filename, PATHINFO_EXTENSION);
                                if($extntion == 'pdf'){
                                    echo '<a class="cat-download-link" href=" '.base_url().$value->catalogue_image.' " download><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>';
                                }elseif($extntion == 'doc' || $extntion == 'docx'){
                                    echo '<a class="cat-download-link" href=" '.base_url().$value->catalogue_image.' " download><i class="fa fa-file-text-o" aria-hidden="true"></i></a>';
                                }else{
                            ?>
                                <a href="<?php echo base_url().$value->catalogue_image;?>" download><img src="<?php echo base_url().$value->catalogue_image;?>" style="height: 80px;" /></a>
                            <?php } ?>
                        </td>
                        <td><?php echo $value->title;?></td>
                        <td><?php echo $value->details;?></td>
                        <td>
                            
                            <?php
                                if($value->status == '1'){
                                    echo '<span class="alert alert-success text-center">Active</span>';
                                }else{
                                    echo '<span class="alert alert-danger text-center">Inactive</span>';
                                }
                            ?>
                            
                        </td>
                        <td>
                            <div class="btn-group m-1">
                                <a href="<?php echo base_url();?>edit-catalogue/<?php echo $value->id?>" class="btn btn-primary waves-effect waves-light"> <i class="fa fa-edit"></i> </a>
                                <a href="<?php echo base_url();?>delete-status-catalogue/<?php echo $value->id?>" class="btn btn-primary waves-effect waves-light"> <i class="fa fa-trash"></i> </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
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
   