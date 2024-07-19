

<?php $__env->startSection('title', __('Categories')); ?>

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
								<span><?php echo e(__('Categories')); ?></span>
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
							<div class="col-md-3">
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
							<div class="col-md-9"></div>
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
							<?php echo $__env->make('backend.partials.categories_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div>
					<!--/Data grid/-->
					<!--Data Entry Form-->
					<div id="form-panel" class="card-body dnone">
						<form novalidate="" data-validate="parsley" id="DataEntry_formId">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name"><?php echo e(__('Category Name')); ?><span class="red">*</span></label>
										<input type="text" name="name" id="name" class="form-control parsley-validated" data-required="true">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="slug"><?php echo e(__('Slug')); ?><span class="red">*</span></label>
										<input type="text" name="slug" id="slug" class="form-control parsley-validated" data-required="true">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
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
								<div class="col-md-6">
									<div class="form-group">
										<label for="is_publish"><?php echo e(__('Status')); ?><span class="red">*</span></label>
										<select name="is_publish" id="is_publish" class="chosen-select form-control">
										<?php $__currentLoopData = $statuslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($row->id); ?>">
												<?php echo e($row->status); ?>

											</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="description"><?php echo e(__('Description')); ?></label>
										<textarea name="description" id="description" class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="category_thumbnail"><?php echo e(__('Subheader Image')); ?></label>
										<div class="tp-upload-field">
											<input type="text" name="thumbnail" id="category_thumbnail" class="form-control" readonly>
											<a id="on_thumbnail" href="javascript:void(0);" class="tp-upload-btn"><i class="fa fa-window-restore"></i><?php echo e(__('Browse')); ?></a>
										</div>
										<em>Recommended subheader image size width: 1920px and height: 400px.</em>
										<div id="remove_category_thumbnail" class="select-image">
											<div class="inner-image" id="view_category_thumbnail"></div>
											<a onClick="onMediaImageRemove('category_thumbnail')" class="media-image-remove" href="javascript:void(0);"><i class="fa fa-remove"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
							
							<div class="divider_heading"><?php echo e(__('SEO')); ?></div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="og_title"><?php echo e(__('SEO Title')); ?></label>
										<input type="text" name="og_title" id="og_title" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="og_keywords"><?php echo e(__('SEO Keywords')); ?></label>
										<input type="text" name="og_keywords" id="og_keywords" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="og_description"><?php echo e(__('SEO Description')); ?></label>
										<textarea name="og_description" id="og_description" class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="og_image"><?php echo e(__('Open Graph Image')); ?></label>
										<div class="tp-upload-field">
											<input type="text" name="og_image" id="og_image" class="form-control" readonly>
											<a id="on_og_image" href="javascript:void(0);" class="tp-upload-btn"><i class="fa fa-window-restore"></i><?php echo e(__('Browse')); ?></a>
										</div>
										<em>e.g. Facebook share image. Recommended image size width: 600px and height: 315px.</em>
										<div id="remove_og_image" class="select-image">
											<div class="inner-image" id="view_og_image"></div>
											<a onClick="onMediaImageRemove('og_image')" class="media-image-remove" href="javascript:void(0);"><i class="fa fa-remove"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-6"></div>
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

<!--Global Media-->
<?php echo $__env->make('backend.partials.global_media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--/Global Media/-->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- css/js -->
<script type="text/javascript">
var media_type = 'Subheader';
var TEXT = [];
	TEXT['Do you really want to edit this record'] = "<?php echo e(__('Do you really want to edit this record')); ?>";
	TEXT['Do you really want to delete this record'] = "<?php echo e(__('Do you really want to delete this record')); ?>";
	TEXT['Do you really want to publish this records'] = "<?php echo e(__('Do you really want to publish this records')); ?>";
	TEXT['Do you really want to draft this records'] = "<?php echo e(__('Do you really want to draft this records')); ?>";
	TEXT['Do you really want to delete this records'] = "<?php echo e(__('Do you really want to delete this records')); ?>";
	TEXT['Please select action'] = "<?php echo e(__('Please select action')); ?>";
	TEXT['Please select record'] = "<?php echo e(__('Please select record')); ?>";
</script>
<script src="<?php echo e(asset('public/backend/pages/categories.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/pages/global-media.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/categories.blade.php ENDPATH**/ ?>