$(document).ready(function(){
	$('#paginator').datepaginator();

	function jadwalSholat(date){
		$.ajax({
			url: 'https://api.banghasan.com/sholat/format/json/jadwal/kota/681/tanggal/' + date,
			method: 'GET',
			datatype: 'JSON',
			success: function(result){
				var json = result.jadwal.data;
				$('#imsak12').html(json.imsak);
				$('#subuh12').html(json.subuh);
				$('#dzuhur12').html(json.dzuhur);
				$('#ashar12').html(json.ashar);
				$('#maghrib12').html(json.maghrib);
				$('#isya12').html(json.isya);
			}
		});
	}


	$(document).ready(function() {
		var mom = moment().format("YYYY-MM-DD");
		
		jadwalSholat(mom);
	});	
});