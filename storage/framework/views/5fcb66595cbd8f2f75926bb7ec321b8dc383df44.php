

<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $gtext = gtext(); ?>
<?php $__env->startSection('content'); ?>
<!-- main Section -->
<div class="main-body">
	<div class="container-fluid">
		<?php $vipc = vipc(); ?>
		<?php if($vipc['bkey'] == 0): ?> 
		<?php echo $__env->make('backend.partials.vipc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php else: ?>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-success">
						<i class="fa fa-money"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Earn')); ?></div>
						<?php if($gtext['currency_position'] == 'left'): ?>
						<div class="count"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($TotalEarn[0]->total_amount)); ?></div>
						<?php else: ?>
						<div class="count"><?php echo e(NumberFormat($TotalEarn[0]->total_amount)); ?><?php echo e($gtext['currency_icon']); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-warning">
						<i class="fa fa-hourglass-end"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Pending Payment')); ?></div>
						<?php if($gtext['currency_position'] == 'left'): ?>
						<div class="count"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($PendingPayment[0]->total_amount)); ?></div>
						<?php else: ?>
						<div class="count"><?php echo e(NumberFormat($PendingPayment[0]->total_amount)); ?><?php echo e($gtext['currency_icon']); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-red">
						<i class="fa fa-circle-o-notch"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Incompleted Payment')); ?></div>
						<?php if($gtext['currency_position'] == 'left'): ?>
						<div class="count"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($IncompletedPayment[0]->total_amount)); ?></div>
						<?php else: ?>
						<div class="count"><?php echo e(NumberFormat($IncompletedPayment[0]->total_amount)); ?><?php echo e($gtext['currency_icon']); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-danger">
						<i class="fa fa-ban"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Canceled Payment')); ?></div>
						<?php if($gtext['currency_position'] == 'left'): ?>
						<div class="count"><?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($CanceledPayment[0]->total_amount)); ?></div>
						<?php else: ?>
						<div class="count"><?php echo e(NumberFormat($CanceledPayment[0]->total_amount)); ?><?php echo e($gtext['currency_icon']); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-success">
						<i class="fa fa-check"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Booking Completed')); ?></div>
						<div class="count"><?php echo e($TotalBookingCompleted); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.all-booking')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-success">
						<i class="fa fa-id-badge"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Running Booking')); ?></div>
						<div class="count"><?php echo e($TotalRunningBooking); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.all-booking')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-warning">
						<i class="fa fa-hourglass-end"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Booking Request')); ?></div>
						<div class="count"><?php echo e($TotalBookingRequest); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.all-booking')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-danger">
						<i class="fa fa-ban"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Booking Canceled')); ?></div>
						<div class="count"><?php echo e($TotalBookingCanceled); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.all-booking')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-success">
						<i class="fa fa-check-square-o"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__("Today's Booked Room")); ?></div>
						<div class="count"><?php echo e($TodaysBookedRoom[0]->TodaysBookedRoom); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.room-list')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-info">
						<i class="fa fa-window-restore"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__("Today's Available Room")); ?></div>
						<div class="count"><?php echo e($TodaysAvailableRoom); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.room-list')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-success">
						<i class="fa fa-bed"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Booked Room')); ?></div>
						<div class="count"><?php echo e($TotalBookedRoom); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.room-list')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-info">
						<i class="fa fa-bed"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Room')); ?></div>
						<div class="count"><?php echo e($TotalRoom); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.room-list')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-info">
						<i class="fa fa-bullseye"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total Room Type')); ?></div>
						<div class="count"><?php echo e($TotalRoomType); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.room-type')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-info">
						<i class="fa fa-users"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Total User')); ?></div>
						<div class="count"><?php echo e($TotalUser); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.users')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-info">
						<i class="fa fa-users"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Active Customer')); ?></div>
						<div class="count"><?php echo e($ActiveCustomer); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.customers')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-25">
				<div class="desh-item-card">
					<div class="icon-card tp-bg-danger">
						<i class="fa fa-users"></i>
					</div>
					<div class="item-content">
						<div class="desc"><?php echo e(__('Inactive Customer')); ?></div>
						<div class="count"><?php echo e($InactiveCustomer); ?></div>
					</div>
					<span class="btn-view">
						<a href="<?php echo e(route('backend.customers')); ?>"><i class="fa fa-eye"></i><?php echo e(__('View')); ?></a>
					</span>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-5 mt-25">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><?php echo e(__('Recent Booking Request')); ?></span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive tp-height">
							<table class="table table-borderless table-theme" style="width:100%;">
								<tbody>
									<?php if(count($RecentBookingRequest)>0): ?>
									<?php $__currentLoopData = $RecentBookingRequest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td class="text-left" style="width:30%">
											<a href="<?php echo e(route('backend.booking', [$row->id, 'booking-request'])); ?>">#<?php echo e($row->booking_no); ?></a>
										</td>
										<td class="text-left" style="width:50%"><?php echo e($row->title); ?></td>
										<td class="text-center" style="width:20%">
											<?php if($gtext['currency_position'] == 'left'): ?>
												<?php echo e($gtext['currency_icon']); ?><?php echo e(NumberFormat($row->total_amount)); ?>

											<?php else: ?>
												<?php echo e(NumberFormat($row->total_amount)); ?><?php echo e($gtext['currency_icon']); ?>

											<?php endif; ?>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<tr>
										<td class="text-center" colspan="3"><?php echo e(__('No data available')); ?></td>
									</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-25">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><?php echo e(__('Monthly Earning Report (Last 12 Months)')); ?></span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<canvas id="monthly_earning_report" height="450"></canvas>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12 mt-25">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><?php echo e(__('Monthly Booking Report (Last 12 Months)')); ?></span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<canvas id="monthly_booking_report" height="450"></canvas>
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
<script src="<?php echo e(asset('public/backend/js/chart.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/pages/dashboard.js')); ?>"></script>
<script type="text/javascript">
var currency_position = "<?php echo e($gtext['currency_position']); ?>";
var currency_icon = "<?php echo e($gtext['currency_icon']); ?>";
var TEXT = [];
	TEXT['Earning'] = "<?php echo e(__('Earning')); ?>";
	TEXT['Total Booking'] = "<?php echo e(__('Total Booking')); ?>";
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>