

<?php $__env->startSection('title', __('Payment Methods')); ?>

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
								<span><?php echo e(__('Payment Methods')); ?></span>
							</div>
							<div class="col-lg-6"></div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="float-right">
									<a onClick="onListPanel()" href="javascript:void(0);" class="btn warning-btn btn-list float-right dnone"><i class="fa fa-reply"></i> <?php echo e(__('Back to List')); ?></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!--/Data grid-->
								<div id="list-panel">
									<div class="table-responsive">
										<table class="table table-borderless table-theme" style="width:100%;">
											<tbody>
												<tr>
													<td class="text-left" width="70%"><?php echo e(__('Stripe')); ?></td>
													<td class="text-left" width="25%">
														<?php if($stripe_data_list['isenable'] == 1): ?>
														<span class="enable_btn"><?php echo e(__('Active')); ?></span>
														<?php else: ?>
														<span class="disable_btn"><?php echo e(__('Inactive')); ?></span>	
														<?php endif; ?>
													</td>
													<td class="text-center" width="5%">
														<div class="btn-group action-group">
															<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a onclick="onEdit(1)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Edit')); ?></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-left" width="70%"><?php echo e(__('Paypal')); ?></td>
													<td class="text-left" width="25%">
														<?php if($paypal_data_list['isenable_paypal'] == 1): ?>
														<span class="enable_btn"><?php echo e(__('Active')); ?></span>
														<?php else: ?>
														<span class="disable_btn"><?php echo e(__('Inactive')); ?></span>	
														<?php endif; ?>
													</td>
													<td class="text-center" width="5%">
														<div class="btn-group action-group">
															<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a onclick="onEdit(4)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Edit')); ?></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-left" width="70%"><?php echo e(__('Razorpay')); ?></td>
													<td class="text-left" width="25%">
														<?php if($razorpay_data_list['isenable_razorpay'] == 1): ?>
														<span class="enable_btn"><?php echo e(__('Active')); ?></span>
														<?php else: ?>
														<span class="disable_btn"><?php echo e(__('Inactive')); ?></span>	
														<?php endif; ?>
													</td>
													<td class="text-center" width="5%">
														<div class="btn-group action-group">
															<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a onclick="onEdit(5)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Edit')); ?></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-left" width="70%"><?php echo e(__('Mollie')); ?></td>
													<td class="text-left" width="25%">
														<?php if($mollie_data_list['isenable_mollie'] == 1): ?>
														<span class="enable_btn"><?php echo e(__('Active')); ?></span>
														<?php else: ?>
														<span class="disable_btn"><?php echo e(__('Inactive')); ?></span>	
														<?php endif; ?>
													</td>
													<td class="text-center" width="5%">
														<div class="btn-group action-group">
															<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a onclick="onEdit(6)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Edit')); ?></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-left" width="70%"><?php echo e(__('Cash on Delivery (COD)')); ?></td>
													<td class="text-left" width="25%">
														<?php if($cod_data_list['isenable'] == 1): ?>
														<span class="enable_btn"><?php echo e(__('Active')); ?></span>
														<?php else: ?>
														<span class="disable_btn"><?php echo e(__('Inactive')); ?></span>	
														<?php endif; ?>
													</td>
													<td class="text-center" width="5%">
														<div class="btn-group action-group">
															<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a onclick="onEdit(2)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Edit')); ?></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-left" width="70%"><?php echo e(__('Bank Transfer')); ?></td>
													<td class="text-left" width="25%">
														<?php if($bank_data_list['isenable'] == 1): ?>
														<span class="enable_btn"><?php echo e(__('Active')); ?></span>
														<?php else: ?>
														<span class="disable_btn"><?php echo e(__('Inactive')); ?></span>	
														<?php endif; ?>
													</td>
													<td class="text-center" width="5%">
														<div class="btn-group action-group">
															<a class="action-btn" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a onclick="onEdit(3)" class="dropdown-item" href="javascript:void(0);"><?php echo e(__('Edit')); ?></a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!--/Data grid-->
								
								<!--/Stripe Form-->
								<div id="form-panel-1" class="dnone">
									<form novalidate="" data-validate="parsley" id="stripe_formId">
										<div class="row mb-10">
											<div class="col-lg-8">
												<h5><?php echo e(__('Stripe Method')); ?></h5>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div class="tw_checkbox checkbox_group">
													<input id="isenable" name="isenable" type="checkbox" <?php echo e($stripe_data_list['isenable'] == 1 ? 'checked' : ''); ?>>
													<label for="isenable"><?php echo e(__('Active/Inactive')); ?></label>
													<span></span>
												</div>
												<div class="form-group">
													<label for="stripe_key"><?php echo e(__('Publishable Key')); ?><span class="red">*</span></label>
													<input type="text" name="stripe_key" id="stripe_key" class="form-control parsley-validated" data-required="true" value="<?php echo e($stripe_data_list['stripe_key']); ?>">
												</div>
												<div class="form-group">
													<label for="stripe_secret"><?php echo e(__('Stripe Secret')); ?><span class="red">*</span></label>
													<input type="text" name="stripe_secret" id="stripe_secret" class="form-control parsley-validated" data-required="true" value="<?php echo e($stripe_data_list['stripe_secret']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://stripe.com/">Create an Account Stripe</a></small>
												</div>
												<div class="form-group">
													<label for="currency"><?php echo e(__('Currency')); ?><span class="red">*</span></label>
													<input type="text" name="currency" id="currency" class="form-control parsley-validated" data-required="true" value="<?php echo e($stripe_data_list['currency']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://stripe.com/docs/currencies">Currencies</a></small>
												</div>
											</div>
											<div class="col-lg-4"></div>
										</div>
										<div class="row tabs-footer mt-15">
											<div class="col-lg-12">
												<a id="submit-form-stripe" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
											</div>
										</div>
									</form>
								</div>
								<!--/Stripe Form-->
								
								<!--/Paypal Form-->
								<div id="form-panel-4" class="dnone">
									<form novalidate="" data-validate="parsley" id="paypal_formId">
										<div class="row mb-10">
											<div class="col-lg-8">
												<h5><?php echo e(__('Paypal Method')); ?></h5>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div class="tw_checkbox checkbox_group">
													<input id="isenable_paypal" name="isenable_paypal" type="checkbox" <?php echo e($paypal_data_list['isenable_paypal'] == 1 ? 'checked' : ''); ?>>
													<label for="isenable_paypal"><?php echo e(__('Active/Inactive')); ?></label>
													<span></span>
												</div>
												<div class="form-group">
													<label for="paypal_client_id"><?php echo e(__('Client ID')); ?><span class="red">*</span></label>
													<input type="text" name="paypal_client_id" id="paypal_client_id" class="form-control parsley-validated" data-required="true" value="<?php echo e($paypal_data_list['paypal_client_id']); ?>">
												</div>
												<div class="form-group">
													<label for="paypal_secret"><?php echo e(__('Secret')); ?><span class="red">*</span></label>
													<input type="text" name="paypal_secret" id="paypal_secret" class="form-control parsley-validated" data-required="true" value="<?php echo e($paypal_data_list['paypal_secret']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://www.paypal.com/">Create an Account Paypal</a></small>
												</div>
												<div class="form-group">
													<label for="paypal_currency"><?php echo e(__('Currency')); ?><span class="red">*</span></label>
													<input type="text" name="paypal_currency" id="paypal_currency" class="form-control parsley-validated" data-required="true" value="<?php echo e($paypal_data_list['paypal_currency']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://developer.paypal.com/docs/reports/reference/paypal-supported-currencies/">Currencies</a></small>
												</div>
												<div class="tw_checkbox checkbox_group">
													<input id="ismode_paypal" name="ismode_paypal" type="checkbox" <?php echo e($paypal_data_list['ismode_paypal'] == 1 ? 'checked' : ''); ?>>
													<label for="ismode_paypal"><?php echo e(__('Sandbox mode')); ?></label>
													<span></span>
												</div>
											</div>
											<div class="col-lg-4"></div>
										</div>
										<div class="row tabs-footer mt-15">
											<div class="col-lg-12">
												<a id="submit-form-paypal" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
											</div>
										</div>
									</form>
								</div>
								<!--/Paypal Form-->

								
								<!--/Razorpay Form-->
								<div id="form-panel-5" class="dnone">
									<form novalidate="" data-validate="parsley" id="razorpay_formId">
										<div class="row mb-10">
											<div class="col-lg-8">
												<h5><?php echo e(__('Razorpay Method')); ?></h5>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div class="tw_checkbox checkbox_group">
													<input id="isenable_razorpay" name="isenable_razorpay" type="checkbox" <?php echo e($razorpay_data_list['isenable_razorpay'] == 1 ? 'checked' : ''); ?>>
													<label for="isenable_razorpay"><?php echo e(__('Active/Inactive')); ?></label>
													<span></span>
												</div>
												<div class="form-group">
													<label for="razorpay_key_id"><?php echo e(__('Key Id')); ?><span class="red">*</span></label>
													<input type="text" name="razorpay_key_id" id="razorpay_key_id" class="form-control parsley-validated" data-required="true" value="<?php echo e($razorpay_data_list['razorpay_key_id']); ?>">
												</div>
												<div class="form-group">
													<label for="razorpay_key_secret"><?php echo e(__('Key Secret')); ?><span class="red">*</span></label>
													<input type="text" name="razorpay_key_secret" id="razorpay_key_secret" class="form-control parsley-validated" data-required="true" value="<?php echo e($razorpay_data_list['razorpay_key_secret']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://razorpay.com/">Create an Account Razorpay</a></small>
												</div>
												<div class="form-group">
													<label for="razorpay_currency"><?php echo e(__('Currency')); ?><span class="red">*</span></label>
													<input type="text" name="razorpay_currency" id="razorpay_currency" class="form-control parsley-validated" data-required="true" value="<?php echo e($razorpay_data_list['razorpay_currency']); ?>">
												</div>
												<div class="tw_checkbox checkbox_group">
													<input id="ismode_razorpay" name="ismode_razorpay" type="checkbox" <?php echo e($razorpay_data_list['ismode_razorpay'] == 1 ? 'checked' : ''); ?>>
													<label for="ismode_razorpay"><?php echo e(__('Test Mode')); ?></label>
													<span></span>
												</div>
											</div>
											<div class="col-lg-4"></div>
										</div>
										<div class="row tabs-footer mt-15">
											<div class="col-lg-12">
												<a id="submit-form-razorpay" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
											</div>
										</div>
									</form>
								</div>
								<!--/Razorpay Form-->

								<!--/Mollie Form-->
								<div id="form-panel-6" class="dnone">
									<form novalidate="" data-validate="parsley" id="mollie_formId">
										<div class="row mb-10">
											<div class="col-lg-8">
												<h5><?php echo e(__('Mollie Method')); ?></h5>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div class="tw_checkbox checkbox_group">
													<input id="isenable_mollie" name="isenable_mollie" type="checkbox" <?php echo e($mollie_data_list['isenable_mollie'] == 1 ? 'checked' : ''); ?>>
													<label for="isenable_mollie"><?php echo e(__('Active/Inactive')); ?></label>
													<span></span>
												</div>
												<div class="form-group">
													<label for="mollie_api_key"><?php echo e(__('API Key')); ?><span class="red">*</span></label>
													<input type="text" name="mollie_api_key" id="mollie_api_key" class="form-control parsley-validated" data-required="true" value="<?php echo e($mollie_data_list['mollie_api_key']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://www.mollie.com/">Create an Account Mollie</a></small>
												</div>
												<div class="form-group">
													<label for="mollie_currency"><?php echo e(__('Currency')); ?><span class="red">*</span></label>
													<input type="text" name="mollie_currency" id="mollie_currency" class="form-control parsley-validated" data-required="true" value="<?php echo e($mollie_data_list['mollie_currency']); ?>">
													<small class="form-text text-muted"><a target="_blank" href="https://docs.mollie.com/payments/multicurrency">Currencies</a></small>
												</div>
												<div class="tw_checkbox checkbox_group">
													<input id="ismode_mollie" name="ismode_mollie" type="checkbox" <?php echo e($mollie_data_list['ismode_mollie'] == 1 ? 'checked' : ''); ?>>
													<label for="ismode_mollie"><?php echo e(__('Sandbox mode')); ?></label>
													<span></span>
												</div>
											</div>
											<div class="col-lg-4"></div>
										</div>
										<div class="row tabs-footer mt-15">
											<div class="col-lg-12">
												<a id="submit-form-mollie" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
											</div>
										</div>
									</form>
								</div>
								<!--/Mollie Form-->
								
								<!--/Cash on Delivery (COD) Form-->
								<div id="form-panel-2" class="dnone">
									<form novalidate="" data-validate="parsley" id="cod_formId">
										<div class="row mb-10">
											<div class="col-lg-8">
												<h5><?php echo e(__('Cash on Delivery (COD)')); ?></h5>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div class="tw_checkbox checkbox_group">
													<input id="isenable_cod" name="isenable_cod" type="checkbox" <?php echo e($cod_data_list['isenable'] == 1 ? 'checked' : ''); ?>>
													<label for="isenable_cod"><?php echo e(__('Active/Inactive')); ?></label>
													<span></span>
												</div>
												<div class="form-group">
													<label for="description"><?php echo e(__('Description')); ?></label>
													<textarea name="description" class="form-control" rows="3"><?php echo e($cod_data_list['description']); ?></textarea>
												</div>
											</div>
											<div class="col-lg-4"></div>
										</div>
										<div class="row tabs-footer mt-15">
											<div class="col-lg-12">
												<a id="submit-form-cod" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
											</div>
										</div>
									</form>
								</div>
								<!--/Cash on Delivery (COD) Form-->
								
								<!--/Bank Transfer Form-->
								<div id="form-panel-3" class="dnone">
									<form novalidate="" data-validate="parsley" id="bank_formId">
										<div class="row mb-10">
											<div class="col-lg-8">
												<h5><?php echo e(__('Bank Transfer')); ?></h5>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div class="tw_checkbox checkbox_group">
													<input id="isenable_bank" name="isenable_bank" type="checkbox" <?php echo e($bank_data_list['isenable'] == 1 ? 'checked' : ''); ?>>
													<label for="isenable_bank"><?php echo e(__('Active/Inactive')); ?></label>
													<span></span>
												</div>
												<div class="form-group">
													<label for="description"><?php echo e(__('Description')); ?></label>
													<textarea name="description" class="form-control" rows="3"><?php echo e($bank_data_list['description']); ?></textarea>
												</div>
											</div>
											<div class="col-lg-4"></div>
										</div>
										<div class="row tabs-footer mt-15">
											<div class="col-lg-12">
												<a id="submit-form-bank" href="javascript:void(0);" class="btn blue-btn mr-10"><?php echo e(__('Save')); ?></a>
											</div>
										</div>
									</form>
								</div>
								<!--/Bank Transfer Form-->
							</div>
						</div>
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
<script type="text/javascript">
var TEXT = [];
	TEXT['Do you really want to edit this record'] = "<?php echo e(__('Do you really want to edit this record')); ?>";
</script>
<script src="<?php echo e(asset('public/backend/pages/payment-gateway.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp81\htdocs\relaxly\relaxly-v1.0.0\resources\views/backend/payment-methods.blade.php ENDPATH**/ ?>