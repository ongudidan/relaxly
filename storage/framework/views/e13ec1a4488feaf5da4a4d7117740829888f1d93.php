<!-- Large modal -->
<div id="global_media_modal_view" class="modal bd-example-modal-lg tp-media-view">
	<div class="modal-dialog modal-lg tp-modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo e(__('Choose a File')); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body media-content padding-no">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9">
							<div class="tp-media-left">
								<!--Media Toolbar-->
								<div class="media-toolbar">
									<div class="row">
										<div class="col-lg-8">
											<div class="group-btn">
												<a onClick="onUploadFormPanel()" href="javascript:void(0);" class="btn blue-btn up-btn-form float-left media-btn"><i class="fa fa-upload"></i> <?php echo e(__('Upload File')); ?></a>
												<a onClick="onUploadListPanel()" href="javascript:void(0);" class="btn warning-btn up-btn-list float-left media-btn dnone"><i class="fa fa-reply"></i> <?php echo e(__('Back')); ?></a>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group media-filter">
												<input id="global_media_search" name="global_media_search" type="text" class="form-control" placeholder="Search...">
												<button type="submit" onClick="onGlobalMediaSearch()" class="btn media-search-btn">Search</button>
											</div>
										</div>
									</div>
								</div>
								<!--/Media Toolbar-->
								
								<!--Upload Form-->
								<div id="upload-form-panel" class="dnone">
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
								
								<!--Data grid-->
								<div id="upload-list-panel">
									<div id="global_datalist">
										<?php echo $__env->make('backend.partials.global_media_pagination_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
								</div>
								<!--/Data grid-->
	
							</div>
						</div>
						<div class="col-md-3 tp-border-left">
							<div id="tp_media_right" class="tp-media-right">
								<div class="attach-details"><?php echo e(__('Attachment Details')); ?></div>
								<div id="media_preview_img" class="media-preview-img"></div>
								
								<div class="form-group">
									<label for="alternative_text"><?php echo e(__('Alternative Text')); ?></label>
									<input type="text" name="alternative_text" id="alternative_text" class="form-control" readonly>
								</div>
								
								<div class="form-group">
									<label for="title"><?php echo e(__('Title')); ?></label>
									<input type="text" name="title" id="title" class="form-control" readonly>
								</div>
								
								<div class="form-group">
									<label for="thumbnail"><?php echo e(__('Copy Thumbnail Image')); ?></label>
									<input type="text" name="thumbnail" id="thumbnail" class="form-control" readonly>
								</div>
								
								<div class="form-group">
									<label for="large_image"><?php echo e(__('Copy large Image')); ?></label>
									<input type="text" name="large_image" id="large_image" class="form-control" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="media_select_file" class="btn blue-btn"><?php echo e(__('Select File')); ?></button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var TEXT = [];
	TEXT['Sorry only you can upload jpg, png and gif file type'] = "<?php echo e(__('Sorry only you can upload jpg, png and gif file type')); ?>";
	TEXT['Do you really want to delete this record'] = "<?php echo e(__('Do you really want to delete this record')); ?>";
	TEXT['Delete'] = "<?php echo e(__('Delete')); ?>";
</script><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/partials/global_media.blade.php ENDPATH**/ ?>