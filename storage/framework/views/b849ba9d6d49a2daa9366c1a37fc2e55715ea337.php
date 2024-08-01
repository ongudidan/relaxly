

<?php $__env->startSection('title', __('Media')); ?>

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
					<div class="card-header"><?php echo e(__('Media')); ?></div>
					<div class="card-body media-content">
						<div class="tabs-head">
							<div class="float-right">
								<a onClick="onFormPanel()" href="javascript:void(0);" class="btn blue-btn btn-form float-right"><i class="fa fa-plus"></i> <?php echo e(__('Add New')); ?></a>
								<a onClick="onListPanel()" href="javascript:void(0);" class="btn warning-btn btn-list float-right dnone"><i class="fa fa-reply"></i> <?php echo e(__('Back')); ?></a>
							</div>
						</div>

						<!--Upload Form-->
						<div id="form-panel" class="dnone">
							<div class="tp-body">
								<div class="tp-file-upload">
									<input type="file" name="load_attachment" id="load_attachment" class="tp-upload">
									<label for="load_attachment" class="tp-uploader" id="file-uploader">
										<span class="icon-upload"><i class="fa fa-cloud-upload"></i></span>
										<div class="select_file"><?php echo e(__('Select File')); ?></div>
									</label>
									<div id="upload-loader" class="upload-loader dnone">
										<div class="tp-loader"></div>
									</div>
								</div>
							</div>
						</div>
						<!--/Upload Form-->
						<!--Media Toolbar-->
						<div class="media-toolbar">
							<div class="row">
								<div class="col-lg-8"></div>
								<div class="col-lg-4">
									<div class="form-group media-filter">
										<input id="search" name="search" type="text" class="form-control" placeholder="<?php echo e(__('Search')); ?>...">
										<button type="submit" onClick="onMediaSearch()" class="btn media-search-btn"><?php echo e(__('Search')); ?></button>
									</div>
								</div>
							</div>
						</div>
						<!--/Media Toolbar-->
						<!--Data grid-->
						<div id="list-panel">
							<div id="media_datalist">
								<?php echo $__env->make('backend.partials.media_pagination_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>
						<!--/Data grid-->
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<!--media modal view-->
<div class="modal" id="media_modal_view">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo e(__('Attachment Details')); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form novalidate="" data-validate="parsley" id="DataEntry_formId">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div id="media_preview_img" class="media-preview-img"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="alternative_text"><?php echo e(__('Alternative Text')); ?></label>
									<input type="text" name="alternative_text" id="alternative_text" class="form-control parsley-validated" data-required="true">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="title"><?php echo e(__('Title')); ?></label>
									<input type="text" name="title" id="title" class="form-control parsley-validated" data-required="true">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="thumbnail"><?php echo e(__('Copy Link Thumbnail Image')); ?></label>
									<input type="text" name="thumbnail" id="thumbnail" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="large_image"><?php echo e(__('Copy Link large Image')); ?></label>
									<input type="text" name="large_image" id="large_image" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="RecordId" id="RecordId" />
				<div class="modal-footer">
					<a id="submit-form" href="javascript:void(0);" class="btn blue-btn"><?php echo e(__('Save')); ?></a>
				</div>
			</form>
		</div>
	</div>
</div>
<!--/media modal view/-->

<!-- /main Section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
var TEXT = [];
	TEXT['Sorry only you can upload jpg, png and gif file type'] = "<?php echo e(__('Sorry only you can upload jpg, png and gif file type')); ?>";
	TEXT['Do you really want to delete this record'] = "<?php echo e(__('Do you really want to delete this record')); ?>";
	TEXT['Delete'] = "<?php echo e(__('Delete')); ?>";
</script>
<script src="<?php echo e(asset('public/backend/pages/media.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/backend/media.blade.php ENDPATH**/ ?>