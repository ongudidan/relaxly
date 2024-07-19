
	<header class="header">
		<!--Top Header-->
		<div class="top-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<?php if($gtext['is_publish'] == 1): ?>
						<ul class="top-list-1">
							<?php if($gtext['address'] != ''): ?>
							<li><i class="bi bi-geo-alt"></i><?php echo e($gtext['address']); ?></li>
							<?php endif; ?>
							<?php if($gtext['phone'] != ''): ?>
							<li><i class="bi bi-telephone"></i><?php echo e($gtext['phone']); ?></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>
					</div>
					<div class="col-lg-6">
						<ul class="top-list">
							<?php if(auth()->guard()->check()): ?>
							<li>
								<div class="btn-group language-menu">
									<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
										<?php echo e(Auth::user()->name); ?>

									</a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li><a class="dropdown-item" href="<?php echo e(route('frontend.my-dashboard')); ?>"><?php echo e(__('My Dashboard')); ?></a></li>
										<li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
										<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
											<?php echo csrf_field(); ?>
										</form>
										</li>
									</ul>
								</div>
							</li>
							<?php else: ?>
							<?php if(Route::has('frontend.register')): ?>
							<li><a href="<?php echo e(route('frontend.register')); ?>"><i class="bi bi-person-plus"></i><?php echo e(__('Register')); ?></a></li>
							<?php endif; ?>
							<?php if(Route::has('login')): ?>
							<li><a href="<?php echo e(route('frontend.login')); ?>"><i class="bi bi-person"></i><?php echo e(__('Sign in')); ?></a></li>
							<?php endif; ?>
							<?php endif; ?>
							
							<?php if($gtext['is_language_switcher'] == 1): ?>
							<li>
								<?php echo language(); ?>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/Top Header/-->
		<!--Menu-->
		<div class="header-menu" id="sticky-menu">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<div class="logo">
							<a href="<?php echo e(url('/')); ?>">
								<img src="<?php echo e($gtext['front_logo'] ? asset('public/media/'.$gtext['front_logo']) : asset('public/frontend/images/logo.png')); ?>" alt="logo">
							</a>
						</div>
						<div class="icon-bars-card">
							<a class="off-canvas-btn" href="javascript:void(0);"><i class="bi bi-list"></i></a>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="tp-mega-full">
							<div class="tp-menu align-self-center">
								<nav>
									<ul class="main-menu">
										<?php echo HeaderMenuList('HeaderMenuListForDesktop'); ?>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Menu/-->
	</header>
	
	<!-- off-canvas menu start -->
	<aside class="mobile-menu-wrapper">
		<div class="off-canvas-overlay"></div>
		<div class="offcanvas-body">
			<div class="offcanvas-top">
				<div class="offcanvas-btn-close">
					<i class="bi bi-x-lg"></i>
				</div>
			</div>
			<div class="mobile-navigation">
				<nav>
					<ul class="mobile-menu">
						<?php echo HeaderMenuList('HeaderMenuListForMobile'); ?>
					</ul>
				</nav>
			</div>
		</div>
	</aside>
	<!-- /off-canvas menu start -->
<?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>