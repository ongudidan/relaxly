

<?php $__env->startSection('title', __('Theme Register')); ?>

<?php $__env->startSection('content'); ?>
<!-- main Section -->
<div class="main-body">
	<div class="container-fluid">
		<div class="row mt-25">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><?php echo e(__('Settings')); ?></div>
					<div class="card-body tabs-area p-0">
						<?php echo $__env->make('backend.partials.settings_tabs_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<div class="tabs-body">
							<div id="PurchaseCodeId">
								<?php echo $__env->make('backend.partials.purchase_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /main Section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
var TEXT = [];
	TEXT['Do you really want to deregister the theme'] = "<?php echo e(__('Do you really want to deregister the theme')); ?>";
	TEXT['Please fill out required field'] = "<?php echo e(__('Please fill out required field')); ?>";
</script>
<script src="<?php echo e(asset('public/backend/pages/theme-register.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/theme-register.blade.php ENDPATH**/ ?>