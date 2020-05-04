$(document).ready(function() {
	
	// Edit a post
	$(document).on('click', '#select', function() {
		var id_dkm = $(this).data('id_dkm');
		var nama = $(this).data('nama');
		var alamat = $(this).data('alamat');
		var description = $(this).data('description');

		console.log(description)
		$('#id_dkm').val(id_dkm);
		$('#nama').val(nama);
		$('#alamat').val(alamat);
		$('#description').val(description);
	});

})