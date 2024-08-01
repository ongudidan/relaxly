

<?php $__env->startSection('title', __('Booking Request')); ?>

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
								<span><?php echo e(__('Booking Request')); ?></span>
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
								<div class="filter-form-group">
									<input name="start_date" id="start_date" type="text" class="form-control" placeholder="yyyy-mm-dd">
									<input name="end_date" id="end_date" type="text" class="form-control" placeholder="yyyy-mm-dd">
									<button type="submit" onClick="onFilterAction()" class="btn btn-theme"><?php echo e(__('Filter')); ?></button>
								</div>
							</div>
							<div class="col-lg-4 mb-5">
								<div class="form-group search-box">
									<input id="search" name="search" type="text" class="form-control" placeholder="<?php echo e(__('Search')); ?>...">
									<button type="submit" onClick="onSearch()" class="btn search-btn"><?php echo e(__('Search')); ?></button>
								</div>
							</div>
						</div>
						<div id="tp_datalist">
							<?php echo $__env->make('backend.partials.booking_request_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div>
					<!--/Data grid/-->
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
<script src="<?php echo e(asset('public/backend/pages/booking_request.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/booking-request.blade.php ENDPATH**/ ?>