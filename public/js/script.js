$(document).ready(function() {
	$('.modal-img').click(function() {
		$('#img-target').attr('src', $(this).data('main'));
		$('#img-modal').modal({
			backdrop:true,
			keyboard:true,
			show:true,
		});
	});
});