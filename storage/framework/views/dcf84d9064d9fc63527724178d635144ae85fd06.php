<div class="table-responsive">
	<table class="table table-borderless table-theme" style="width:100%;">
		<thead>
			<tr>
				<th class="checkboxlist text-center" style="width:5%"><?php echo e(__('SL')); ?></th>
				<th class="text-left" style="width:10%"><?php echo e(__('Room Number')); ?></th>
				<th class="text-left" style="width:18%"><?php echo e(__('Room Type')); ?></th>
				<th class="text-center" style="width:10%"><?php echo e(__('Booking Status')); ?></th>
				<th class="text-left" style="width:15%"><?php echo e(__('In / Out Date')); ?></th>
				<th class="text-left" style="width:10%"><?php echo e(__('Booking No')); ?></th>
				<th class="text-left" style="width:12%"><?php echo e(__('Customer')); ?></th>
				<th class="text-left" style="width:10%"><?php echo e(__('Phone')); ?></th>
				<th class="text-center" style="width:10%"><?php echo e(__('Status')); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($datalist)>0): ?>
			<?php $i = 1; ?>
			<?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td class="text-center"><?php echo e($i++); ?></td> 
				<td class="text-left"><?php echo e($row->room_no); ?></td>
				<td class="text-left"><?php echo e($row->title); ?></td>
				<?php if($row->book_status == 1): ?>
				<td class="text-center"><span class="disable_btn"><?php echo e(__('Booked')); ?></span></td>
				<?php else: ?>
				<td class="text-center"><span class="enable_btn"><?php echo e(__('Available')); ?></span></td>
				<?php endif; ?>
				<td class="text-left">
				<?php if($row->in_date == ''): ?>
				<?php else: ?>
				<?php echo e(date('d-m-Y', strtotime($row->in_date))); ?> <strong>to</strong> <?php echo e(date('d-m-Y', strtotime($row->out_date))); ?>

				<?php endif; ?>
				</td> 
				<td class="text-left">
				<?php if($row->book_status == 1): ?>
					<?php echo e($row->booking_no); ?>

				<?php else: ?>
				<?php endif; ?>
				</td>
				<td class="text-left">
				<?php if($row->book_status == 1): ?>
					<?php echo e($row->name); ?>

				<?php else: ?>
				<?php endif; ?>
				</td>
				<td class="text-left">
				<?php if($row->book_status == 1): ?>
					<?php echo e($row->phone); ?>

				<?php else: ?>
				<?php endif; ?>
				</td>
				<?php if($row->is_publish == 1): ?>
				<td class="text-center"><span class="enable_btn"><?php echo e($row->status); ?></span></td>
				<?php else: ?>
				<td class="text-center"><span class="disable_btn"><?php echo e($row->status); ?></span></td>
				<?php endif; ?>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
			<tr>
				<td class="text-center" colspan="9"><?php echo e(__('No data available')); ?></td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>
<div class="row mt-15">
	<div class="col-lg-12 RoomList">
		<?php echo e($datalist->links()); ?>

	</div>
</div><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/partials/room_list_table.blade.php ENDPATH**/ ?>