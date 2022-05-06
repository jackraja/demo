<?php echo $__env->make('partials.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style type="text/css">
 [type="checkbox"]:not(:checked), [type="checkbox"]:checked {
    position: unset !important;
    left: -9999px;
    opacity: unset !important;
}
</style>
<section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <!-- Basic Examples -->
            <div class="row clearfix">
           
          
<br><br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <?php if(session('error')): ?>
                    <div class="alert bg-pink alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo e(session('error')); ?>

                    </div>
                  <?php endif; ?>
                  <?php if(session('success')): ?>
                  <div class="alert bg-green alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="header">
                            <h2>
                              Thankyou SMS Sent Report
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo e(route('searchwelcome')); ?>" method="POST" id="form">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="from_date" id="from_date" value="<?php echo e($from); ?>">
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="to_date" id="to_date" value="<?php echo e($to); ?>">
                                </div>
                                <div class="col-md-2">
                                    
                                    <select class="form-control" name="branch" id="branch">
                                        <option value="All">All</option>
                                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($branche->id); ?>" <?php if($branch==$branche->id): ?> selected <?php endif; ?>><?php echo e($branche->branch); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    
                                </div>
                                
                                <div class="col-md-2">
                                    <input type="hidden" name="page" value="thankyou">
                                    <input type="submit" name="search" class="btn btn-primary" value="Search">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="export" class="btn btn-warning" value="Export">
                                </div>
                                 <div class="col-md-1"></div>
                            </div>
                            </form>
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                       <tr>
                                           <th># </th>
                                            <th>Walkin Date</th>
                                            <th>Branch</th>
                                            <th>Customer Name</th>
                                            <th>Mobile No</th>
                                            <th>Place</th>
                                            <th>Segment</th>
                                            <th>Model</th>
                                            <th>Varient</th>
                                            <th>Customer Type</th>
                                            <th>Category</th>
                                            <th>Sale Status</th>
                                            
                                         </tr>
                                   </thead>
                                   <tbody>
                                      
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    


                
    </section>

       <!-- Jquery Core Js -->
       <script src="<?php echo e(asset('asset/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('asset/plugins/bootstrap/js/bootstrap.js')); ?>"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/node-waves/waves.js')); ?>"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js')); ?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo e(asset('asset/js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/pages/tables/jquery-datatable.js')); ?>"></script>
    <!-- Demo Js -->
    <script src="<?php echo e(asset('asset/js/demo.js')); ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="<?php echo e(asset('asset/js/jquery.validate.js')); ?>"></script>
   
    <script>
    $(document).ready(function () {
        var from_date=$('#from_date').val();
        var to_date=$('#to_date').val();
        var branch=$('#branch').val();
        $('#data-table-basic').DataTable({
            "processing": true,
            "serverSide": true,
            "stateSave": true,
            "destroy": true,
            "order":[[0,"desc"]],
            "ajax":{
                     "url": "<?php echo e(url('allthankyousent')); ?>",
                     "dataType": "json",
                     "type": "post",
                     "data":{ _token: "<?php echo e(csrf_token()); ?>",from_date:from_date,to_date:to_date,branch:branch}
                   },
            "columns": [
                { "data": "id" },
                { "data": "walkin" }, 
                { "data": "branch" }, 
                { "data": "name" },
                { "data": "mobile" },
                { "data": "place" },
                { "data": "segment" },
                { "data": "model" },
                { "data": "varient" },
                { "data": "type" },
                { "data": "category" },
                { "data": "status" },
                
                
             ],
            "columnDefs": [
                { "orderable": true, "targets": 0}
            ]
        });
    });
    </script>
 
         
        
</body>
</html>
<?php /**PATH /var/www/html/caisms/resources/views/admin/thankyou-report.blade.php ENDPATH**/ ?>