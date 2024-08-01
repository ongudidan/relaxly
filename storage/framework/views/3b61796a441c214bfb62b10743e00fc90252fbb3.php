

<?php $__env->startSection('title', $metadata['name']); ?>
<?php $gtext = gtext(); ?>

<?php $__env->startSection('meta-content'); ?>
	<meta name="keywords" content="<?php echo e($metadata['og_keywords']); ?>" />
	<meta name="description" content="<?php echo e($metadata['og_description']); ?>" />
	<meta property="og:title" content="<?php echo e($metadata['og_title']); ?>" />
	<meta property="og:site_name" content="<?php echo e($gtext['site_name']); ?>" />
	<meta property="og:description" content="<?php echo e($metadata['og_description']); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
	<meta property="og:image" content="<?php echo e(asset('public/media/'.$metadata['og_image'])); ?>" />
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
	<meta name="twitter:title" content="<?php echo e($metadata['og_title']); ?>">
	<meta name="twitter:description" content="<?php echo e($metadata['og_description']); ?>">
	<meta name="twitter:image" content="<?php echo e(asset('public/media/'.$metadata['og_image'])); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="main">
	<!-- Page Breadcrumb -->
	<section class="breadcrumb-section" style="background-image: url(<?php echo e($metadata['thumbnail'] ? asset('public/media/'.$metadata['thumbnail']) : ''); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-card">
						<h2><?php echo e($metadata['name']); ?></h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo e($metadata['name']); ?></li>
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
				<?php if(count($datalist)>0): ?>
				<?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="item-card">
						<div class="item-image">
							<a href="<?php echo e(route('frontend.room', [$row->id, $row->slug])); ?>">
								<img src="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>" alt="<?php echo e($row->title); ?>" />
							</a>
							<?php if(($row->is_discount == 1) && ($row->old_price !='')): ?>
								<?php 
									$discount = number_format((($row->old_price - $row->price)*100)/$row->old_price);
								?>
							<span class="item-label"><?php echo e($discount); ?>% <?php echo e(__('Off')); ?></span>
							<?php endif; ?>
						</div>
						<div class="item-content">
							<div class="item-title">
								<a href="<?php echo e(route('frontend.room', [$row->id, $row->slug])); ?>"><?php echo e(str_limit($row->title)); ?></a>
							</div>
							<div class="pric-card">
								<?php if($row->price != ''): ?>
									<?php if($gtext['currency_position'] == 'left'): ?>
									<div class="new-price"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($row->price)); ?></div>
									<?php else: ?>
									<div class="new-price"><?php echo e(NumberFormat($row->price)); ?><?php echo e($gtext['currency_icon']); ?></div>
									<?php endif; ?>
								<?php endif; ?>
								<?php if(($row->is_discount == 1) && ($row->old_price !='')): ?>
									<?php if($gtext['currency_position'] == 'left'): ?>
									<div class="old-price"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($row->old_price)); ?></div>
									<?php else: ?>
									<div class="old-price"><?php echo e(NumberFormat($row->old_price)); ?><?php echo e($gtext['currency_icon']); ?></div>
									<?php endif; ?>
								<?php endif; ?>
								<div class="per-day-night">/ <?php echo e(__('Night')); ?></div>
							</div>
						</div>
						<a href="<?php echo e(route('frontend.room', [$row->id, $row->slug])); ?>" class="btn theme-btn book-now-btn"><?php echo e(__('Details')); ?></a>
						<ul class="item-meta">
							<li><?php echo e(__('Adult')); ?> <?php echo e($row->total_adult); ?></li>
							<li><?php echo e(__('Child')); ?> <?php echo e($row->total_child); ?></li>
						</ul>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4 col-xxl-4 offset-xxl-4">
					<div class="empty_card">
						<div class="empty_img">
							<img src="<?php echo e(asset('public/frontend/images/empty.png')); ?>" />
						</div>
						<h3><?php echo e(__('Oops! Not found.')); ?></h3>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="row mt30">
				<div class="col-lg-12">
					<?php echo e($datalist->links()); ?>

				</div>
			</div>
		</div>
	</section>
	<!-- /Inner Section/ -->	
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>	
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/frontend/category.blade.php ENDPATH**/ ?>