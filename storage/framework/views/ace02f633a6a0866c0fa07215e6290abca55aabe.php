<div class="sidebar-wrapper">
	<div class="logo">
		<a href="<?php echo e(route('backend.dashboard')); ?>">
			<img src="<?php echo e($gtext['back_logo'] ? asset('public/media/'.$gtext['back_logo']) : asset('public/backend/images/backend-logo.png')); ?>" alt="logo">
		</a>
	</div>
	<div class="version">Theme V 1.0.0</div>
	<ul class="left-navbar">
		<?php if(Auth::user()->role_id == 1): ?>
		<li><a href="<?php echo e(route('backend.dashboard')); ?>"><i class="fa fa-tachometer"></i><?php echo e(__('Dashboard')); ?></a></li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-rocket"></i><?php echo e(__('Booking Manage')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.booking-request')); ?>"><?php echo e(__('Booking Request')); ?></a></li>
				<li><a href="<?php echo e(route('backend.book-room')); ?>"><?php echo e(__('Book Room')); ?></a></li>
				<li><a href="<?php echo e(route('backend.all-booking')); ?>"><?php echo e(__('All Booking')); ?></a></li>
			</ul>
		</li>
		<li><a href="<?php echo e(route('backend.room-list')); ?>"><i class="fa fa-braille"></i><?php echo e(__('Room List')); ?></a></li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-bed"></i><?php echo e(__('Hotel Manage')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.room-type')); ?>"><?php echo e(__('Room Type')); ?></a></li>
				<li><a href="<?php echo e(route('backend.categories')); ?>"><?php echo e(__('Categories')); ?></a></li>
				<li><a href="<?php echo e(route('backend.amenities')); ?>"><?php echo e(__('Amenities')); ?></a></li>
				<li><a href="<?php echo e(route('backend.complements')); ?>"><?php echo e(__('Complements')); ?></a></li>
				<li><a href="<?php echo e(route('backend.bed-types')); ?>"><?php echo e(__('Bed Types')); ?></a></li>
				<li><a href="<?php echo e(route('backend.tax')); ?>"><?php echo e(__('Tax')); ?></a></li>
				<li><a href="<?php echo e(route('backend.currency')); ?>"><?php echo e(__('Currency')); ?></a></li>
				<li><a href="<?php echo e(route('backend.payment-methods')); ?>"><?php echo e(__('Payment Methods')); ?></a></li>
				<li><a href="<?php echo e(route('backend.countries')); ?>"><?php echo e(__('Countries')); ?></a></li>
			</ul>
		</li>

		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i><?php echo e(__('Home Page Manage')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.slider')); ?>"><?php echo e(__('Slider/Hero Section')); ?></a></li>
				<li><a href="<?php echo e(route('backend.about-us')); ?>"><?php echo e(__('About Us')); ?></a></li>
				<li><a href="<?php echo e(route('backend.our-services')); ?>"><?php echo e(__('Our Services')); ?></a></li>
				<li><a href="<?php echo e(route('backend.home-video')); ?>"><?php echo e(__('Video Section')); ?></a></li>
				<li><a href="<?php echo e(route('backend.testimonial')); ?>"><?php echo e(__('Testimonial')); ?></a></li>
				<li><a href="<?php echo e(route('backend.offer-ads')); ?>"><?php echo e(__('Offer & Ads')); ?></a></li>
				<li><a href="<?php echo e(route('backend.section-manage')); ?>"><?php echo e(__('Section Manage')); ?></a></li>
			</ul>
		</li>
		<li><a href="<?php echo e(route('backend.page')); ?>"><i class="fa fa-clipboard"></i><?php echo e(__('Pages')); ?></a></li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-rss-square"></i><?php echo e(__('Blog')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.blog')); ?>"><?php echo e(__('Posts')); ?></a></li>
				<li><a href="<?php echo e(route('backend.blog-categories')); ?>"><?php echo e(__('Categories')); ?></a></li>
			</ul>
		</li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-wrench"></i><?php echo e(__('Appearance')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.menu')); ?>"><?php echo e(__('Menu')); ?></a></li>
				<li><a href="<?php echo e(route('backend.theme-options')); ?>"><?php echo e(__('Theme Options')); ?></a></li>
			</ul>
		</li>
		<li><a href="<?php echo e(route('backend.customers')); ?>"><i class="fa fa-users"></i><?php echo e(__('Customers')); ?></a></li>
		<li><a href="<?php echo e(route('backend.contact')); ?>"><i class="fa fa-envelope"></i><?php echo e(__('Contact')); ?></a></li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-paper-plane"></i><?php echo e(__('Newsletters')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.subscribers')); ?>"><?php echo e(__('Subscribers')); ?></a></li>
				<li><a href="<?php echo e(route('backend.subscribe-settings')); ?>"><?php echo e(__('Subscribe Settings')); ?></a></li>
				<li><a href="<?php echo e(route('backend.mailchimp-settings')); ?>"><?php echo e(__('MailChimp Settings')); ?></a></li>
			</ul>
		</li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-language"></i><?php echo e(__('Languages')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('backend.languages')); ?>"><?php echo e(__('Languages')); ?></a></li>
				<li><a href="<?php echo e(route('backend.language-keywords')); ?>"><?php echo e(__('Language Keywords')); ?></a></li>
			</ul>
		</li>
		<li><a href="<?php echo e(route('backend.media')); ?>"><i class="fa fa-picture-o"></i><?php echo e(__('Media')); ?></a></li>
		<li><a id="active-settings" href="<?php echo e(route('backend.general')); ?>"><i class="fa fa-cogs"></i><?php echo e(__('Settings')); ?></a></li>
		<li><a href="<?php echo e(route('backend.users')); ?>"><i class="fa fa-user-plus"></i><?php echo e(__('Users')); ?></a></li>
		<?php elseif(Auth::user()->role_id == 3): ?>
		<li><a href="<?php echo e(route('receptionist.dashboard')); ?>"><i class="fa fa-tachometer"></i><?php echo e(__('Dashboard')); ?></a></li>
		<li><a href="<?php echo e(route('receptionist.room-list')); ?>"><i class="fa fa-braille"></i><?php echo e(__('Room List')); ?></a></li>
		<li class="dropdown"><a class="nav-link has-dropdown" href="#" data-toggle="dropdown"><i class="fa fa-rocket"></i><?php echo e(__('Booking Manage')); ?></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo e(route('receptionist.booking-request')); ?>"><?php echo e(__('Booking Request')); ?></a></li>
				<li><a href="<?php echo e(route('receptionist.book-room')); ?>"><?php echo e(__('Book Room')); ?></a></li>
				<li><a href="<?php echo e(route('receptionist.all-booking')); ?>"><?php echo e(__('All Booking')); ?></a></li>
			</ul>
		</li>
		<li><a href="<?php echo e(route('receptionist.profile')); ?>"><i class="fa fa-user"></i><?php echo e(__('Profile')); ?></a></li>
		<li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('receptionist-logout-form').submit();"><i class="fa fa-sign-out"></i><?php echo e(__('Logout')); ?></a></li>
		<form id="receptionist-logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
			<?php echo csrf_field(); ?>
		</form>
		<?php endif; ?>
	</ul>
</div><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/partials/sidebar.blade.php ENDPATH**/ ?>