

<?php $__env->startSection('title', __('Home')); ?>
<?php 
$PageVariation = PageVariation();
$gtext = gtext();
?>

<?php $__env->startSection('meta-content'); ?>
	<meta name="keywords" content="<?php echo e($gtext['og_keywords']); ?>" />
	<meta name="description" content="<?php echo e($gtext['og_description']); ?>" />
	<meta property="og:title" content="<?php echo e($gtext['og_title']); ?>" />
	<meta property="og:site_name" content="<?php echo e($gtext['site_name']); ?>" />
	<meta property="og:description" content="<?php echo e($gtext['og_description']); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
	<meta property="og:image" content="<?php echo e(asset('public/media/'.$gtext['og_image'])); ?>" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="315" />
	<?php if($gtext['fb_publish'] == 1): ?>
	<meta name="fb:app_id" property="fb:app_id" content="<?php echo e($gtext['fb_app_id']); ?>" />
	<?php endif; ?>
	<meta name="twitter:card" content="summary_large_image">
	<?php if($gtext['twitter_publish'] == 1): ?>
	<meta name="twitter:site" content="<?php echo e($gtext['twitter_id']); ?>">
	<meta name="twitter:creator" content="<?php echo e($gtext['twitter_id']); ?>">
	<?php endif; ?>
	<meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
	<meta name="twitter:title" content="<?php echo e($gtext['og_title']); ?>">
	<meta name="twitter:description" content="<?php echo e($gtext['og_description']); ?>">
	<meta name="twitter:image" content="<?php echo e(asset('public/media/'.$gtext['og_image'])); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($PageVariation['home_variation'] == 'home_1'): ?>
<?php echo $__env->make('frontend.partials.homepage1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($PageVariation['home_variation'] == 'home_2'): ?> 
<?php echo $__env->make('frontend.partials.homepage2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($PageVariation['home_variation'] == 'home_3'): ?> 
<?php echo $__env->make('frontend.partials.homepage3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($PageVariation['home_variation'] == 'home_4'): ?> 
<?php echo $__env->make('frontend.partials.homepage4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<!-- Start of Modal -->
<div class="modal fade modal_newsletter_card" id="subscribe_popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" style="background-image: url(<?php echo e(asset('public/media/'.$gtext['bg_image_popup'])); ?>);">
			<button onclick="popup_modal_close()" type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
			
			<div class="modal-body">
				<div class="newsletter-card">
					<h2><?php echo e($gtext['subscribe_title']); ?></h2>
					<p><?php echo e($gtext['subscribe_popup_desc']); ?></p>
					<div class="newsletter-form">
						<form>
							<input name="newsletter_email" id="newsletter_email" type="email" class="form-control" placeholder="<?php echo e(__('Enter your email address')); ?>" />
							<a class="btn newsletter-btn newsletter_btn nletter_btn" href="javascript:void(0);"><?php echo e(__('Subscribe')); ?></a>
						</form>
						<div class="newsletter_msg mt10"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /End of Modal/ -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php if(Session::has('subscribePopupOff')): ?>
<?php else: ?>
	<?php if($gtext['is_subscribe_popup'] == 1): ?>
	<script type="text/javascript">
	(function ($) {
		'use strict';
		var subscribePopupModal = new bootstrap.Modal(document.getElementById('subscribe_popup'), {
		  keyboard: false
		});
		
		subscribePopupModal.show();
		
		//Subscribe for page
		$(document).on("click", ".newsletter_btn", function(event) {
			event.preventDefault();
			
			var newsletterEmail = $("#newsletter_email").val();
			var status = 'subscribed';
			
			var nletter_btn = $('.nletter_btn').html();
			var newsletter_recordid = '';
			
			var newsletter_email = newsletterEmail.trim();
			
			if(newsletter_email == ''){
				$('.newsletter_msg').html('<p class="text-danger">The email address field is required.</p>');
				return;
			}
			
			$.ajax({
				type : 'POST',
				url: base_url + '/frontend/saveSubscriber',
				data: 'RecordId=' + newsletter_recordid+'&email_address='+newsletter_email+'&status='+status,
				beforeSend: function() {
					$('.newsletter_msg').html('');
					$('.nletter_btn').html('<span class="spinner-border spinner-border-sm"></span> Please Wait...');
				},
				success: function (response) {			
					var msgType = response.msgType;
					var msg = response.msg;

					if (msgType == "success") {
						popup_modal_close();
						subscribePopupModal.hide();
						onSuccessMsg(msg);
					} else {
						$('.newsletter_msg').html('<p class="text-danger">'+msg+'</p>');
					}
					
					$('.nletter_btn').html(nletter_btn);
				}
			});
		});
	}(jQuery));

	function popup_modal_close() {
		$.ajax({
			type : 'POST',
			url: base_url + '/frontend/subscribePopupOff',
			data: 'PopupOff=OFF',
			success: function (response){}
		});
	}
	</script>
	<?php endif; ?>
<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/bootstrap-fonticon.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/bootstrap-datetimepicker.css')); ?>">
<script src="<?php echo e(asset('public/frontend/js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script type="text/javascript">
$(function () {
	"use strict";

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$("#checkin_date").datetimepicker({
		format: 'yyyy-mm-dd',
		startDate: new Date(),
		autoclose: true,
		todayBtn: false,
		minView: 2
	});

	$("#checkout_date").datetimepicker({
		format: 'yyyy-mm-dd',
		startDate: new Date(),
		autoclose: true,
		todayBtn: false,
		minView: 2
	});
});
</script>

<?php $__env->stopPush(); ?>	
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/projects/relaxly-v1.0.0/resources/views/frontend/home.blade.php ENDPATH**/ ?>