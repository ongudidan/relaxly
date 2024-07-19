<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php $gtext = gtext(); ?>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title><?php echo $__env->yieldContent('title'); ?> | <?php echo e($gtext['site_title']); ?></title>
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo e($gtext['favicon'] ? asset('public/media/'.$gtext['favicon']) : asset('public/backend/images/favicon.ico')); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo e($gtext['favicon'] ? asset('public/media/'.$gtext['favicon']) : asset('public/backend/images/favicon.ico')); ?>" type="image/x-icon">
    <!-- CSS -->
	<style type="text/css">
	:root {
	  --backend-theme-color: <?php echo e($gtext['backend_theme_color']); ?>;
	}
	</style>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/chosen/bootstrap-chosen.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/jquery.gritter.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/responsive.css')); ?>">
	<?php echo $__env->yieldPushContent('style'); ?>
  </head>
  <body>
	<div id="wrapper" class="d-flex relative">
		<!-- Sidebar -->
		<?php echo $__env->make('backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- /Sidebar/ -->
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<!--Top Navbar-->
			<?php echo $__env->make('backend.partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!--/Top Navbar/-->
			<!--Main Body-->
			<?php echo $__env->yieldContent('content'); ?>	
			<!--/Main Body/-->
		</div><!-- /Page Content/ -->
	</div><!--/wrapper-->
    <!-- JS -->
	<script src="<?php echo e(asset('public/backend/js/jquery-3.6.3.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/backend/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/backend/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/backend/js/plugins.js')); ?>"></script>
	<script type="text/javascript">
	var base_url = "<?php echo e(url('/')); ?>";
	var public_path = "<?php echo e(asset('public')); ?>";
	var userid = "<?php echo e(Auth::user()->id); ?>";
	</script>
	<script src="<?php echo e(asset('public/backend/js/script.js')); ?>"></script>
	<div class="custom-popup light width-100 dnone" id="lightCustomModal">
		<div class="padding-md">
			<h4 class="m-top-none"><?php echo e(__('This is alert message')); ?></h4>
		</div>
		<div class="text-center">
			<a href="javascript:void(0);" class="btn blue-btn lightCustomModal_close mr-10" onClick="onConfirm()"><?php echo e(__('Confirm')); ?></a>
			<a href="javascript:void(0);" class="btn danger-btn lightCustomModal_close"><?php echo e(__('Cancel')); ?></a>
		</div>
	</div>
	<a href="#lightCustomModal" class="btn btn-warning btn-small lightCustomModal_open dnone"><?php echo e(__('Edit')); ?></a>
	<?php echo $__env->yieldPushContent('scripts'); ?>
  </body>
</html><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/layouts/backend.blade.php ENDPATH**/ ?>