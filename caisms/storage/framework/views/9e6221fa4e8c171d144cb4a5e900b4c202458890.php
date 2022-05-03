<?php echo $__env->make('partials.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
           
           
            
            <!-- Widgets -->
           
            <!-- #END# Widgets -->
            <!-- Widgets -->
          
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('asset/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('asset/plugins/bootstrap/js/bootstrap.js')); ?>"></script>
    <!-- Select Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/node-waves/waves.js')); ?>"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/jquery-countto/jquery.countTo.js')); ?>"></script>
    <!-- Morris Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/raphael/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/morrisjs/morris.js')); ?>"></script>
    <!-- ChartJs -->
    <script src="<?php echo e(asset('asset/plugins/chartjs/Chart.bundle.js')); ?>"></script>
    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/flot-charts/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/flot-charts/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/flot-charts/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/flot-charts/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/plugins/flot-charts/jquery.flot.time.js')); ?>"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo e(asset('asset/plugins/jquery-sparkline/jquery.sparkline.js')); ?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo e(asset('asset/js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/pages/index.js')); ?>"></script>
    <!-- Demo Js -->
    <script src="<?php echo e(asset('asset/js/demo.js')); ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script type="text/javascript">
       $('.datepicker').datepicker({
           dateFormat: 'dd-mm-yy'
       });
   </script>
</body>
</html>
<?php /**PATH C:\xampp4\htdocs\example-app\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>