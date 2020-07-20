/*Dashboard2 Init*/
"use strict"; 

	
/*****Ready function start*****/
$(document).ready(function(){
	if( $('#pie_chart_4').length > 0 ){
		$('#pie_chart_4').easyPieChart({
			barColor : '#0FC5BB',
			lineWidth: 20,
			animate: 3000,
			size:	165,
			lineCap: 'square',
			trackColor: '#f4f4f4',
			scaleColor: false,
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	}
	
	if( $('#datable_1').length > 0 )
		$('#datable_1').DataTable({
			"bFilter": false,
			"bLengthChange": false,
			"bPaginate": false,
			"bInfo": false,
			
		});
});
/*****Ready function end*****/

/*****Load function start*****/
$(window).on("load",function(){
	window.setTimeout(function(){
		$.toast({
			heading: 'Welcome to Goofy',
			text: 'Use the predefined ones, or specify a custom position object.',
			position: 'top-left',
			loaderBg:'#f8b32d',
			icon: '',
			hideAfter: 3500, 
			stack: 6
		});
	}, 3000);
});
/*****Load function* end*****/

/*****E-Charts function start*****/

/*****E-Charts function end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() { 
		if( $('#sparkline_4').length > 0 ){
			$("#sparkline_4").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
				type: 'line',
				width: '100%',
				height: '45',
				lineColor: '#0FC5BB',
				fillColor: '#0FC5BB',
				minSpotColor: '#0FC5BB',
				maxSpotColor: '#0FC5BB',
				spotColor: '#0FC5BB',
				highlightLineColor: '#0FC5BB',
				highlightSpotColor: '#0FC5BB'
			});
		}	
		if( $('#sparkline_5').length > 0 ){
			$("#sparkline_5").sparkline([0,2,8,6,8], {
				type: 'bar',
				width: '100%',
				height: '45',
				barWidth: '10',
				resize: true,
				barSpacing: '10',
				barColor: '#0FC5BB',
				highlightSpotColor: '#0FC5BB'
			});
		}	
		if( $('#sparkline_6').length > 0 ){
			$("#sparkline_6").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
				type: 'line',
				width: '100%',
				height: '50',
				lineColor: '#0FC5BB',
				fillColor: 'transparent',
				minSpotColor: '#0FC5BB',
				maxSpotColor: '#0FC5BB',
				spotColor: '#0FC5BB',
				highlightLineColor: '#0FC5BB',
				highlightSpotColor: '#0FC5BB'
			});
		}
	}
	var sparkResize;
/*****Sparkline function end*****/

/*****Resize function start*****/
var sparkResize,echartResize;
$(window).on("resize", function () {
	/*Sparkline Resize*/
	clearTimeout(sparkResize);
	sparkResize = setTimeout(sparklineLogin, 200);
	
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
sparklineLogin();
echartsConfig();
/*****Function Call end*****/