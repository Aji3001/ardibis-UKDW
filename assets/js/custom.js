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


