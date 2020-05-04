$(document).ready(function () {

	$('.gets').click(function () {
		$('#filter').submit();
	});

	$('#key').change(function () {
		$('#filter').submit();
	});

	$('#kategori').change(function () {
		$('#filter').submit();
	});

	$('#keterangan').change(function () {
		$('#filter').submit();
	});

	$('.reset').click(function () {
		$('#key').val('');
		$('#kategori').val('default');
		$('#keterangan').val('default');
		$('.gets').attr('checked', false);
		$('#filter').submit();
	});

	$('#katselect').change(function () {
		$('#subkatselect').val('');
		$('#keterangandok').val('');
		$('#getDataFilter').submit();
	});

	$('#subkatselect').change(function () {
		$('#keterangandok').val('');
		$('#getDataFilter').submit();
	});
	$('#keterangandok').change(function () {
		$('#getDataFilter').submit();
	});

	$(function () {
		$('#switchdurasi').on('change', function (e) {

			if ($(this).is(':checked')) {
				$('#usedate').show(300);
			} else {
				$('#usedate').hide(300);
			}
		});
	});










});
