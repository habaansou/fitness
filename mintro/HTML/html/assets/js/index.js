$(function() {
	'use strict'
	
	/* Dashboard content */
	$('#compositeline').sparkline('html', {
		lineColor: '#7273f5',
		lineWidth: 2,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: 'rgba(114, 115, 245, 0.15) ',
		chartRangeMin: 0,
		chartRangeMax: 20,
		width: '100%',
		height: 30,
		disableTooltips: true
	});
	$('#compositeline2').sparkline('html', {
		lineColor: '#fa5c7c',
		lineWidth: 2,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: 'rgba(250, 92, 124, 0.13)',
		chartRangeMin: 0,
		chartRangeMax: 20,
		width: '100%',
		height: 30,
		disableTooltips: true
	});
	$('#compositeline3').sparkline('html', {
		lineColor: '#39afd1 ',
		lineWidth: 2,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: 'rgba(57, 175, 209, 0.13)',
		chartRangeMin: 0,
		chartRangeMax: 30,
		width: '100%',
		height: 30,
		disableTooltips: true
	});
	$('#compositeline4').sparkline('html', {
		lineColor: '#0acf97',
		lineWidth: 2,
		spotColor: false,
		minSpotColor: false,
		maxSpotColor: false,
		highlightSpotColor: null,
		highlightLineColor: null,
		fillColor: 'rgba(89, 208, 75,0.1)',
		chartRangeMin: 0,
		chartRangeMax: 20,
		width: '100%',
		height: 30,
		disableTooltips: true
	});
	
	
	/* Chart Donut */
    if ($("#chart-donut").length) {
            var doughnutChartCanvas = $("#chart-donut").get(0).getContext("2d");
            var doughnutPieData = {
                datasets: [{
                    data: [70, 30],
                    backgroundColor: ['#7273f5', '#fa5c7c'],
                    borderColor: ['#7273f5', '#fa5c7c'],
                }],
                labels: [
                    'Chrome',
                    'Firefox',
                    'Safari',
                    'Opera',
                    'IE',
                ]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 70,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
		
		
		/* Chart Donut */
		var plot1 = $.plot('#flotChart', [{
			data: flotSampleData5,
			color: '#7273f5'
		}, {
			data: flotSampleData3,
			color: '#fa5c7c'
		}], {
		series: {
			shadowSize: 0,
			lines: {
				show: true,
				lineWidth: 2,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0
					}, {
						opacity: 0.2
					}]
				}
			}
		},
		grid: {
			borderWidth: 0,
			borderColor: 'transparent',
			labelMargin: 5,
			markings: [{
				xaxis: {
					from: 10,
					to: 20
				},
				color: 'transparent'
			}]
		},
		yaxis: {
			show: false,
			color: '#ced4da',
			tickLength: 10,
			min: 0,
			max: 110,
			font: {
				size: 11,
				color: '#969dab'
			},
			tickFormatter: function formatter(val, axis) {
				return val + 'k';
			}
		},
		xaxis: {
			show: false,
			position: 'bottom',
			color: 'rgba(225, 225, 245,0.1)'
		}
	});
	var mqSM = window.matchMedia('(min-width: 576px)');
	var mqSMMD = window.matchMedia('(min-width: 576px) and (max-width: 991px)');
	var mqLG = window.matchMedia('(min-width: 992px)');

	function screenCheck() {
		if (mqSM.matches) {
			plot1.getAxes().yaxis.options.show = true;
			plot1.getAxes().xaxis.options.show = true;
		} else {
			plot1.getAxes().yaxis.options.show = false;
			plot1.getAxes().xaxis.options.show = false;
		}
		if (mqSMMD.matches) {
			var tick = [
				[0, '<span>Oct<\/span><span>10<\/span>'],
				[20, '<span>Oct<\/span><span>12<\/span>'],
				[40, '<span>Oct<\/span><span>14<\/span>'],
				[60, '<span>Oct<\/span><span>16<\/span>'],
				[80, '<span>Oct<\/span><span>18<\/span>'],
				[100, '<span>Oct<\/span><span>19<\/span>'],
				[120, '<span>Oct<\/span><span>20<\/span>'],
				[140, '<span>Oct<\/span><span>23<\/span>']
			];
			plot1.getAxes().xaxis.options.ticks = tick;
		}
		if (mqLG.matches) {
			var tick = [
				[10, '<span>Oct<\/span><span>10<\/span>'],
				[20, '<span>Oct<\/span><span>11<\/span>'],
				[30, '<span>Oct<\/span><span>12<\/span>'],
				[40, '<span>Oct<\/span><span>13<\/span>'],
				[50, '<span>Oct<\/span><span>14<\/span>'],
				[60, '<span>Oct<\/span><span>15<\/span>'],
				[70, '<span>Oct<\/span><span>16<\/span>'],
				[80, '<span>Oct<\/span><span>17<\/span>'],
				[90, '<span>Oct<\/span><span>18<\/span>'],
				[100, '<span>Oct<\/span><span>19<\/span>'],
				[110, '<span>Oct<\/span><span>20<\/span>'],
				[120, '<span>Oct<\/span><span>21<\/span>'],
				[130, '<span>Oct<\/span><span>22<\/span>'],
				[140, '<span>Oct<\/span><span>23<\/span>']
			];
			plot1.getAxes().xaxis.options.ticks = tick;
		}
	}
	screenCheck();
	mqSM.addListener(screenCheck);
	mqSMMD.addListener(screenCheck);
	mqLG.addListener(screenCheck);
	plot1.setupGrid();
	plot1.draw();
	
	
	
	
	
	






/** CHARTS **/
	var ctx1 = document.getElementById('chartBar1').getContext('2d');
	new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct'],
			datasets: [{
				data: [17, 13, 15, 22, 25, 18,22, 34, 25, 30, 50, 25],
				backgroundColor: '#39afd1'
			}]
		},
		options: {
			maintainAspectRatio: false,
			responsive: true,
			legend: {
				display: false,
				labels: {
					display: false
				}
			},
			scales: {
				yAxes: [{
					display: false,
					ticks: {
						beginAtZero: false,
						fontSize: 10,
						max: 35,
						padding: 0
					}
				}],
				xAxes: [{
					gridLines: {
						display: true,
						borderDash: [10, 4],
						color: '#e7ebf3',
						drawBorder: false
					},
					barPercentage: 0.4,
					ticks: {
						beginAtZero: true,
						fontSize: 11,
						fontFamily: 'Arial'
					}
				}]
			}
		}
	});
	
	if($('.peity-donut').length) {
		$('.peity-donut').peity('donut');
	  }

	if($('.peity-bar').length) {
		$('.peity-bar').peity('bar');
	 }
	 
	
});