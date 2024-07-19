

<?php $__env->startSection('title', __('All Booking')); ?>

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
								<span><?php echo e(__('All Booking')); ?></span>
							</div>
							<div class="col-lg-6">
								<div class="group-button float-right">
									<button type="button" onClick="onExcelExport()" class="btn btn-theme mb0 btn-padding"><i class="fa fa-download"></i> <?php echo e(__('Excel')); ?></button>
									<button type="button" onClick="onCSVExport()" class="btn btn-theme mb0 btn-padding"><i class="fa fa-download"></i> <?php echo e(__('CSV')); ?></button>
								</div>
							</div>
						</div>
					</div>
					<!--Data grid-->
					<div class="card-body">
						<div class="row mb-10">
							<div class="col-lg-8">
								<div class="group-button">
									<button id="orderstatus_0" type="button" onClick="onDataViewByStatus(0)" class="btn btn-theme orderstatus active"><?php echo e(__('All')); ?> (<?php echo BookingCount(0); ?>)</button>
									<?php $__currentLoopData = $booking_status_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<button id="orderstatus_<?php echo e($row->id); ?>" type="button" onClick="onDataViewByStatus(<?php echo e($row->id); ?>)" class="btn btn-theme orderstatus"><?php echo e($row->bstatus_name); ?> (<?php echo BookingCount($row->id); ?>)</button>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<input type="hidden" id="view_by_status" value="0"/>
							</div>

							<div class="col-lg-4">
								<div class="filter-form-group pull-right">
									<input name="start_date" id="start_date" type="text" class="form-control" placeholder="yyyy-mm-dd">
									<input name="end_date" id="end_date" type="text" class="form-control" placeholder="yyyy-mm-dd">
									<button type="submit" onClick="onFilterAction()" class="btn btn-theme"><?php echo e(__('Filter')); ?></button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 mb-5">
								<div class="form-group bulk-box">
									<select id="bulk-action" class="form-control">
										<option value=""><?php echo e(__('Select Action')); ?></option>
										<option value="delete"><?php echo e(__('Delete Permanently')); ?></option>
									</select>
									<button type="submit" onClick="onBulkAction()" class="btn bulk-btn"><?php echo e(__('Apply')); ?></button>
								</div>
							</div>
							<div class="col-lg-5 mb-5">
							</div>
							<div class="col-lg-4 mb-5">
								<div class="form-group search-box">
									<input id="search" name="search" type="text" class="form-control" placeholder="<?php echo e(__('Search')); ?>...">
									<button type="submit" onClick="onSearch()" class="btn search-btn"><?php echo e(__('Search')); ?></button>
								</div>
							</div>
						</div>
						<div id="tp_datalist">
							<?php echo $__env->make('backend.partials.all_booking_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div>
					<!--/Data grid/-->
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<!-- Check Out modal -->
<div id="CheckOutModalView" class="modal bd-example-modal-md">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo e(__('Check Out')); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body media-content">
				<div class="container-fluid">
					<form novalidate="" data-validate="parsley" id="DataEntry_formId">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="payment_status_id"><?php echo e(__('Payment Status')); ?><span class="red">*</span></label>
									<select name="payment_status_id" id="payment_status_id" class="chosen-select form-control">
									<?php $__currentLoopData = $payment_status_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($row->id); ?>">
										<?php echo e($row->pstatus_name); ?>

									</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="booking_status_id"><?php echo e(__('Booking Status')); ?><span class="red">*</span></label>
									<select name="booking_status_id" id="booking_status_id" class="chosen-select form-control">
									<?php $__currentLoopData = $booking_status_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($row->id); ?>">
										<?php echo e($row->bstatus_name); ?>

									</option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="tw_checkbox checkbox_group">
									<input id="isnotify" name="isnotify" type="checkbox">
									<label for="isnotify"><?php echo e(__('Send confirmation email to customer')); ?></label>
									<span></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<input class="dnone" id="booking_id" name="booking_id" type="text"/>
								<a id="SubmitBookingCheckOutForm" href="javascript:void(0);" class="btn btn-theme update_btn"><?php echo e(__('Update')); ?></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Check Out modal/-->

<!-- /main Section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- css/js -->
<link rel="stylesheet" href="<?php echo e(asset('public/backend/bootstrap-datetimepicker/bootstrap-fonticon.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/backend/bootstrap-datetimepicker/bootstrap-datetimepicker.css')); ?>">
<script src="<?php echo e(asset('public/backend/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

<script type="text/javascript">
var TEXT = [];
	TEXT['Do you really want to edit this record'] = "<?php echo e(__('Do you really want to edit this record')); ?>";
	TEXT['Do you really want to delete this record'] = "<?php echo e(__('Do you really want to delete this record')); ?>";
	TEXT['Do you really want to delete this records'] = "<?php echo e(__('Do you really want to delete this records')); ?>";
	TEXT['Please select action'] = "<?php echo e(__('Please select action')); ?>";
	TEXT['Please select record'] = "<?php echo e(__('Please select record')); ?>";
	TEXT['All Category'] = "<?php echo e(__('All Category')); ?>";
$(function () {
	"use strict";
	$("#start_date").datetimepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		todayBtn: true,
		minView: 2
	});

	$("#end_date").datetimepicker({
		format: 'yyyy-mm-dd',
		autoclose: true,
		todayBtn: true,
		minView: 2
	});
});
</script>
<script src="<?php echo e(asset('public/backend/pages/all_booking.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/all-booking.blade.php ENDPATH**/ ?>