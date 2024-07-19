

<?php $__env->startSection('title', __('404 - Not Found')); ?>
<?php $gtext = gtext(); ?>

<?php $__env->startSection('meta-content'); ?>
	<meta name="keywords" content="<?php echo e($gtext['og_keywords']); ?>" />
	<meta name="description" content="<?php echo e($gtext['og_description']); ?>" />
	<meta property="og:title" content="<?php echo e($gtext['og_title']); ?>" />
	<meta property="og:site_name" content="<?php echo e($gtext['site_name']); ?>" />
	<meta property="og:description" content="<?php echo e($gtext['og_description']); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
	<meta property="og:image" content="<?php echo e(asset('public/media/'.$gtext['og_image'])); ?>" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="315" />
	<?php if($gtext['fb_publish'] == 1): ?>
	<meta name="fb:app_id" property="fb:app_id" content="<?php echo e($gtext['fb_app_id']); ?>" />
	<?php endif; ?>
	<meta name="twitter:card" content="summary_large_image">
	<?php if($gtext['twitter_publish'] == 1): ?>
	<meta name="twitter:site" content="<?php echo e($gtext['twitter_id']); ?>">
	<meta name="twitter:creator" content="<?php echo e($gtext['twitter_id']); ?>">
	<?php endif; ?>
	<meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
	<meta name="twitter:title" content="<?php echo e($gtext['og_title']); ?>">
	<meta name="twitter:description" content="<?php echo e($gtext['og_description']); ?>">
	<meta name="twitter:image" content="<?php echo e(asset('public/media/'.$gtext['og_image'])); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main class="main">
	<!-- Page Breadcrumb -->
	<section class="breadcrumb-section" style="background-image: url(<?php echo e(asset('public/frontend/images/breadcrumb_bg.jpg')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-card">
						<h2><?php echo e(__('404 - Not Found')); ?></h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('404 - Not Found')); ?></li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Page Breadcrumb/ -->	
	<!-- Inner Section -->
	<section class="inner-section inner-section-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="error_card">
						<div class="error_img">
							<img src="<?php echo e(asset('public/frontend/images/404.png')); ?>" />
						</div>
						<p><?php echo e(__('This page you are looking for could not be found!')); ?></p>
						<a class="btn theme-btn" href="<?php echo e(url('/')); ?>"><?php echo e(__('Back to Home Page')); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Inner Section/ -->
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>	
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/errors/404.blade.php ENDPATH**/ ?>