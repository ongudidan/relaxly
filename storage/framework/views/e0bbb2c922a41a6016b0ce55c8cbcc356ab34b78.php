
<?php if($datalist['verified'] == 1): ?>
<div class="row">
	<div class="col-lg-8">
		<strong><?php echo e(__('Theme is registered')); ?></strong>
		<p>*********-****-****-****-************ <span class="tik"><i class="fa fa-check"></i></span></p>
	</div>
	<div class="col-lg-4"></div>
</div>
<div class="row tabs-footer mt-15">
	<div class="col-lg-12">
		<a onClick="onPcodeDelete()" href="javascript:void(0);" class="btn danger-btn pcode_delete_btn"><?php echo e(__('Deregister Theme')); ?></a>
	</div>
</div>
<?php else: ?>
<form id="PurchaseCode_formId">
	<div class="row">
		<div class="col-lg-8">
			<div class="form-group">
				<label for="pcode"><span class="red">*</span> <?php echo e(__('Purchase Code')); ?></label>
				<input type="text" name="pcode" id="pcode" class="form-control">
				<small class="form-text text-muted">Please provide valid purchase code.</small>
			</div>
		</div>
		<div class="col-lg-4"></div>
	</div>
	<div class="row tabs-footer mt-15">
		<div class="col-lg-12">
			<a id="pcode-submit-form" href="javascript:void(0);" class="btn blue-btn pcode-submit-form pcode_submit_btn"><?php echo e(__('Register Theme')); ?></a>
		</div>
	</div>
</form>
<?php endif; ?>
<div class="row mt-15">
	<div class="col-lg-12">
		<p><strong>Note:</strong> One standard license is valid only for 1 website. Running multiple websites on a single license is a copyright violation.</p>
	</div>
</div>
<?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/partials/purchase_code.blade.php ENDPATH**/ ?>