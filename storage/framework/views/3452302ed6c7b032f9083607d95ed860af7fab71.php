

<?php $__env->startSection('title', $data->title); ?>
<?php $gtext = gtext(); ?>

<?php $__env->startSection('meta-content'); ?>
	<meta name="keywords" content="<?php echo e($data->og_keywords); ?>" />
	<meta name="description" content="<?php echo e($data->og_description ? $data->og_description : $data->short_desc); ?>" />
	<meta property="og:title" content="<?php echo e($data->og_title ? $data->og_title : $data->title); ?>" />
	<meta property="og:site_name" content="<?php echo e($gtext['site_name']); ?>" />
	<meta property="og:description" content="<?php echo e($data->og_description ? $data->og_description : $data->short_desc); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
	<meta property="og:image" content="<?php echo e($data->og_image ? asset('public/media/'.$data->og_image) : asset('public/media/'.$data->thumbnail)); ?>" />
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
	<meta name="twitter:title" content="<?php echo e($data->og_title ? $data->og_title : $data->title); ?>">
	<meta name="twitter:description" content="<?php echo e($data->og_description ? $data->og_description : $data->short_desc); ?>">
	<meta name="twitter:image" content="<?php echo e($data->og_image ? asset('public/media/'.$data->og_image) : asset('public/media/'.$data->thumbnail)); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="main">
	<!-- Page Breadcrumb -->
	<section class="breadcrumb-section" style="background-image: url(<?php echo e($data->cover_img ? asset('public/media/'.$data->cover_img) : ''); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-card">
						<h2><?php echo e($data->title); ?></h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo e($data->title); ?></li>
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
				<div class="col-12 col-md-12 col-lg-8">
					<div class="room-details-slider pd-slider-for">
						<?php if(count($room_images)>0): ?>
						<?php $__currentLoopData = $room_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item">
							<img src="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>" alt="<?php echo e($key); ?>" />
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
						<div class="item">
							<img src="<?php echo e(asset('public/media/'.$data->thumbnail)); ?>" alt="<?php echo e($data->title); ?>" />
						</div>
						<?php endif; ?>
					</div>
					<div class="thumbnail-card pd-slider-nav">
						<?php if(count($room_images)>0): ?>
						<?php $__currentLoopData = $room_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<img src="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>" alt="<?php echo e($key); ?>" />
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
						<img src="<?php echo e(asset('public/media/'.$data->thumbnail)); ?>" alt="<?php echo e($data->title); ?>" />
						<?php endif; ?>
					</div>
					<div class="room-details-card">
						<div class="item-title">
							<h3><?php echo e($data->title); ?></h3>
						</div>
						<div class="pric-card">
							<?php if($data->price != ''): ?>
								<?php if($gtext['currency_position'] == 'left'): ?>
								<div class="new-price"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($data->price)); ?></div>
								<?php else: ?>
								<div class="new-price"><?php echo e(NumberFormat($data->price)); ?><?php echo e($gtext['currency_icon']); ?></div>
								<?php endif; ?>
							<?php endif; ?>
							<?php if(($data->is_discount == 1) && ($data->old_price !='')): ?>
								<?php if($gtext['currency_position'] == 'left'): ?>
								<div class="old-price"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($data->old_price)); ?></div>
								<?php else: ?>
								<div class="old-price"><?php echo e(NumberFormat($data->old_price)); ?><?php echo e($gtext['currency_icon']); ?></div>
								<?php endif; ?>
							<?php endif; ?>
							<div class="per-day-night">/ <?php echo e(__('Night')); ?></div>
						</div>
						<ul class="item-meta">
							<li><?php echo e(__('Adult')); ?> <?php echo e($data->total_adult); ?></li>
							<li><?php echo e(__('Child')); ?> <?php echo e($data->total_child); ?></li>
						</ul>
						<div class="item-cat">
							<strong><?php echo e(__('Category')); ?>:</strong> <a href="<?php echo e(route('frontend.category', [$data->cat_id, $data->category_slug])); ?>"><?php echo e($data->category_name); ?></a>
						</div>
						<a href="<?php echo e(route('frontend.checkout', [$data->id, md5($data->slug)])); ?>" class="btn theme-btn booknow-btn"><?php echo e(__('Book Now')); ?></a>
						<div class="share_this">
							<h4 class="details-title"><?php echo e(__('Share this')); ?></h4>
							<div class="social-media">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('frontend.room', [$data->id, $data->slug])); ?>" target="_blank"><i class="bi bi-facebook"></i></a>
								<a href="https://twitter.com/intent/tweet?text=<?php echo e($data->title); ?>&url=<?php echo e(route('frontend.room', [$data->id, $data->slug])); ?>" target="_blank"><i class="bi bi-twitter"></i></a>
								<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(route('frontend.room', [$data->id, $data->slug])); ?>&title=<?php echo e($data->title); ?>&summary=<?php echo e($data->title); ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
								<a href="https://wa.me/?text=<?php echo e(route('frontend.room', [$data->id, $data->slug])); ?>" target="_blank"><i class="bi bi-whatsapp"></i></a>
							</div>
						</div>
					</div>
					<?php if($data->description != ''): ?>
					<div class="room-details-card">
						<h4 class="details-title"><?php echo e(__('Description')); ?></h4>
						<div class="entry">
							<?php echo $data->description; ?>
						</div>
					</div>
					<?php endif; ?>
					
					<?php if($data->amenities != ''): ?>
					<div class="room-details-card">
						<h4 class="details-title"><?php echo e(__('Amenities')); ?></h4>
						<ul class="details-list"><?php echo $data->amenities; ?></ul>
					</div>
					<?php endif; ?>
					
					<?php if($data->complements != ''): ?>
					<div class="room-details-card">
						<h4 class="details-title"><?php echo e(__('Complements')); ?></h4>
						<ul class="details-list"><?php echo $data->complements; ?></ul>
					</div>
					<?php endif; ?>
					
					<?php if($data->beds != ''): ?>
					<div class="room-details-card">
						<h4 class="details-title"><?php echo e(__('Beds')); ?></h4>
						<ul class="details-list"><?php echo $data->beds; ?></ul>
					</div>
					<?php endif; ?>
				</div>
				
				<div class="col-12 col-md-12 col-lg-4">
					<div class="sidebar">
						<?php if($gtext['is_publish_contact'] == 1): ?>
						<div class="widget-card">
							<div class="widget-title"><?php echo e(__('Contact')); ?></div>
							<div class="widget-body">
								<p><?php echo e(__('If you need any help, feel free to contact us.')); ?></p>
								
								<?php if($gtext['phone_footer'] != ''): ?>
								<p><strong><?php echo e(__('Phone')); ?>:</strong> <?php echo e($gtext['phone_footer']); ?></p>
								<?php endif; ?>
								
								<?php if($gtext['email_footer'] != ''): ?>
								<p><strong><?php echo e(__('Email')); ?>:</strong> <?php echo e($gtext['email_footer']); ?></p>
								<?php endif; ?>
								
								<?php if($gtext['address_footer'] != ''): ?>
								<p class="mb0"><strong><?php echo e(__('Address')); ?>:</strong> <?php echo e($gtext['address_footer']); ?></p>
								<?php endif; ?>
							</div>	
						</div>
						<?php endif; ?>
						
						<?php if(count($room_images)>0): ?>
						<div class="widget-card">
							<div class="widget-title">Gallery View</div>
							<div class="widget-body">
								<ul class="gallery-card room_gallery_view">
								<?php $__currentLoopData = $room_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>">
											<img src="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>" alt="<?php echo e($key); ?>" />
										</a>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>	
						</div>
						<?php endif; ?>
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/frontend/room.blade.php ENDPATH**/ ?>