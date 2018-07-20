$(document).ready(function(){

	galaxy = $('.css-galaxy ul');

	make_galaxy(galaxy);

});

make_galaxy = function(galaxy) {

	for (i=0;i<=50;i++) {
		galaxy.append('<li><span></span></li>');
	}

}


