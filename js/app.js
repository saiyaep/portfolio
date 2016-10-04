(function(){
	var app = angular.module('main', []);
	
	app.controller('ContentController', function(){
		this.content = siteContent;
	});
		  
	var siteContent = {
		'index':{ 
			'headerText':'FEATURED TOPICS',
			'b':2,
			'c':3
		},
		'index2':{ 
			'a':4,
			'b':5,
			'c':6
		}
	};
		
})();