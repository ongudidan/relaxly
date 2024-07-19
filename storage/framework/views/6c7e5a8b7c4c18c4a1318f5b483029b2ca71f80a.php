

<?php $__env->startSection('title', __('General')); ?>

<?php $__env->startSection('content'); ?>
<!-- main Section -->
<div class="main-body">
	<div class="container-fluid">
		<?php $vipc = vipc(); ?>
		<?php if($vipc['bkey'] == 0): ?> 
		<?php echo $__env->make('backend.partials.vipc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php else: ?>
		<div class="row mt-25">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><?php echo e(__('Settings')); ?></div>
					<div class="card-body tabs-area p-0">
						<?php echo $__env->make('backend.partials.settings_tabs_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<div class="tabs-body">
							<!--General Setting-->
							<div id="GlobalSetting">
								<form novalidate="" data-validate="parsley" id="DataEntry_formId">
									<div class="row">
										<div class="col-lg-8">
											<div class="divider_heading"><?php echo e(__('Invoice Information')); ?></div>
											<div class="form-group">
												<label for="site_name"><?php echo e(__('Site Name')); ?><span class="red">*</span></label>
												<input type="text" name="site_name" id="site_name" class="form-control parsley-validated" data-required="true" value="<?php echo e($datalist['site_name']); ?>">
											</div>
											<div class="form-group">
												<label for="site_title"><?php echo e(__('Site Title')); ?><span class="red">*</span></label>
												<input type="text" name="site_title" id="site_title" class="form-control parsley-validated" data-required="true" value="<?php echo e($datalist['site_title']); ?>">
											</div>
											<div class="form-group">
												<label for="company"><?php echo e(__('Company')); ?><span class="red">*</span></label>
												<input type="text" name="company" id="company" class="form-control parsley-validated" data-required="true" value="<?php echo e($datalist['company']); ?>">
											</div>
											<div class="form-group">
												<label for="email"><?php echo e(__('Email')); ?><span class="red">*</span></label>
												<input type="text" name="email" id="email" class="form-control parsley-validated" data-required="true" value="<?php echo e($datalist['email']); ?>">
											</div>
											<div class="form-group">
												<label for="phone"><?php echo e(__('Phone')); ?><span class="red">*</span></label>
												<input type="text" name="phone" id="phone" class="form-control parsley-validated" data-required="true" value="<?php echo e($datalist['phone']); ?>">
											</div>
											<div class="form-group">
												<label for="address"><?php echo e(__('Address')); ?><span class="red">*</span></label>
												<textarea name="address" id="address" class="form-control parsley-validated" data-required="true" rows="2"><?php echo e($datalist['address']); ?></textarea>
											</div>
											<div class="form-group">
												<label for="timezone"><?php echo e(__('Time Zone')); ?><span class="red">*</span></label>
												<select name="timezone" id="timezone" class="chosen-select form-control parsley-validated" data-required="true">
												<?php $__currentLoopData = $timezonelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option <?php echo e($row->timezone == $datalist['timezone'] ? "selected=selected" : ''); ?> value="<?php echo e($row->timezone); ?>">
														<?php echo e($row->timezone_name); ?>

													</option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>
										<div class="col-lg-4"></div>
									</div>
									<div class="row tabs-footer mt-15">
										<div class="col-lg-12">
											<a id="global-setting-form" href="javascript:void(0);" class="btn blue-btn"><?php echo e(__('Save')); ?></a>
										</div>
									</div>
								</form>
							</div>
							<!--/General Setting-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- /main Section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('public/backend/pages/general.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/general.blade.php ENDPATH**/ ?>