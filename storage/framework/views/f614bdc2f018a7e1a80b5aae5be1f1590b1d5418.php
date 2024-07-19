<main class="main <?php echo e($PageVariation['home_variation']); ?>">
	<!-- Hero Section -->
	<?php if($slider_hero_section->is_publish == 1): ?>
	<section class="hero-section">
		<?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $aRow = json_decode($row->desc); ?>
		<div class="hero-screen hero-overlay" style="background-image: url(<?php echo e($row->image ? asset('public/media/'.$row->image) : ''); ?>);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
						<div class="hero-content">
							<h1><?php echo e($row->title); ?></h1>
							<?php if($aRow->sub_title != ''): ?>
							<p><?php echo e($aRow->sub_title); ?></p>
							<?php endif; ?>
							<?php if($aRow->button_text != ''): ?>
							<a href="<?php echo e($row->url); ?>" class="btn theme-btn" <?php echo e($aRow->target =='' ? '' : "target=".$aRow->target); ?>><?php echo e($aRow->button_text); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		<div class="search-card">
			<div class="container">
				<div class="search-card-inner">
					<form method="GET" action="<?php echo e(route('frontend.search')); ?>">
						<div class="row g-2">
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="checkin_date" class="form-label"><?php echo e(__('Check In')); ?></label>
								<input name="checkin_date" id="checkin_date" type="text" class="form-control" placeholder="yyyy-mm-dd" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="checkout_date" class="form-label"><?php echo e(__('Check Out')); ?></label>
								<input name="checkout_date" id="checkout_date" type="text" class="form-control" placeholder="yyyy-mm-dd" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="total_adult" class="form-label"><?php echo e(__('Adult')); ?></label>
								<input name="total_adult" id="total_adult" type="number" class="form-control" value="1" min="1" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
								<label for="total_child" class="form-label"><?php echo e(__('Child')); ?></label>
								<input name="total_child" id="total_child" type="number" class="form-control" value="0" min="0" required>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
								<button type="submit" class="btn theme-btn search-btn"><?php echo e(__('Check Availability')); ?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Hero Section/ -->

	<!-- About Section/ -->
	<?php if($about_us_section->is_publish == 1): ?>
	<?php $__currentLoopData = $about_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php $aRow = json_decode($row->desc); ?>
	<section class="section about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-5">
					<?php if($row->image != ''): ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="about-img">
								<img src="<?php echo e(asset('public/media/'.$row->image)); ?>" alt="<?php echo e($row->title); ?>">
							</div>
						</div>
					</div>
					<?php endif; ?>

					<div class="row">
						<?php if($aRow->image2 != ''): ?>
						<div class="col-12 col-md-6">
							<div class="about-img">
								<img src="<?php echo e(asset('public/media/'.$aRow->image2)); ?>" alt="<?php echo e($row->title); ?>">
							</div>
						</div>
						<?php endif; ?>
						<?php if($aRow->image3 != ''): ?>
						<div class="col-12 col-md-6">
							<div class="about-img">
								<img src="<?php echo e(asset('public/media/'.$aRow->image3)); ?>" alt="<?php echo e($row->title); ?>">
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-md-12 col-lg-7">
					<div class="about-card">
						<div class="about-title">
							<h5><?php echo e(__('About Us')); ?></h5>
							<h2><?php echo e($row->title); ?></h2>
						</div>
						<?php if($aRow->description != ''): ?>
						<p class="mb20"><?php echo e($aRow->description); ?></p>
						<?php endif; ?>
						<div class="row mb40">
							<?php if($aRow->total_rooms != ''): ?>
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-buildings"></i>
									</div>
									<div class="content">
										<h4><?php echo e($aRow->total_rooms); ?></h4>
										<p><?php echo e(__('Rooms')); ?></p>
									</div>
								</div>
							</div>
							<?php endif; ?>
							
							<?php if($aRow->total_customers != ''): ?>
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="content">
										<h4><?php echo e($aRow->total_customers); ?></h4>
										<p><?php echo e(__('Customers')); ?></p>
									</div>
								</div>
							</div>
							<?php endif; ?>
							
							<?php if($aRow->total_amenities != ''): ?>
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="content">
										<h4><?php echo e($aRow->total_amenities); ?></h4>
										<p><?php echo e(__('Amenities')); ?></p>
									</div>
								</div>
							</div>
							<?php endif; ?>
							
							<?php if($aRow->total_packages != ''): ?>
							<div class="col-12 col-sm-3 col-lg-3">
								<div class="info-card mb15">
									<div class="icon">
										<i class="bi bi-percent"></i>
									</div>
									<div class="content">
										<h4><?php echo e($aRow->total_packages); ?></h4>
										<p><?php echo e(__('Packages')); ?></p>
									</div>
								</div>
							</div>
							<?php endif; ?>
						</div>
						
						<?php if($aRow->button_text != ''): ?>
						<a href="<?php echo e($row->url); ?>" class="btn theme-btn" <?php echo e($aRow->target =='' ? '' : "target=".$aRow->target); ?>><?php echo e($aRow->button_text); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
	<!-- /About Section/ -->

	<!-- Offer Section -->
	<?php if($offer_ads_section->is_publish == 1): ?>
	<section class="section offer-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h5><?php echo e($offer_ads_section->title); ?></h5>
						<?php if($offer_ads_section->desc != ''): ?>
						<h2><?php echo e($offer_ads_section->desc); ?></h2>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php $__currentLoopData = $OfferAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php $aRow = json_decode($row->desc); ?>
				<div class="col-lg-4">
					<div class="offer-card">
						<div class="offer-image">
							<img src="<?php echo e(asset('public/media/'.$row->image)); ?>" alt="<?php echo e($row->title); ?>" />
						</div>
						<div class="offer-content">
							<h2><?php echo e($row->title); ?></h2>
							<?php if($aRow->text_2 != ''): ?>
							<p><?php echo e($aRow->text_2); ?></p>
							<?php endif; ?>
							<?php if($aRow->button_text != ''): ?>
							<a href="<?php echo e($row->url); ?>" class="btn theme-btn offer-btn" <?php echo e($aRow->target =='' ? '' : "target=".$aRow->target); ?>><?php echo e($aRow->button_text); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Offer Section/ -->	
	
	<!-- Featured Section/ -->
	<?php if($featured_rooms_section->is_publish == 1): ?>
	<section class="section featured-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5><?php echo e(__('Choose Your Rooms')); ?></h5>
						<h2><?php echo e($featured_rooms_section->title); ?></h2>
						<?php if($featured_rooms_section->desc != ''): ?>
						<p><?php echo e($featured_rooms_section->desc); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="row">
				<?php $__currentLoopData = $featured_rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Featured Section/ -->

	<!-- Services Section/ -->
	<?php if($our_services_section->is_publish == 1): ?>
	<section class="section service-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5><?php echo e(__('Our Services')); ?></h5>
						<h2><?php echo e($our_services_section->title); ?></h2>
						<?php if($our_services_section->desc != ''): ?>
						<p><?php echo e($our_services_section->desc); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php $__currentLoopData = $our_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-icon">
							<img src="<?php echo e(asset('public/media/'.$row->image)); ?>" alt="<?php echo e($row->title); ?>" />
						</div>
						<h4><?php echo e($row->title); ?></h4>
						<p><?php echo e($row->desc); ?></p>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Services Section/ -->

	<!-- Preview Video Section-->
	<?php if($home_video['is_publish'] == 1): ?>
	<section class="preview-section">
		<div class="row align-items-center justify-content-center g-0">
			<div class="col-12 col-md-12 col-lg-12 col-xl-6">
				<div class="preview-video">
					<img src="<?php echo e(asset('public/media/'.$home_video['image'])); ?>" alt="<?php echo e($home_video['title']); ?>">
					<div class="video-card">
						<a href="<?php echo e($home_video['video_url']); ?>" class="play-icon popup-video">
							<i class="bi bi-play-fill"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-12 col-xl-6">
				<div class="preview-content">
					<h5><?php echo e(__('Preview')); ?></h5>
					<h2><?php echo e($home_video['title']); ?></h2>
					<?php if($home_video['short_desc'] !=''): ?>
					<p><?php echo e($home_video['short_desc']); ?></p>
					<?php endif; ?>
					<a href="<?php echo e($home_video['url']); ?>" <?php echo e($home_video['target'] =='' ? '' : "target=".$home_video['target']); ?> class="btn theme-btn"><?php echo e($home_video['button_text']); ?></a>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Preview Video Section/ -->

	<!-- Testimonial Section/ -->
	<?php if($testimonial_section->is_publish == 1): ?>
	<section class="section testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5><?php echo e(__('Testimonial')); ?></h5>
						<h2><?php echo e($testimonial_section->title); ?></h2>
						<?php if($testimonial_section->desc != ''): ?>
						<p><?php echo e($testimonial_section->desc); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row testimonial-slider">
				<?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-12">
					<div class="testimonial-card">
						<div class="client">
							<div class="img-card">
								<img src="<?php echo e(asset('public/media/'.$row->image)); ?>" alt="<?php echo e($row->title); ?>" />
							</div>
							<div class="client-info">
								<h4><?php echo e($row->title); ?></h4>
								<span><?php echo e(__('Client')); ?></span>
							</div>
						</div>
						<div class="quote"><i class="bi bi-quote"></i></div>
						<div class="comment"><?php echo e($row->desc); ?></div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Testimonial Section/ -->

	<!-- Blog Section/ -->
	<?php if($our_blogs_section->is_publish == 1): ?>
	<section class="section blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<h5><?php echo e(__('Our Blogs')); ?></h5>
						<h2><?php echo e($our_blogs_section->title); ?></h2>
						<?php if($our_blogs_section->desc != ''): ?>
						<p><?php echo e($our_blogs_section->desc); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="blog-card">
						<div class="blog-img">
							<a href="<?php echo e(route('frontend.article', [$row->id, $row->slug])); ?>">
								<img src="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>" alt="<?php echo e($row->title); ?>" />
							</a>
						</div>
						<div class="blog-content">
							<div class="blog-meta-card">
								<div class="blog-date"><i class="bi bi-alarm"></i><?php echo e(date('d M , Y', strtotime($row->created_at))); ?></div>
								<div class="blog-meta"><i class="bi bi-person"></i><?php echo e(__('By')); ?>, <?php echo e($row->name); ?></div>
							</div>
							<div class="blog-title">
								<h4><a href="<?php echo e(route('frontend.article', [$row->id, $row->slug])); ?>"><?php echo e($row->title); ?></a></h4>
							</div>
							<div class="read-more-btn">
								<a href="<?php echo e(route('frontend.article', [$row->id, $row->slug])); ?>">
									<?php echo e(__('Read More')); ?> <i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- /Blog Section/ -->
</main><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/frontend/partials/homepage1.blade.php ENDPATH**/ ?>