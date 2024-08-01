<div class="table-responsive">
	<table class="table table-borderless table-theme" style="width:100%;">
		<thead>
			<tr>
				<th class="checkboxlist text-center" style="width:5%"><input class="tp-check-all checkAll" type="checkbox"></th>
				<th class="text-left" style="width:40%"><?php echo e(__('Room Type')); ?></th>
				<th class="text-left" style="width:15%"><?php echo e(__('Category')); ?></th>
				<th class="text-center" style="width:10%"><?php echo e(__('Language')); ?></th>
				<th class="text-center" style="width:10%"><?php echo e(__('Image')); ?> </th>
				<th class="text-center" style="width:10%"><?php echo e(__('Status')); ?></th>
				<th class="text-center" style="width:10%"><?php echo e(__('Action')); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($datalist)>0): ?>
			<?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td class="checkboxlist text-center"><input name="item_ids[]" value="<?php echo e($row->id); ?>" class="tp-checkbox selected_item" type="checkbox"></td>
				<td class="text-left"><a href="<?php echo e(route('backend.room', [$row->id])); ?>" title="<?php echo e(__('Edit')); ?>"><?php echo e($row->title); ?></a></td>
				<td class="text-left"><?php echo e($row->category_name); ?></td>
				<td class="text-center"><?php echo e($row->language_name); ?></td>
				
				<?php if($row->thumbnail != ''): ?>
				<td class="text-center"><div class="table_col_image"><img src="<?php echo e(asset('public')); ?>/media/<?php echo e($row->thumbnail); ?>" /></div></td>
				<?php else: ?>
				<td class="text-center"><div class="table_col_image"><img src="<?php echo e(asset('public')); ?>/backend/images/album_icon.png" /></div></td>
				<?php endif; ?>
				
				<?php if($row->is_publish == 1): ?>
				<td class="text-center"><span class="enable_btn"><?php echo e($row->status); ?></span></td>
				<?php else: ?>
				<td class="text-center"><span class="disable_btn"><?php echo e($row->status); ?></span></td>
				<?php endif; ?>
				<td class="text-center">
					<div class="btn-group action-group">
						<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="<?php echo e(route('backend.room', [$row->id])); ?>"><?php echo e(__('Edit')); ?></a>
							<a onclick="onDelete(<?php echo e($row->id); ?>)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Delete')); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
			<tr>
				<td class="text-center" colspan="7"><?php echo e(__('No data available')); ?></td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>
<div class="row mt-15">
	<div class="col-lg-12">
		<?php echo e($datalist->links()); ?>

	</div>
</div><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/partials/room_type_table.blade.php ENDPATH**/ ?>