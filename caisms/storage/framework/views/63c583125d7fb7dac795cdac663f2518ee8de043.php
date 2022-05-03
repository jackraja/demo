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
                              Employee Master
                            </h2>
                        </div>
                        <div class="body">
                        
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width:100%;">
                                    <thead>
                                       <tr>
                                           <th># </th>
                                            <th>Branch</th>
                                            <th>Desigination</th>
                                            <th>Name</th>
                                            <th>Employee Code</th>
                                            <th>Status</th>
                                             <th>Action</th>
                                         </tr>
                                   </thead>
                                   <tbody>
                                      
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?php echo e(route('addemployeeMaster')); ?>" method="post" class="form-horizontal"  id="form_submit" autocomplete="off" enctype="multipart/form-data">
     <?php echo csrf_field(); ?>
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add New Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Employ Code</label>
          <input type="text"  name ="employcode" id="employcode" class="form-control validate" placeholder="Employ Code">
       </div>
       <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
          <input type="text"  name ="name" id="name" class="form-control validate" placeholder="Name">
       </div>
       <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Desigination</label>
         
          <select  name="desigination" id="desigination" class="form-control">
           <option value= "">Select Desigination</option>
           <?php $__currentLoopData = $desigination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desiginations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($desiginations->id); ?>"><?php echo e($desiginations->desigination); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
       </div>
       <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Branch</label>
          <input type="hidden" name="employeeid" id="employeeid">
          <select  name="branch" id="branch" class="form-control">
           <option value= "">Select Branch</option>
           <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branchs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($branchs->id); ?>"><?php echo e($branchs->branch); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
       </div>
       <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Date Of Joining</label>
          <input type="date"  name ="doj" id="doj" class="form-control validate" placeholder="Date Of Joining">
       </div>
       <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Branch</label>
          <select  name="status" id="status" class="form-control">
           <option value= "">Select Status</option>
          <option value="Active">Active</option>
          <option value="Resigned">Resigned</option>
         </select>
       </div>
       <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Login Name</label>
          <input type="text"  name ="loginname" id="loginname" class="form-control validate" placeholder="Login Name">
       </div>
       <div class="md-form mb-5 password">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
          <input type="text"  name ="password" id="password" class="form-control validate" placeholder="Password">
       </div>
      
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal" id="confirmActive" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
            <h4 class="modal-title">Deactivate Parmanently</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
         <p>Are you sure deactivate this?</p>
       </div>
       <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="confirm">Submit</button>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
jQuery( document ).ready(function() {

jQuery('#form_submit').validate({
    rules:{
      name:
            {

            required:true
            },
            employcode:
            {

            required:true
            },
            desigination:
            {

            required:true
            },
            branch:
            {

            required:true
            },
            doj:
            {

            required:true
            },
            status:
            {

            required:true
            },
            password:
            {

            required:true
            }
          },
          messages: {
            name: "Please enter Name",
            employcode : "Please enter Employee Code",
            desigination: "Please select Desigination",
            branch: "Please select Branch",
            doj: "Please enter Date Of Joining",
            status: "Please select Status",
            password: "Please enter Password",
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
    $(document).ready(function () {
        
        $('#data-table-basic').DataTable({
            "processing": true,
            "serverSide": true,
            "stateSave": true,
            "destroy": true,
            "ajax":{
                     "url": "<?php echo e(url('allemployeeMaster')); ?>",
                     "dataType": "json",
                     "type": "post",
                     "data":{ _token: "<?php echo e(csrf_token()); ?>"}
                   },
            "columns": [
                { "data": "id" },
                { "data": "branch" },
                { "data": "desigination" },
                { "data": "employee" },
                { "data": "employcode" },
                { "data": "status" },
                { "data": "actions" },
             ],
            "columnDefs": [
                { "orderable": false, "targets": 0}
            ]
        });
    });
    </script>
 
         
         <script>
      $('#confirmActive').on('show.bs.modal', function (e) {
          $message = $(e.relatedTarget).attr('data-message');
          $(this).find('.modal-body p').text($message);
          $title = $(e.relatedTarget).attr('data-title');
          $(this).find('.modal-title').text($title);

          // Pass form reference to modal for submission on yes/ok
         var form = $(e.relatedTarget).closest('form');
          $(this).find('.modal-footer #confirm').data('form', form);
      });

      <!-- Form confirm (yes/ok) handler, submits form -->
      $('#confirmActive').find('.modal-footer #confirm').on('click', function(){
      $(this).data('form').submit();
      });
    </script>
    
<script>
         $(document).on('click','.edit',function(e) {
                var id=this.id;
                var branch=$('.branch_'+id).val();
                var employee=$('.employee_'+id).val();
                var employcode = $('.employcode_'+id).val();
                var status = $('.status_'+id).val();
                var loginname = $('.loginname_'+id).val();
                var password = $('.password_'+id).val();
                var doj = $('.doj_'+id).val(); 
                $('#employeeid').val(id);
                $('#employee').val(employee);
                $('#employcode').val(employcode);
                $('#status').val(status);
                $('#loginname').val(loginname);
                $('.password').hide();
                $('#doj').val(doj);
              });
           $(document).on('click','.add',function(e) {
                $('#employeeid').val('');
                $('#employee').val('');
                $('#employcode').val('');
                $('#status').val('');
                $('#loginname').val('');
                $('#password').val('');
                $('.password').show();
            });
         </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\html\CAI\smsapp\september\18-09-2021\caisms\caisms\resources\views/admin/employee.blade.php ENDPATH**/ ?>