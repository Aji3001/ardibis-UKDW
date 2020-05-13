$(document).ready(function () {

	//filter pencarian
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
	//end of filter pencarian

	//filter tambah document
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
	//end of filter tambah dokumen

	//cek password match
	function checkPasswordMatch() {
		var password = $("#txtNewPassword").val();
		var confirmPassword = $("#txtConfirmPassword").val();

		if (password != confirmPassword) {
			$("#txtConfirmPassword").removeClass("border-success");
			$("#txtConfirmPassword").addClass("border-danger");
			$("#divCheckPasswordMatch").html("<i><small class='text-danger'>Password Harus Sama</small></i>");
			$('#tbhUser').prop('disabled', true);
		} else {
			$("#txtConfirmPassword").removeClass("border-danger");
			$("#txtConfirmPassword").addClass("border-success");
			$("#divCheckPasswordMatch").html("<i><small class='text-success'>Password Cocok</small></i>");
			$('#tbhUser').prop('disabled', false);
		}
	}
	$("#txtConfirmPassword").keyup(checkPasswordMatch);
	//end of cek password match












});
