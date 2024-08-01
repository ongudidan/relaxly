<div class="table-responsive">
	<table class="table table-borderless table-theme" style="width:100%;">
		<thead>
			<tr>
				<th class="checkboxlist text-center" style="width:5%"><input class="tp-check-all checkAll" type="checkbox"></th>
				<th class="text-left" style="width:9%"><?php echo e(__('Booking No')); ?></th>
				<th class="text-left" style="width:9%"><?php echo e(__('Booking Date')); ?></th>
				<th class="text-left" style="width:10%"><?php echo e(__('Customer')); ?></th>
				<th class="text-left" style="width:15%"><?php echo e(__('Room Type')); ?></th>
				<th class="text-center" style="width:10%"><?php echo e(__('In / Out Date')); ?></th>
				<th class="text-center" style="width:8%"><?php echo e(__('Total Room')); ?></th>
				<th class="text-center" style="width:9%"><?php echo e(__('Payment Method')); ?></th>
				<th class="text-center" style="width:9%"><?php echo e(__('Payment Status')); ?></th>
				<th class="text-center" style="width:9%"><?php echo e(__('Booking Status')); ?></th>
				<th class="text-center" style="width:7%"><?php echo e(__('Action')); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($datalist)>0): ?>
			<?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td class="checkboxlist text-center"><input name="item_ids[]" value="<?php echo e($row->id); ?>" class="tp-checkbox selected_item" type="checkbox"></td>
				<td class="text-left"><a href="<?php echo e(route('backend.booking', [$row->id, 'booking-request'])); ?>"><?php echo e($row->booking_no); ?></a></td>
				<td class="text-left"><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
				<td class="text-left"><?php echo e($row->name); ?></td>
				<td class="text-left"><?php echo e($row->title); ?></td>
				<td class="text-center"><?php echo e(date('d-m-Y', strtotime($row->in_date))); ?> <strong>to</strong> <?php echo e(date('d-m-Y', strtotime($row->out_date))); ?></td>
				<td class="text-center"><?php echo e($row->total_room); ?></td>
				<td class="text-center"><?php echo e($row->method_name); ?></td>
				<td class="text-center"><span class="status_btn pstatus_<?php echo e($row->payment_status_id); ?>"><?php echo e($row->pstatus_name); ?></span></td>
				<td class="text-center"><span class="status_btn ostatus_<?php echo e($row->booking_status_id); ?>"><?php echo e($row->bstatus_name); ?></span></td>
				
				<td class="text-center">
					<div class="btn-group action-group">
						<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="<?php echo e(route('backend.booking', [$row->id, 'booking-request'])); ?>"><?php echo e(__('Edit')); ?></a>
							<a class="dropdown-item" href="<?php echo e(route('frontend.invoice', [$row->id, $row->booking_no])); ?>"><?php echo e(__('Invoice')); ?></a>
							<a onclick="onDelete(<?php echo e($row->id); ?>)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Delete')); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
			<tr>
				<td class="text-center" colspan="11"><?php echo e(__('No data available')); ?></td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>
<div class="row mt-15">
	<div class="col-lg-12">
		<?php echo e($datalist->links()); ?>

	</div>
</div><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/partials/booking_request_table.blade.php ENDPATH**/ ?>