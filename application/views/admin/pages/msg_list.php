<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Massege List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Massege List</li>
         </ol>
	   </div>
       
	   <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="<?php echo base_url();?>msg-list" class="btn btn-outline-primary waves-effect waves-light" >  Refresh </a>
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
                        <th>Name</th>
                        <th>Company name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach($msgList as $value):
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $value->name;?></td>
                        <td><?php echo $value->company_name;?></td>
                        <td><?php echo $value->email;?></td>
                        <td><?php echo $value->phone;?></td>
                        <td><?php echo $value->message;?></td>
                        <td>
                            
                            <?php
                                if($value->status == '1'){
                                    echo '<span class="alert alert-success text-center">Seen</span>';
                                }else{
                                    echo '<span class="alert alert-danger text-center">Unseen</span>';
                                }
                            ?>
                            
                        </td>
                        <td>
                            <div class="btn-group m-1">
                                
                                <?php if($value->status == '1'): ?>
                                    <a href="<?php echo base_url();?>msg-status-change/<?php echo $value->id.'/'.$value->status;?>" class="btn btn-primary waves-effect waves-light"> <i class="fa fa-eye-slash"></i> </a>
                                <?php elseif ($value->status == '0'): ?>
                                    <a href="<?php echo base_url();?>msg-status-change/<?php echo $value->id.'/'.$value->status;?>" class="btn btn-primary waves-effect waves-light"> <i class="fa fa-eye"></i> </a>
                                <?php endif;?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Company name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
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
   