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

	function flipRandomOne() {
		var randomImage = Math.floor((Math.random() * girls.length) + 1);
		var randomGirl = Math.floor((Math.random() * girls.length) + 1);
		console.log(randomImage + " - " + randomGirl);
		var toBeReplaced = $('.girl-box:nth-child(' + randomImage + ')');
		var toBeReplacedContent = $(toBeReplaced).find('*');
		$(toBeReplaced).html('<div class="girl-box-tint"></div><img src="' + girls[randomGirl].thumb + '"/><div class="sitelogo"><img src="img/logos/' + girls[randomGirl].msite + '.png"/></div><div class="girl-box-name">' + girls[randomGirl].mname + '</div>');
	}

	setInterval(function(){
	// temporary switch for image changing trigger
	//$('.help-button').click(function(){
		flipRandomOne();
	//});
	},500);

});