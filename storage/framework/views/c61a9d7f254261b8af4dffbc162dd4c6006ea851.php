<div class="row">
	<div class="col-lg-12">
		<ul class="media-view">
			<?php $__currentLoopData = $media_datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li id="media_item_<?php echo e($row->id); ?>">
				<a onClick="onMediaDelete(<?php echo e($row->id); ?>)" class="media-delete" title="<?php echo e(__('Delete')); ?>" href="javascript:void(0);"><i class="fa fa-remove"></i></a>
				<div class="media-preview">
					<a onClick="onMediaModalView(<?php echo e($row->id); ?>)" href="javascript:void(0);"><img src="<?php echo e(asset('public/media/'.$row->thumbnail)); ?>" alt="<?php echo e($row->alt_title); ?>" /></a>
				</div>
			</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
</div>
<div class="row mt-15">
	<div class="col-lg-12 global_media_pagination">
		<?php echo e($media_datalist->links()); ?>

	</div>
</div><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/partials/global_media_pagination_data.blade.php ENDPATH**/ ?>