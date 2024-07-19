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
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/responsive.css')); ?>">
	<?php echo $__env->yieldPushContent('style'); ?>
  </head>
  <body>
	<?php echo $__env->yieldContent('content'); ?>
    <!-- JS -->
	<script src="<?php echo e(asset('public/backend/js/jquery-3.6.3.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/backend/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/backend/js/bootstrap.min.js')); ?>"></script>
	<?php echo $__env->yieldPushContent('scripts'); ?>
  </body>
</html><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/layouts/app.blade.php ENDPATH**/ ?>