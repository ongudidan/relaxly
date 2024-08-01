

<?php $__env->startSection('title', __('Book Room')); ?>

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
					<div class="card-header">
						<div class="row">
							<div class="col-lg-6">
								<span><?php echo e(__('Book Room')); ?></span>
							</div>
							<div class="col-lg-6"></div>
						</div>
					</div>
					<div class="card-body">
						<!--Data Entry Form-->
						<form novalidate="" data-validate="parsley" id="DataEntry_formId">
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<label for="roomtype"><?php echo e(__('Room Type')); ?><span class="red">*</span></label>
										<select name="roomtype" id="roomtype" class="chosen-select form-control">
										<?php $__currentLoopData = $RoomTypeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($row->id); ?>">
												<?php echo e($row->title); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
										<span class="text-danger error-text roomtype_error"></span>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="checkin_date"><?php echo e(__('Check In')); ?><span class="red">*</span></label>
										<input type="text" name="checkin_date" id="checkin_date" class="form-control parsley-validated" data-required="true" placeholder="yyyy-mm-dd">
										<span class="text-danger error-text checkin_date_error"></span>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="checkout_date"><?php echo e(__('Check Out')); ?><span class="red">*</span></label>
										<input type="text" name="checkout_date" id="checkout_date" class="form-control parsley-validated" data-required="true" placeholder="yyyy-mm-dd">
										<span class="text-danger error-text checkout_date_error"></span>
									</div>
								</div>	
								<div class="col-lg-3">
									<div class="form-group">
										<label for="room"><?php echo e(__('Room')); ?><span class="red">*</span></label>
										<input type="number" name="room" id="room" class="form-control parsley-validated" data-required="true" value="1">
										<span class="text-danger error-text room_error"></span>
										<div class="r_extra" id="availability_id"></div>
									</div>
								</div>
							</div>
							
							<div class="divider_heading"><?php echo e(__('Customer Information')); ?></div>
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<label for="name"><?php echo e(__('Name')); ?><span class="red">*</span></label>
										<input type="text" name="name" id="name" class="form-control parsley-validated" data-required="true">
										<span class="text-danger error-text name_error"></span>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="email"><?php echo e(__('Email Address')); ?><span class="red">*</span></label>
										<input type="email" name="email" id="email" class="form-control parsley-validated" data-required="true">
										<span class="text-danger error-text email_error"></span>
									</div>
								</div>	
								<div class="col-lg-3">
									<div class="form-group">
										<label for="phone"><?php echo e(__('Phone')); ?><span class="red">*</span></label>
										<input type="text" name="phone" id="phone" class="form-control parsley-validated" data-required="true">
										<span class="text-danger error-text phone_error"></span>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="country"><?php echo e(__('Country')); ?><span class="red">*</span></label>
										<select id="country" name="country" class="chosen-select form-control parsley-validated" data-required="true">
											<?php $__currentLoopData = $country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($row->country_name); ?>">
												<?php echo e($row->country_name); ?>

											</option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
										<span class="text-danger error-text country_error"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<label for="state"><?php echo e(__('State')); ?></label>
										<input type="text" name="state" id="state" class="form-control">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="zip_code"><?php echo e(__('Zip Code')); ?></label>
										<input type="text" name="zip_code" id="zip_code" class="form-control">
									</div>
								</div>	
								<div class="col-lg-3">
									<div class="form-group">
										<label for="city"><?php echo e(__('City')); ?></label>
										<input type="text" name="city" id="city" class="form-control">
									</div>
								</div>
								<div class="col-lg-3"></div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="address"><?php echo e(__('Address')); ?></label>
										<textarea id="address" name="address" rows="2" class="form-control"></textarea>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="comments"><?php echo e(__('Note')); ?></label>
										<textarea id="comments" name="comments" rows="2" class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="checkboxlist">
										<label class="checkbox-title">
											<input id="new_account" name="new_account" type="checkbox"><?php echo e(__('Register an account with above information?')); ?> 
										</label>
									</div>
								</div>
							</div>
							<div class="row hideclass" id="new_account_pass">
								<div class="col-lg-3">
									<div class="form-group">
										<label for="password"><?php echo e(__('Password')); ?><span class="red">*</span></label>
										<input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('Password')); ?>">
										<span class="text-danger error-text password_error"></span>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="password_confirmation"><?php echo e(__('Confirm password')); ?><span class="red">*</span></label>
										<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="<?php echo e(__('Confirm password')); ?>">
									</div>
								</div>
								<div class="col-lg-6"></div>
							</div>
							<div class="row tabs-footer mt-15">
								<div class="col-lg-12">
									<a id="submit-form" href="javascript:void(0);" class="btn blue-btn"><?php echo e(__('Save')); ?></a>
								</div>
							</div>
						</form>
						<!--/Data Entry Form/-->
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
<!-- css/js -->
<link rel="stylesheet" href="<?php echo e(asset('public/backend/bootstrap-datetimepicker/bootstrap-fonticon.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/backend/bootstrap-datetimepicker/bootstrap-datetimepicker.css')); ?>">
<script src="<?php echo e(asset('public/backend/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

<script type="text/javascript">
var TEXT = [];
	TEXT['Room'] = "<?php echo e(__('Room')); ?>";
	TEXT['Availability'] = "<?php echo e(__('Availability')); ?>";
</script>
<script src="<?php echo e(asset('public/backend/pages/book_room.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/book-room.blade.php ENDPATH**/ ?>