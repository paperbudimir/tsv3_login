$(document).ready(function(){

	var girls = {};

	function getGirls() {
		return $.ajax({
			type: 'GET',
			url: 'js/girls.json',
			dataType: 'json'
		});
	}

	getGirls().done(function(result){
		girls = result.girls;
		$.map(girls, function(girl){
			$('.girls-cont').append('<div class="girl-box"><div class="girl-box-tint"></div><img src="' + girl.thumb + '"/><div class="sitelogo"><img src="img/logos/' + girl.msite + '.png"/></div><div class="girl-box-name">' + girl.mname + '</div></div>');
		});
	});

});