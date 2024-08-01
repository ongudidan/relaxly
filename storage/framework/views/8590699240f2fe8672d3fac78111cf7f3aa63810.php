

<?php $__env->startSection('title', __('Room Type')); ?>

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
								<span><?php echo e(__('Room Type')); ?></span>
							</div>
							<div class="col-lg-6">
								<div class="float-right">
									<a onClick="onFormPanel()" href="javascript:void(0);" class="btn blue-btn btn-form float-right"><i class="fa fa-plus"></i> <?php echo e(__('Add New')); ?></a>
									<a onClick="onListPanel()" href="javascript:void(0);" class="btn warning-btn btn-list float-right dnone"><i class="fa fa-reply"></i> <?php echo e(__('Back to List')); ?></a>
								</div>
							</div>
						</div>
					</div>
					<!--Data grid-->
					<div id="list-panel" class="card-body">
						<div class="row mb-10">
							<div class="col-lg-3">
								<div class="form-group mb-10">
									<select name="language_code" id="language_code" class="chosen-select form-control">
										<option value="0" selected="selected"><?php echo e(__('All Language')); ?></option>
										<?php $__currentLoopData = $languageslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($row->language_code); ?>">
												<?php echo e($row->language_name); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group mb-10">
									<select name="category_id" id="category_id" class="chosen-select form-control">
										<option value="0" selected="selected"><?php echo e(__('All Category')); ?></option>
										<?php $__currentLoopData = $categorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($row->id); ?>">
												<?php echo e($row->name); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<div class="col-lg-3"></div>
							<div class="col-lg-3"></div>
						</div>
						
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group bulk-box">
									<select id="bulk-action" class="form-control">
										<option value=""><?php echo e(__('Select Action')); ?></option>
										<option value="publish"><?php echo e(__('Publish')); ?></option>
										<option value="draft"><?php echo e(__('Draft')); ?></option>
										<option value="delete"><?php echo e(__('Delete Permanently')); ?></option>
									</select>
									<button type="submit" onClick="onBulkAction()" class="btn bulk-btn"><?php echo e(__('Apply')); ?></button>
								</div>
							</div>
							<div class="col-lg-3"></div>
							<div class="col-lg-5">
								<div class="form-group search-box">
									<input id="search" name="search" type="text" class="form-control" placeholder="<?php echo e(__('Search')); ?>...">
									<button type="submit" onClick="onSearch()" class="btn search-btn"><?php echo e(__('Search')); ?></button>
								</div>
							</div>
						</div>
						<div id="tp_datalist">
							<?php echo $__env->make('backend.partials.room_type_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div>
					<!--/Data grid/-->
					
					<!--Data Entry Form-->
					<div id="form-panel" class="card-body dnone">
						<form novalidate="" data-validate="parsley" id="DataEntry_formId">
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label for="title"><?php echo e(__('Room Type')); ?><span class="red">*</span></label>
										<input type="text" name="title" id="title" class="form-control parsley-validated" data-required="true">
									</div>
								</div>	
								<div class="col-lg-4">
									<div class="form-group">
										<label for="slug"><?php echo e(__('Slug')); ?><span class="red">*</span></label>
										<input type="text" name="slug" id="slug" class="form-control parsley-validated" data-required="true">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="categoryid"><?php echo e(__('Category')); ?><span class="red">*</span></label>
										<select name="categoryid" id="categoryid" class="chosen-select form-control">
											<?php $__currentLoopData = $categorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($row->id); ?>">
													<?php echo e($row->name); ?>

												</option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<label for="lan"><?php echo e(__('Language')); ?><span class="red">*</span></label>
										<select name="lan" id="lan" class="chosen-select form-control">
										<?php $__currentLoopData = $languageslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($row->language_code); ?>">
												<?php echo e($row->language_name); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>	
								<div class="col-lg-9"></div>	
							</div>
								
							<input type="text" name="RecordId" id="RecordId" class="dnone">
							<div class="row tabs-footer mt-15">
								<div class="col-lg-12">
									<a id="submit-form" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
								</div>
							</div>
						</form>
					</div>
					<!--/Data Entry Form/-->
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
<script type="text/javascript">
var TEXT = [];
	TEXT['Do you really want to edit this record'] = "<?php echo e(__('Do you really want to edit this record')); ?>";
	TEXT['Do you really want to delete this record'] = "<?php echo e(__('Do you really want to delete this record')); ?>";
	TEXT['Do you really want to publish this records'] = "<?php echo e(__('Do you really want to publish this records')); ?>";
	TEXT['Do you really want to draft this records'] = "<?php echo e(__('Do you really want to draft this records')); ?>";
	TEXT['Do you really want to delete this records'] = "<?php echo e(__('Do you really want to delete this records')); ?>";
	TEXT['Please select action'] = "<?php echo e(__('Please select action')); ?>";
	TEXT['Please select record'] = "<?php echo e(__('Please select record')); ?>";
	TEXT['All Category'] = "<?php echo e(__('All Category')); ?>";
</script>
<script src="<?php echo e(asset('public/backend/pages/room_type.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/room-type.blade.php ENDPATH**/ ?>