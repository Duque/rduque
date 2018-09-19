class rDuque {

	constructor(){
		console.log("Let's Rock!");

		// Colors
		this.colors = {
			primary:'#FF8F00', 
			secondary:'#6A9D80', 
			secondary2:'#6D7297',
			white: '#FFFFFF',
			red: '#d50000',
			blue: '#007fff',
			amber: '#FFC107'
		};

		this.init();
	}

	init(){
		var app = this;

		// Events on page scroll
		app.scrollControl();
	}

	scrollControl() {
		var app = this;
	  var tecnologies = false;

		// On scroll, get scroll position and compare
		$(window).scroll(function() {
	    var height = $(window).scrollTop();

	    if(height  > 300 && tecnologies == false) {
					app.setTecnologies();
					tecnologies = true;
	    }
		});
	}

	setTecnologies(){
		var app = this;


		// HTML5
		var html5El = document.getElementById('html5Tecnologie').getContext('2d');
		var html5Tecnologie = new Chart(html5El, {
		    type: 'doughnut',
		    data: {
		    	labels: ['HTML5'],
		    	datasets: [
		    		{
		    			label: 'My first dataset',
		    			backgroundColor: [
		    				app.colors['red'],
		    				app.colors['white']
		    			],
	            borderColor: app.colors['white'],
	            borderWidth: '0',
	            data: [98,2],
		    		},
		    	]
		    },
		    options: {
		    	cutoutPercentage: 70,
		    	legend: {
		    		display: false,
		    	}
		    }
		});

		// CSS
		var css = document.getElementById('cssTecnologie').getContext('2d');
		var cssTecnologie = new Chart(css, {
		    type: 'doughnut',
		    data: {
		    	labels: ['CSS'],
		    	datasets: [
		    		{
		    			label: 'My first dataset',
		    			backgroundColor: [
		    				app.colors['blue'],
		    				app.colors['white']
		    			],
	            borderColor: app.colors['white'],
	            borderWidth: '0',
	            data: [95,5],
		    		},
		    	]
		    },
		    options: {
		    	cutoutPercentage: 70,
		    	legend: {
		    		display: false,
		    	}
		    }
		});

		// JS
		var js = document.getElementById('jsTecnologie').getContext('2d');
		var jsTecnologie = new Chart(js, {
		    type: 'doughnut',
		    data: {
		    	labels: ['JS'],
		    	datasets: [
		    		{
		    			label: 'My first dataset',
		    			backgroundColor: [
		    				app.colors['amber'],
		    				app.colors['white']
		    			],
	            borderColor: app.colors['white'],
	            borderWidth: '0',
	            data: [90,10],
		    		},
		    	]
		    },
		    options: {
		    	cutoutPercentage: 70,
		    	legend: {
		    		display: false,
		    	}
		    }
		});

		// PHP
		var php = document.getElementById('phpTecnologie').getContext('2d');
		var phpTecnologie = new Chart(php, {
		    type: 'doughnut',
		    data: {
		    	labels: ['PHP'],
		    	datasets: [
		    		{
		    			label: 'My first dataset',
		    			backgroundColor: [
		    				app.colors['secondary2'],
		    				app.colors['white']
		    			],
	            borderColor: app.colors['white'],
	            borderWidth: '0',
	            data: [90, 10],
		    		},
		    	]
		    },
		    options: {
		    	cutoutPercentage: 70,
		    	legend: {
		    		display: false,
		    	}
		    }
		});

	}

}

$(document).ready(function(){
	var app = new rDuque();
});