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
                             Welcome Form
                            </h2>
                        </div>
                        <div class="body">
                        <form action="<?php echo e(route('addcustomer')); ?>" method="post" class="form-horizontal"  id="form_submit" autocomplete="off" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                          <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Name</label>
                            <input type="text"  name ="customer_name" id="customer_name" class="form-control validate" placeholder="Customer Name">
                         </div>
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Customer Mobile number</label>
                            <input type="text"  name ="mobile_no" id="mobile_no" class="form-control validate" placeholder="Customer Mobile number" onkeypress="return isNumberKey(event)" onkeyup="return isNumberKey(event)" maxlength="10">
                         </div>
                         <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Place</label>
                           
                            <select  name="place" id="place" class="form-control">
                             <option value= "">Place</option>
                             <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($place->id); ?>"><?php echo e($place->city); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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
      customer_name:
            {

            required:true
            },
            mobile_no:
            {

            required:true,
            number:true
            },
            place:
            {

            required:true
            },
           
          },
          messages: {
            customer_name: "Please enter customer name",
            mobile_no : "Please enter customer mobile no",
            place: "Please select place",
            
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
<?php /**PATH C:\xampp\htdocs\html\CAI\smsapp\september\22-09-2021\caisms\caisms\resources\views/admin/welcome.blade.php ENDPATH**/ ?>