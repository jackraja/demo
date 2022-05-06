<?php echo $__env->make('partials.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
           <form action="<?php echo e(route('searchwelcome')); ?>" method="POST" id="form">
            <?php echo csrf_field(); ?>
            <div class="row clearfix">
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
                    <input type="hidden" name="page" value="welcome">
                    <input type="submit" name="search" class="btn btn-primary" value="Search">
                </div>
                
                 <div class="col-md-3"></div>
            </div>
            </form>
            <br><br>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons"></i>
                        </div>
                        <div class="content">
                            <a href="<?php echo e(url('admin/welcome-report')); ?>"><div class="text">Welcome</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($welcome); ?>" data-speed="1000" data-fresh-interval="20"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons"></i>
                        </div>
                        <div class="content">
                            <a href="<?php echo e(url('admin/thankyou-report')); ?>"><div class="text">Thankyou</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($thank); ?>" data-speed="1000" data-fresh-interval="20"></div></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons"></i>
                        </div>
                        <div class="content">
                            <a href="<?php echo e(url('admin/thankyou-pending-report')); ?>"><div class="text">Thankyou Pending</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo e($pending); ?>" data-speed="1000" data-fresh-interval="20"></div></a>
                        </div>
                    </div>
                </div>
               
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
<?php /**PATH C:\xampp\htdocs\html\CAI\smsapp\september\23-09-2021\caisms\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>