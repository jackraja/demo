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
           
            <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4 add" data-toggle="modal" style="float: right;" data-target="#modalLoginForm">
    Add New</a>
</div>
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
                             Thank you Form
                            </h2>
                        </div>
                        <div class="body">
                        <form action="<?php echo e(route('updatecustomer')); ?>" method="post" class="form-horizontal"  id="form_submit" autocomplete="off" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="customer_id" name="customer_id" value="<?php echo e($customer->id); ?>">
                        <div class="row">
                          <div class="col-md-6">
                          <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Walkin Date</label>
                            <input type="text"  name ="walkin_date" id="walkin_date" class="form-control validate" placeholder="Walkin Date" value="<?php echo e(date('d-m-Y',strtotime($customer->walkin_date))); ?>" readonly>
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Walkin Branch</label>
                            <input type="text"  name ="branch" id="branch" class="form-control validate" placeholder="Walkin Branch" value="<?php echo e($branch->branch); ?>" readonly>
                         </div>
                        </div>
                          <div class="col-md-6">
                          <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Name</label>
                            <input type="text"  name ="customer_name" id="customer_name" class="form-control validate" placeholder="Customer Name" value="<?php echo e($customer->customer_name); ?>" readonly>
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Mobile number</label>
                            <input type="text"  name ="mobile_no" id="mobile_no" class="form-control validate" placeholder="Customer Mobile number" onkeypress="return isNumberKey(event)" onkeyup="return isNumberKey(event)" maxlength="10" value="<?php echo e($customer->mobile_no); ?>" readonly>
                         </div>
                        </div>
                        <div class="col-md-6">
                          <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Email</label>
                            <input type="text"  name ="customer_email" id="customer_email" class="form-control validate" placeholder="Customer Email">
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Vehicle Segment<span style="color:red;">*</span></label>
                            <select  name ="vehicle_segment" id="vehicle_segment" class="form-control validate" readonly>
                              <option value="">Vehicle Segment</option>
                              <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($segment->id); ?>" <?php if($segment->id==$branch->vehicle_id): ?> selected <?php endif; ?>><?php echo e($segment->vehicle); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Model Interested<span style="color:red;">*</span></label>
                            <select  name ="model" id="model" class="form-control validate">
                              <option value="">Model Interested</option>
                              <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($model->id); ?>"><?php echo e($model->model); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                         </div>
                        </div> 
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Varient Interested<span style="color:red;">*</span></label>
                            <select  name ="varient" id="varient" class="form-control validate">
                              <option value="">Varient Interested</option>
                              <?php $__currentLoopData = $varients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $varient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($varient->id); ?>"><?php echo e($varient->varient); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                         </div>
                        </div> 
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Type<span style="color:red;">*</span></label>
                            <select  name ="customer_type" id="customer_type" class="form-control validate">
                              <option value="">Customer Type</option>
                              <option value="Individual">Individual</option>
                              <option value="Government">Government</option>
                              <option value="Corporate">Corporate</option>
                              
                            </select>
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Category<span style="color:red;">*</span></label>
                            <select  name ="customer_category" id="customer_category" class="form-control validate">
                              <option value="">Customer Category</option>
                              <option value="New">New</option>
                              <option value="Existing">Existing</option>
                              
                            </select>
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Sale Status<span style="color:red;">*</span></label>
                            <select  name ="sale_status" id="sale_status" class="form-control validate">
                              <option value="">Sale Status</option>
                              <option value="Hot">Hot</option>
                              <option value="Warm">Warm</option>
                              <option value="Cold">Cold</option>
                            </select>
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Next Followup date<span style="color:red;">*</span></label>
                            <input type="date"  name ="followup" id="followup" class="form-control validate">
                             
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">SSC / FSC name<span style="color:red;">*</span></label>
                            <select  name ="ssc_name" id="ssc_name" class="form-control validate">
                              <option value="">SSC/FSC name</option>
                              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($user->id); ?>" selected><?php echo e($user->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                             
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Remarks</label>
                            <textarea  name ="remarks" id="remarks" class="form-control validate"></textarea>
                             
                         </div>
                        </div>
                         <br>
                         <div class="md-form mb-5">
                           <input type="submit" class="btn btn-primary btn-rounded mb-4" style="float: right;">
                         </div>
                         <br><br>
                        </form>   
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
jQuery( document ).ready(function() {

jQuery('#form_submit').validate({
    rules:{
            customer_email:
            {
              email:true
            },
      vehicle_segment:
            {

            required:true
            },
            model:
            {

            required:true
            },
            varient:
            {

            required:true
            },
            customer_type:
            {

            required:true
            },
            customer_category:
            {

            required:true
            },
            sale_status:
            {

            required:true
            },
            followup:
            {

            required:true
            },
            ssc_name:
            {

            required:true
            },
           
          },
          messages: {
            customer_email:"Please enter valid email id",
            vehicle_segment: "Please select vehicle segment",
            model : "Please select model interested",
            varient: "Please select varient interested",
            customer_type: "Please select customer type",
            customer_category:"Please select customer category",
            sale_status: "Please select sale status",
            followup: "Please enter next follow up date",
            ssc_name: "Please select ssc/fsc name",
            
          },
          highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

})
});
</script>
    
 
    
<script>
      
            function isNumberKey(evt){
              var charCode = (evt.which) ? evt.which : event.keyCode
              if (charCode > 31 && (charCode < 48 || charCode > 57))
              {
                  if((charCode!=32)&&(charCode!=43))
                  {
                      return false; 
                  }
                  else{
                  return true;
                  }
              }
              else{
                  return true;
              }  
          } 
         </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\html\CAI\smsapp\september\21-09-2021\caisms\caisms\resources\views/admin/sendthankyou.blade.php ENDPATH**/ ?>