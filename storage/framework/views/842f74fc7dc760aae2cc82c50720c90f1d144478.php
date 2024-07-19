<?php $__env->startSection('title', __('Login')); ?>

<?php $gtext = gtext(); ?>

<?php $__env->startSection('content'); ?>
<!-- main Section -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="loginsignup-area">
				<div class="loginsignup text-center">
					<div class="logo">
						<a href="<?php echo e(url('/login')); ?>">
							<img src="<?php echo e($gtext['back_logo'] ? asset('public/media/'.$gtext['back_logo']) : asset('public/backend/images/backend-logo.png')); ?>" alt="logo">
						</a>
					</div>
					<?php if(session('message')): ?>
						<div class="alert alert-danger"><?php echo e(session('message')); ?></div>
					<?php endif; ?>
					<form id="login_form" method="POST" action="<?php echo e(route('login')); ?>">
						<?php echo csrf_field(); ?>
						
						<?php if($errors->any()): ?>
							<ul class="errors-list">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><?php echo e($error); ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						<?php endif; ?>
						
						<div class="form-group">
							<input type="email" id="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Email Address')); ?>" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
						</div>
						<div class="form-group">
							<input type="password" id="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Password')); ?>" required autocomplete="current-password">
						</div>
						<div class="tw_checkbox checkbox_group">
							<input id="remember" name="remember" type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?>>
							<label for="remember"><?php echo e(__('Remember me')); ?></label>
							<span></span>
						</div>
						<input type="submit" class="btn login-btn" value="<?php echo e(__('Login')); ?>">
					</form>
					
					<?php if(Route::has('password.request')): ?>
					<h3><a href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot your password?')); ?></a></h3>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /main Section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/auth/login.blade.php ENDPATH**/ ?>