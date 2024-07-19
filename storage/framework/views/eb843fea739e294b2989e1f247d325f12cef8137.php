<nav class="navbar-expand-lg navbar tp-header">
	<span class="menu-toggler" id="menu-toggle">
		<span class="line"></span>
	</span>
	<a href="<?php echo e(url('/')); ?>" target="_blank" class="view_website"><?php echo e(__('View Website')); ?></a>
	
	<div class="dropdown ml-auto mt-0 mt-lg-0">
		<a href="javascript:void(0);" class="my-profile-info" data-toggle="dropdown">
			<div class="avatar">
				<img src="<?php echo e(Auth::user()->photo ? asset('public/media/'.Auth::user()->photo) : asset('public/backend/images/avatar.png')); ?>">
			</div>
			<div class="my-profile">
				<span><?php echo e(Auth::user()->name); ?></span>
				<span><?php echo e(Auth::user()->email); ?></span>
			</div>
		</a>
		<div class="dropdown-menu dropdown-menu-right my-profile-nav">
			<?php if(Auth::user()->role_id == 1): ?>
			<a class="dropdown-item" href="<?php echo e(route('backend.profile')); ?>"><?php echo e(__('Profile')); ?></a>
			<?php elseif(Auth::user()->role_id == 3): ?>
			<a class="dropdown-item" href="<?php echo e(route('receptionist.profile')); ?>"><?php echo e(__('Profile')); ?></a>
			<?php endif; ?>
			
			<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<?php echo e(__('Logout')); ?>

			</a>
			<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
				<?php echo csrf_field(); ?>
			</form>
		</div>
	</div>
</nav><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/partials/topnav.blade.php ENDPATH**/ ?>